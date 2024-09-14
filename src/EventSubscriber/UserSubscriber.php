<?php

namespace App\EventSubscriber;

use Twig\Environment;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class UserSubscriber implements EventSubscriberInterface
{
    private Security $security;
    private Environment $twig;

    public function __construct(Security $security, Environment $twig)
    {
        $this->security = $security;
        $this->twig = $twig;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onController',
        ];
    }

    public function onController(ControllerEvent $event): void
    {
        $user = $this->security->getUser();

        $this->twig->addGlobal('current_user', $user);
    }
}
