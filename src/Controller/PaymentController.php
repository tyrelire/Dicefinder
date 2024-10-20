<?php

// App/Controller/PaymentController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
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

    #[Route('/payment', name: 'app_payment')]
    public function index(): Response
    {
        return $this->render('payment/index.html.twig');
    }

    #[Route('/create-checkout-session', name: 'app_create_checkout_session', methods: ['POST'])]
    public function createCheckoutSession(): JsonResponse
    {
        Stripe::setApiKey('sk_test_51QBlZ71qYsqow2KM9FZ9Rnbxpji5WHDxzcJ8gLmiGzWjI4Y1s96vTxk880TP4jj1KU8VGgTEP5uuwkAnlUwv8JNF00PhjAgwpy');

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Adhésion VIP',
                        ],
                        'unit_amount' => 499,
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
}
