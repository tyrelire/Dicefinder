<?php

namespace ContainerDlB9137;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFriendShipControlleracceptRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3TrbT4o.App\Controller\FriendShipController::acceptRequest()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3TrbT4o.App\\Controller\\FriendShipController::acceptRequest()'] = ($container->privates['.service_locator.3TrbT4o'] ?? $container->load('get_ServiceLocator_3TrbT4oService'))->withContext('App\\Controller\\FriendShipController::acceptRequest()', $container);
    }
}
