<?php

namespace App\Controller;

use Stripe\Stripe;
use Stripe\StripeClient;
use App\Entity\Notification;
use App\Entity\User;
use Stripe\Checkout\Session;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        $user = $this->getUser();
    
        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');
    
        try {
            $customerId = $this->createOrRetrieveStripeCustomer($user);

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price' => 'price_1QCS8N1qYsqow2KM1blvUxAV',
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'customer' => $customerId,
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
        $user = $this->getUser();
    
        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');
    
        try {
            $customerId = $this->createOrRetrieveStripeCustomer($user);

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price' => 'price_1QCr841qYsqow2KMl3Pv03YO',
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'customer' => $customerId,
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
        $user = $this->getUser();
    
        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');
    
        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price' => 'price_1QCr8N1qYsqow2KM5qcnpESo',
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
            $this->createOrRetrieveStripeCustomer($user);
    
            $user->setIsVip(true);
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $this->createNotification($user, 'Félicitations ! Vous avez acheté le VIP.', 'vip_purchase');
    
            return $this->render('payment/success.html.twig', [
                'message' => 'Votre paiement a été réussi. Bienvenue dans le programme VIP !'
            ]);
        }
        return $this->redirectToRoute('app_home');
    }
    
    
    public function createStripeCustomer(User $user): string
    {
        $stripe = new StripeClient('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');
    
        if ($user->getStripeCustomerId()) {
            return $user->getStripeCustomerId();
        }
    
        $customer = $stripe->customers->create([
            'email' => $user->getEmail(),
            'name' => $user->getFirstName() . ' ' . $user->getLastName(),
        ]);
    
        $user->setStripeCustomerId($customer->id);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    
        return $customer->id;
    }

    public function createOrRetrieveStripeCustomer(User $user): string
    {
        $stripe = new StripeClient('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');

        if ($user->getStripeCustomerId()) {
            return $user->getStripeCustomerId();
        }

        $customer = $stripe->customers->create([
            'email' => $user->getEmail(),
            'name' => $user->getFirstName() . ' ' . $user->getLastName(),
        ]);

        $user->setStripeCustomerId($customer->id);
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $customer->id;
    }

        public function createNotification(User $user, string $message, string $type): void
        {
            $notification = new Notification();
            $notification->setRecipient($user);
            $notification->setMessage($message);
            $notification->setType($type); 
            $notification->setRead(false);
            $notification->setCreatedAt(new \DateTime());
        
            $this->entityManager->persist($notification);
            $this->entityManager->flush();
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
        $user = $this->getUser();
    
        if ($recipient && $user) {
            $recipient->setIsVip(true);
            $this->entityManager->persist($recipient);
            $this->entityManager->flush();
    
            $this->createNotification($user, 'Vous avez offert le VIP à ' . $recipient->getUsername(), 'vip_gift_offered');
    
            $this->createNotification($recipient, $user->getUsername() . ' vous a offert le VIP.', 'vip_gift_received');
    
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

    #[Route('/stripe/webhook', name: 'app_stripe_webhook', methods: ['POST'])]
    public function handleStripeWebhook(Request $request): Response
    {
        $payload = json_decode($request->getContent(), true);
        error_log('Payload reçu: ' . json_encode($payload));
    
        if ($payload['type'] === 'customer.subscription.deleted') {
            $customerId = $payload['data']['object']['customer'];
            error_log('Customer ID reçu: ' . $customerId);
    
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['stripeCustomerId' => $customerId]);
    
            if ($user && $user->getIsVip()) {
                $user->setIsVip(false);
                $this->entityManager->persist($user);
                $this->entityManager->flush();
                error_log('Utilisateur trouvé et mis à jour : ' . $user->getEmail());
                
                $this->createNotification($user, 'Votre abonnement VIP a expiré.', 'vip');
            } else {
                error_log('Utilisateur introuvable ou déjà non-VIP.');
            }
        }
    
        return new Response('Webhook handled', 200);
    } 
}
