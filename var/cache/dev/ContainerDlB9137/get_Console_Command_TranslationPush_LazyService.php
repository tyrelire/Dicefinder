<?php

namespace ContainerDlB9137;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationPush_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.translation_push.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.translation_push.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('translation:push', [], 'Push translations to a given provider.', false, #[\Closure(name: 'console.command.translation_push', class: 'Symfony\\Component\\Translation\\Command\\TranslationPushCommand')] fn (): \Symfony\Component\Translation\Command\TranslationPushCommand => ($container->privates['console.command.translation_push'] ?? $container->load('getConsole_Command_TranslationPushService')));
    }
}
