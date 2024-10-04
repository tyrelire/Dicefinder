<?php

namespace ContainerVN8KaQI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInvitationControllerrespondInvitationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t03gBDU.App\Controller\InvitationController::respondInvitation()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t03gBDU.App\\Controller\\InvitationController::respondInvitation()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'invitation' => ['privates', '.errored..service_locator.t03gBDU.App\\Entity\\Invitation', NULL, 'Cannot autowire service ".service_locator.t03gBDU": it needs an instance of "App\\Entity\\Invitation" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'invitation' => 'App\\Entity\\Invitation',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\InvitationController::respondInvitation()', $container);
    }
}
