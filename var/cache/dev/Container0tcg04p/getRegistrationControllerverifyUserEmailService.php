<?php

namespace Container0tcg04p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerverifyUserEmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fdTWzgN.App\Controller\RegistrationController::verifyUserEmail()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fdTWzgN.App\\Controller\\RegistrationController::verifyUserEmail()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('App\\Controller\\RegistrationController::verifyUserEmail()', $container);
    }
}
