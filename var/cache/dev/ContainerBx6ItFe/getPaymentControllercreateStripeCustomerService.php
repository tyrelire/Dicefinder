<?php

namespace ContainerBx6ItFe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentControllercreateStripeCustomerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hKA2je_.App\Controller\PaymentController::createStripeCustomer()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hKA2je_.App\\Controller\\PaymentController::createStripeCustomer()'] = ($container->privates['.service_locator.hKA2je_'] ?? $container->load('get_ServiceLocator_HKA2jeService'))->withContext('App\\Controller\\PaymentController::createStripeCustomer()', $container);
    }
}
