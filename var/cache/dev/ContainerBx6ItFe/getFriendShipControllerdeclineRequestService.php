<?php

namespace ContainerBx6ItFe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFriendShipControllerdeclineRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3TrbT4o.App\Controller\FriendShipController::declineRequest()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3TrbT4o.App\\Controller\\FriendShipController::declineRequest()'] = ($container->privates['.service_locator.3TrbT4o'] ?? $container->load('get_ServiceLocator_3TrbT4oService'))->withContext('App\\Controller\\FriendShipController::declineRequest()', $container);
    }
}