<?php

namespace ContainerETauPEj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.S5Dp5Zc.App\Entity\Notification' shared service.
     *
     * @return \App\Entity\Notification
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.S5Dp5Zc": it needs an instance of "App\\Entity\\Notification" but this type has been excluded in "config/services.yaml".');
    }
}
