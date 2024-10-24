<?php

namespace ContainerDlB9137;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConversationRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ConversationRepository' shared autowired service.
     *
     * @return \App\Repository\ConversationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ConversationRepository.php';

        return $container->privates['App\\Repository\\ConversationRepository'] = new \App\Repository\ConversationRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
