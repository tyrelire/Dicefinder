<?php

namespace ContainerCa1RdZ9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TzkxWEsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TzkxWEs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TzkxWEs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\GroupeJDRController::index' => ['privates', '.service_locator.uqAk9vV.App\\Controller\\GroupeJDRController::index()', 'getGroupeJDRControllerindexService', true],
            'App\\Controller\\GroupeJDRController::new' => ['privates', '.service_locator..fUBbna.App\\Controller\\GroupeJDRController::new()', 'getGroupeJDRControllernewService', true],
            'App\\Controller\\GroupeJDRController::show' => ['privates', '.service_locator.b7WMJCv.App\\Controller\\GroupeJDRController::show()', 'getGroupeJDRControllershowService', true],
            'App\\Controller\\GroupeJDRController::edit' => ['privates', '.service_locator.KSb8udl.App\\Controller\\GroupeJDRController::edit()', 'getGroupeJDRControllereditService', true],
            'App\\Controller\\GroupeJDRController::delete' => ['privates', '.service_locator.8bi2G4e.App\\Controller\\GroupeJDRController::delete()', 'getGroupeJDRControllerdeleteService', true],
            'App\\Controller\\ProfileController::edit' => ['privates', '.service_locator.gigYcBf.App\\Controller\\ProfileController::edit()', 'getProfileControllereditService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.QVAk1vM.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.fdTWzgN.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\GroupeJDRController:index' => ['privates', '.service_locator.uqAk9vV.App\\Controller\\GroupeJDRController::index()', 'getGroupeJDRControllerindexService', true],
            'App\\Controller\\GroupeJDRController:new' => ['privates', '.service_locator..fUBbna.App\\Controller\\GroupeJDRController::new()', 'getGroupeJDRControllernewService', true],
            'App\\Controller\\GroupeJDRController:show' => ['privates', '.service_locator.b7WMJCv.App\\Controller\\GroupeJDRController::show()', 'getGroupeJDRControllershowService', true],
            'App\\Controller\\GroupeJDRController:edit' => ['privates', '.service_locator.KSb8udl.App\\Controller\\GroupeJDRController::edit()', 'getGroupeJDRControllereditService', true],
            'App\\Controller\\GroupeJDRController:delete' => ['privates', '.service_locator.8bi2G4e.App\\Controller\\GroupeJDRController::delete()', 'getGroupeJDRControllerdeleteService', true],
            'App\\Controller\\ProfileController:edit' => ['privates', '.service_locator.gigYcBf.App\\Controller\\ProfileController::edit()', 'getProfileControllereditService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.QVAk1vM.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.fdTWzgN.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\GroupeJDRController::index' => '?',
            'App\\Controller\\GroupeJDRController::new' => '?',
            'App\\Controller\\GroupeJDRController::show' => '?',
            'App\\Controller\\GroupeJDRController::edit' => '?',
            'App\\Controller\\GroupeJDRController::delete' => '?',
            'App\\Controller\\ProfileController::edit' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\GroupeJDRController:index' => '?',
            'App\\Controller\\GroupeJDRController:new' => '?',
            'App\\Controller\\GroupeJDRController:show' => '?',
            'App\\Controller\\GroupeJDRController:edit' => '?',
            'App\\Controller\\GroupeJDRController:delete' => '?',
            'App\\Controller\\ProfileController:edit' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
        ]);
    }
}
