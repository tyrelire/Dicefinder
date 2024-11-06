<?php

namespace ContainerWNvH8nf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFriendShipControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FriendShipController' shared autowired service.
     *
     * @return \App\Controller\FriendShipController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'FriendShipController.php';

        $container->services['App\\Controller\\FriendShipController'] = $instance = new \App\Controller\FriendShipController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Repository\\FriendshipRepository'] ?? self::getFriendshipRepositoryService($container)), ($container->privates['App\\Service\\NotificationService'] ?? $container->load('getNotificationServiceService')));

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\FriendShipController', $container));

        return $instance;
    }
}
