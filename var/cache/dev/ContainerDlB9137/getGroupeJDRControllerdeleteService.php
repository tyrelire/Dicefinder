<?php

namespace ContainerDlB9137;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeJDRControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f8sH7ah.App\Controller\GroupeJDRController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.f8sH7ah'] ?? $container->load('get_ServiceLocator_F8sH7ahService'));

        if (isset($container->privates['.service_locator.f8sH7ah.App\\Controller\\GroupeJDRController::delete()'])) {
            return $container->privates['.service_locator.f8sH7ah.App\\Controller\\GroupeJDRController::delete()'];
        }

        return $container->privates['.service_locator.f8sH7ah.App\\Controller\\GroupeJDRController::delete()'] = $a->withContext('App\\Controller\\GroupeJDRController::delete()', $container);
    }
}
