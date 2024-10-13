<?php

namespace Container58wFiBK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlayerInvitationControllerremoveUserFromJdrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cPirmC2.App\Controller\PlayerInvitationController::removeUserFromJdr()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cPirmC2.App\\Controller\\PlayerInvitationController::removeUserFromJdr()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'groupeJdrRepository' => ['privates', 'App\\Repository\\GroupeJDRRepository', 'getGroupeJDRRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'groupeJdrRepository' => 'App\\Repository\\GroupeJDRRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\PlayerInvitationController::removeUserFromJdr()', $container);
    }
}
