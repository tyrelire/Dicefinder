<?php

namespace ContainerWNvH8nf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UEQmNZoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uEQmNZo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uEQmNZo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'playerMembershipRepository' => ['privates', 'App\\Repository\\PlayerMembershipRepository', 'getPlayerMembershipRepositoryService', true],
            'notificationService' => ['privates', 'App\\Service\\NotificationService', 'getNotificationServiceService', true],
        ], [
            'entityManager' => '?',
            'playerMembershipRepository' => 'App\\Repository\\PlayerMembershipRepository',
            'notificationService' => 'App\\Service\\NotificationService',
        ]);
    }
}
