<?php

namespace Container9o9Ii2O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeJDRControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V4xD4HA.App\Controller\GroupeJDRController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V4xD4HA.App\\Controller\\GroupeJDRController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'groupeJDR' => ['privates', '.errored..service_locator.V4xD4HA.App\\Entity\\GroupeJDR', NULL, 'Cannot autowire service ".service_locator.V4xD4HA": it needs an instance of "App\\Entity\\GroupeJDR" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'invitationRepository' => ['privates', 'App\\Repository\\InvitationRepository', 'getInvitationRepositoryService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'notificationService' => ['privates', 'App\\Service\\NotificationService', 'getNotificationServiceService', true],
        ], [
            'groupeJDR' => 'App\\Entity\\GroupeJDR',
            'entityManager' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
            'invitationRepository' => 'App\\Repository\\InvitationRepository',
            'slugger' => '?',
            'notificationService' => 'App\\Service\\NotificationService',
        ]))->withContext('App\\Controller\\GroupeJDRController::edit()', $container);
    }
}
