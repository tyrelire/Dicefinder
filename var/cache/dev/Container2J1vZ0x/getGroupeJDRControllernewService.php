<?php

namespace Container2J1vZ0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeJDRControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..fUBbna.App\Controller\GroupeJDRController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator..fUBbna'] ?? $container->load('get_ServiceLocator__FUBbnaService'));

        if (isset($container->privates['.service_locator..fUBbna.App\\Controller\\GroupeJDRController::new()'])) {
            return $container->privates['.service_locator..fUBbna.App\\Controller\\GroupeJDRController::new()'];
        }

        return $container->privates['.service_locator..fUBbna.App\\Controller\\GroupeJDRController::new()'] = $a->withContext('App\\Controller\\GroupeJDRController::new()', $container);
    }
}