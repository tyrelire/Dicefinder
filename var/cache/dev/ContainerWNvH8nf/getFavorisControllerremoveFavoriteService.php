<?php

namespace ContainerWNvH8nf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFavorisControllerremoveFavoriteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8bi2G4e.App\Controller\FavorisController::removeFavorite()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8bi2G4e.App\\Controller\\FavorisController::removeFavorite()'] = ($container->privates['.service_locator.8bi2G4e'] ?? $container->load('get_ServiceLocator_8bi2G4eService'))->withContext('App\\Controller\\FavorisController::removeFavorite()', $container);
    }
}
