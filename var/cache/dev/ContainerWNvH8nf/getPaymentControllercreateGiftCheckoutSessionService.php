<?php

namespace ContainerWNvH8nf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentControllercreateGiftCheckoutSessionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bTA9FKH.App\Controller\PaymentController::createGiftCheckoutSession()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bTA9FKH.App\\Controller\\PaymentController::createGiftCheckoutSession()'] = ($container->privates['.service_locator.bTA9FKH'] ?? $container->load('get_ServiceLocator_BTA9FKHService'))->withContext('App\\Controller\\PaymentController::createGiftCheckoutSession()', $container);
    }
}
