<?php

namespace Container8I003xq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeJDRControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SE5FUJN.App\Controller\GroupeJDRController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SE5FUJN.App\\Controller\\GroupeJDRController::index()'] = ($container->privates['.service_locator.SE5FUJN'] ?? $container->load('get_ServiceLocator_SE5FUJNService'))->withContext('App\\Controller\\GroupeJDRController::index()', $container);
    }
}
