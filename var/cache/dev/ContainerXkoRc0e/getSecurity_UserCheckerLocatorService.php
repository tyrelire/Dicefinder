<?php

namespace ContainerXkoRc0e;

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
        return $container->privates['security.user_checker_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => #[\Closure(name: 'security.user_checker', class: 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserChecker')] fn () => ($container->privates['security.user_checker'] ??= new \Symfony\Component\Security\Core\User\InMemoryUserChecker())]);
    }
}
