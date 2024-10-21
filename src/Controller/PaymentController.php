<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\EntityManagerInterface;

class PaymentController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/vip', name: 'app_vip')]
    public function index(): Response
    {
        return $this->render('vip/vip.html.twig', [
            'stripe_public_key' => 'pk_test_51QBlZ71qYsqow2KMbEgpRLuCzHNSkIpbubTwkqwIMySi0fLK4L4T22jBPuz4NtOYfnVAaKqyxYBbyyjvwbZq35EW00WG6eGtGf',
        ]);
    }

    #[Route('/create-checkout-session/monthly', name: 'app_create_checkout_session_monthly', methods: ['POST'])]
    public function createCheckoutSessionMonthly(): JsonResponse
    {
        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Adhésion VIP Mensuelle',
                        ],
                        'unit_amount' => 499,
                        'recurring' => ['interval' => 'month'],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'success_url' => $this->generateUrl('app_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('app_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
            ]);

            return new JsonResponse(['id' => $session->id]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur lors de la création de la session Stripe: ' . $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/create-checkout-session/annual', name: 'app_create_checkout_session_annual', methods: ['POST'])]
    public function createCheckoutSessionAnnual(): JsonResponse
    {
        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Adhésion VIP Annuelle',
                        ],
                        'unit_amount' => 4999,
                        'recurring' => ['interval' => 'year'],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'success_url' => $this->generateUrl('app_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('app_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
            ]);

            return new JsonResponse(['id' => $session->id]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur lors de la création de la session Stripe: ' . $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/create-checkout-session/one-time', name: 'app_create_checkout_session_one_time', methods: ['POST'])]
    public function createCheckoutSessionOneTime(): JsonResponse
    {
        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Adhésion VIP - Paiement unique',
                        ],
                        'unit_amount' => 599,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => $this->generateUrl('app_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('app_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
            ]);

            return new JsonResponse(['id' => $session->id]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur lors de la création de la session Stripe: ' . $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/payment-success', name: 'app_payment_success')]
    public function paymentSuccess(): Response
    {
        $user = $this->getUser();

        if ($user) {
            $user->setIsVip(true);
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $this->render('payment/success.html.twig', [
                'message' => 'Votre paiement a été réussi. Bienvenue dans le programme VIP !'
            ]);
        }

        return $this->redirectToRoute('app_home');
    }

    #[Route('/payment-cancel', name: 'app_payment_cancel')]
    public function paymentCancel(): Response
    {
        return $this->render('payment/cancel.html.twig', [
            'message' => 'Le paiement a été annulé. Vous pouvez réessayer.'
        ]);
    }

    #[Route('/create-gift-checkout-session', name: 'app_create_gift_checkout_session', methods: ['POST'])]
    public function createGiftCheckoutSession(Request $request, UserRepository $userRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['gift_username']) || empty($data['gift_username'])) {
            return new JsonResponse(['error' => 'Nom d\'utilisateur non fourni.'], Response::HTTP_BAD_REQUEST);
        }

        $username = $data['gift_username'];
        $recipient = $userRepository->findOneBy(['username' => $username]);

        if (!$recipient) {
            return new JsonResponse(['error' => 'Utilisateur introuvable.'], Response::HTTP_BAD_REQUEST);
        }

        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Adhésion VIP pour ' . $recipient->getUsername(),
                        ],
                        'unit_amount' => 499,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => $this->generateUrl('app_gift_payment_success', ['id' => $recipient->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('app_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
            ]);

            return new JsonResponse(['id' => $session->id]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur lors de la création de la session Stripe: ' . $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }


    #[Route('/gift-payment-success/{id}', name: 'app_gift_payment_success')]
    public function giftPaymentSuccess($id, UserRepository $userRepository): Response
    {
        $recipient = $userRepository->find($id);

        if ($recipient) {
            $recipient->setIsVip(true);
            $this->entityManager->persist($recipient);
            $this->entityManager->flush();

            return $this->render('payment/success.html.twig', [
                'message' => 'Le paiement pour offrir l\'adhésion VIP à ' . $recipient->getUsername() . ' a été réussi !'
            ]);
        }

        return $this->redirectToRoute('app_home');
    }

    #[Route('/api/search-user', name: 'api_search_user', methods: ['GET'])]
    public function searchUser(Request $request, UserRepository $userRepository): JsonResponse
    {
        $username = $request->query->get('username', '');

        if (empty($username)) {
            return new JsonResponse(['error' => 'Aucun nom d\'utilisateur fourni.'], 400);
        }

        $user = $userRepository->findOneBy(['username' => $username]);

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non trouvé.'], 404);
        }

        return new JsonResponse([
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'avatar' => $user->getAvatar() ? '/uploads/avatars/' . $user->getAvatar() : '/images/default-avatar.png',
            'email' => $user->getEmail(),
            'isVip' => $user->getIsVip()
        ]);
    }
}
