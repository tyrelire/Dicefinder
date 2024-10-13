<?php

namespace Container58wFiBK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_UserCheckerLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.user_checker_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.user_checker_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => #[\Closure(name: 'App\\Security\\UserChecker')] fn () => ($container->privates['App\\Security\\UserChecker'] ??= new \App\Security\UserChecker())]);
    }
}
