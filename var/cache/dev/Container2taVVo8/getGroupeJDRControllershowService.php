<?php

namespace Container2taVVo8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeJDRControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b7WMJCv.App\Controller\GroupeJDRController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b7WMJCv.App\\Controller\\GroupeJDRController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'groupeJDR' => ['privates', '.errored..service_locator.b7WMJCv.App\\Entity\\GroupeJDR', NULL, 'Cannot autowire service ".service_locator.b7WMJCv": it needs an instance of "App\\Entity\\GroupeJDR" but this type has been excluded in "config/services.yaml".'],
        ], [
            'groupeJDR' => 'App\\Entity\\GroupeJDR',
        ]))->withContext('App\\Controller\\GroupeJDRController::show()', $container);
    }
}