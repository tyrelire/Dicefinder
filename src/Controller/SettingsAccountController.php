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

        // Vérification de l'utilisateur
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        $availabilities = $this->initializeAvailabilities($user, $entityManager);

        // Formulaires de modification
        $form = $this->createForm(UserType::class, $user);
        $passwordForm = $this->createForm(PasswordChangeSettingsType::class);

        $form->handleRequest($request);
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

            // Mise à jour des disponibilités
            $this->updateAvailabilities($availabilities, $request, $entityManager);
        }

        return $this->render('settings_account/index.html.twig', [
            'form' => $form->createView(),
            'passwordForm' => $passwordForm->createView(),
            'availabilities' => $availabilities,
            'user' => $user,
        ]);
    }

    private function initializeAvailabilities($user, EntityManagerInterface $entityManager): array
    {
        $availabilities = $entityManager->getRepository(Availability::class)->findBy(['user' => $user]);
        $availabilityMap = [];

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

        return $availabilityMap;
    }

    private function updateAvailabilities(array $availabilities, Request $request, EntityManagerInterface $entityManager): void
    {
        foreach ($availabilities as $day => $availability) {
            $submittedIsAvailable = $request->request->get("is_available_$day") === '1';
            $submittedStartTime = $request->request->get("start_time_$day");
            $submittedEndTime = $request->request->get("end_time_$day");

            $hasChanged = false;

            if ($submittedIsAvailable !== $availability->isAvailable()) {
                $availability->setAvailable($submittedIsAvailable);
                $hasChanged = true;
            }

            if ($submittedIsAvailable) {
                $startTime = $submittedStartTime ? \DateTime::createFromFormat('H:i', $submittedStartTime) : null;
                $endTime = $submittedEndTime ? \DateTime::createFromFormat('H:i', $submittedEndTime) : null;

                if ($availability->getStartTime() != $startTime) {
                    $availability->setStartTime($startTime);
                    $hasChanged = true;
                }
                if ($availability->getEndTime() != $endTime) {
                    $availability->setEndTime($endTime);
                    $hasChanged = true;
                }
            }

            if ($hasChanged) {
                $entityManager->persist($availability);
            }
        }
        $entityManager->flush();

        $this->addFlash('success', 'Disponibilités mises à jour avec succès.');
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

    #[Route('/cancel-vip', name: 'app_cancel_vip', methods: ['POST'])]
    public function cancelVip(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if ($user && $user->isVip()) {
            $user->setIsVip(false);
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre abonnement VIP a été résilié.');
        } else {
            $this->addFlash('warning', 'Vous n\'avez pas d\'abonnement VIP actif.');
        }

        return $this->redirectToRoute('app_settings_account');
    }
}
