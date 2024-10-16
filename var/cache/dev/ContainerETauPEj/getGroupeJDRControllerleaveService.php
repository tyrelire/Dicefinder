<?php

namespace ContainerETauPEj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeJDRControllerleaveService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f8sH7ah.App\Controller\GroupeJDRController::leave()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f8sH7ah.App\\Controller\\GroupeJDRController::leave()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'groupeJDR' => ['privates', '.errored..service_locator.f8sH7ah.App\\Entity\\GroupeJDR', NULL, 'Cannot autowire service ".service_locator.f8sH7ah": it needs an instance of "App\\Entity\\GroupeJDR" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'notificationService' => ['privates', 'App\\Service\\NotificationService', 'getNotificationServiceService', true],
        ], [
            'groupeJDR' => 'App\\Entity\\GroupeJDR',
            'entityManager' => '?',
            'notificationService' => 'App\\Service\\NotificationService',
        ]))->withContext('App\\Controller\\GroupeJDRController::leave()', $container);
    }
}