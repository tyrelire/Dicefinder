<?php

namespace App\Controller;

use App\Entity\Availability;
use App\Form\UserType;
use App\Form\PasswordChangeSettingsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SettingsAccountController extends AbstractController
{
    #[Route('/settings/account', name: 'app_settings_account')]
    public function index(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();
        
        // Récupérer les disponibilités existantes
        $availabilities = $entityManager->getRepository(Availability::class)->findBy(['user' => $user]);
        $availabilityMap = [];

        // Créer une disponibilité pour chaque jour si elle n'existe pas encore
        foreach (Availability::DAYS_OF_WEEK as $day) {
            $availability = array_filter($availabilities, fn($a) => $a->getDayOfWeek() === $day);
            if ($availability) {
                $availabilityMap[$day] = reset($availability);
            } else {
                $newAvailability = new Availability();
                $newAvailability->setUser($user)
                                ->setDayOfWeek($day)
                                ->setAvailable(false)
                                ->setStartTime(null)
                                ->setEndTime(null);
                $entityManager->persist($newAvailability);
                $availabilityMap[$day] = $newAvailability;
            }
        }
        $entityManager->flush();

        // Gestion des formulaires utilisateur et mot de passe
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $passwordForm = $this->createForm(PasswordChangeSettingsType::class);
        $passwordForm->handleRequest($request);

        if ($request->isMethod('POST')) {
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($user);
                $entityManager->flush();
                $this->addFlash('success', 'Profil mis à jour avec succès.');
                return $this->redirectToRoute('app_settings_account');
            }

            if ($passwordForm->isSubmitted() && $passwordForm->isValid()) {
                $this->handlePasswordChange($passwordForm, $passwordHasher, $entityManager, $user);
                return $this->redirectToRoute('app_settings_account');
            }

            // Traitement des disponibilités
            foreach (Availability::DAYS_OF_WEEK as $day) {
                $availability = $availabilityMap[$day];

                // Récupérer les valeurs actuelles pour comparaison
                $currentIsAvailable = $availability->isAvailable();
                $currentStartTime = $availability->getStartTime() ? $availability->getStartTime()->format('H:i') : null;
                $currentEndTime = $availability->getEndTime() ? $availability->getEndTime()->format('H:i') : null;

                // Vérifier explicitement si `is_available_<day>` est défini dans la requête pour ne pas l’écraser si absent
                $submittedIsAvailable = $request->request->has("is_available_$day") 
                                        ? $request->request->get("is_available_$day") === '1' 
                                        : $currentIsAvailable;

                $submittedStartTime = $request->request->get("start_time_$day");
                $submittedEndTime = $request->request->get("end_time_$day");

                // Comparer les valeurs soumises avec les valeurs actuelles
                $hasChanged = false;
                if ($submittedIsAvailable !== $currentIsAvailable) {
                    $availability->setAvailable($submittedIsAvailable);
                    $hasChanged = true;
                }
                if ($submittedStartTime !== $currentStartTime && $submittedIsAvailable) {
                    $availability->setStartTime($submittedStartTime ? \DateTime::createFromFormat('H:i', $submittedStartTime) : null);
                    $hasChanged = true;
                }
                if ($submittedEndTime !== $currentEndTime && $submittedIsAvailable) {
                    $availability->setEndTime($submittedEndTime ? \DateTime::createFromFormat('H:i', $submittedEndTime) : null);
                    $hasChanged = true;
                }

                // Si des modifications ont été effectuées, persister les changements
                if ($hasChanged) {
                    $entityManager->persist($availability);
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Disponibilités mises à jour avec succès.');
            return $this->redirectToRoute('app_settings_account');
        }

        return $this->render('settings_account/index.html.twig', [
            'form' => $form->createView(),
            'passwordForm' => $passwordForm->createView(),
            'availabilities' => $availabilityMap, // Passer les disponibilités existantes pour affichage
        ]);
    }

    private function handlePasswordChange($passwordForm, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager, $user): void
    {
        $newPassword = $passwordForm->get('new_password')->getData();
        $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
        $user->setPassword($hashedPassword);

        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'Mot de passe mis à jour avec succès.');
    }
}
