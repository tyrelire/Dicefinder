<?php

namespace ContainerXkoRc0e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeJDRControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8bi2G4e.App\Controller\GroupeJDRController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8bi2G4e.App\\Controller\\GroupeJDRController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'groupeJDR' => ['privates', '.errored..service_locator.8bi2G4e.App\\Entity\\GroupeJDR', NULL, 'Cannot autowire service ".service_locator.8bi2G4e": it needs an instance of "App\\Entity\\GroupeJDR" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'groupeJDR' => 'App\\Entity\\GroupeJDR',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\GroupeJDRController::delete()', $container);
    }
}
