<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager): Response
    {
        if (!$this->getUser()) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        $contact = new Contact();
        $user = $this->getUser();

        if (!$user instanceof \App\Entity\User) {
            throw new \Exception('L\'utilisateur connecté n\'est pas une instance de User.');
        }

        $contact->setEmail($user->getEmail());

        $name = trim($user->getFirstName() . ' ' . $user->getLastName());
        if (empty($name)) {
            $name = 'Pas renseigné';
        }
        $contact->setName($name);

        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact->setCreatedAt(new \DateTime());

            $entityManager->persist($contact);
            $entityManager->flush();

            $email = (new TemplatedEmail())
                ->from('bot@dicefinder.com')
                ->to('contact@dicefinder.com')
                ->subject($contact->getSubject())
                ->htmlTemplate('contact/contact_email.html.twig')
                ->context([
                    'contact_name' => $contact->getName(),
                    'contact_email' => $contact->getEmail(),
                    'message_content' => $contact->getMessage(),
                ]);

            $mailer->send($email);

            $this->addFlash('success', 'Votre message a été envoyé avec succès.');

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
