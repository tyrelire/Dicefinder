<?php

namespace Container9o9Ii2O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..fUBbna.App\Controller\ProfileController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..fUBbna.App\\Controller\\ProfileController::edit()'] = ($container->privates['.service_locator..fUBbna'] ?? $container->load('get_ServiceLocator__FUBbnaService'))->withContext('App\\Controller\\ProfileController::edit()', $container);
    }
}
