<?php

namespace ContainerWNvH8nf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationHistoryRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\NotificationHistoryRepository' shared autowired service.
     *
     * @return \App\Repository\NotificationHistoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'NotificationHistoryRepository.php';

        return $container->privates['App\\Repository\\NotificationHistoryRepository'] = new \App\Repository\NotificationHistoryRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
