<?php

namespace App\EventSubscriber;

use App\Repository\InvitationRepository;
use App\Repository\NotificationRepository;
use App\Repository\FriendshipRepository;
use Twig\Environment;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class NotificationSubscriber implements EventSubscriberInterface
{
    private Security $security;
    private Environment $twig;
    private NotificationRepository $notificationRepository;
    private InvitationRepository $invitationRepository;
    private FriendshipRepository $friendshipRepository;

    public function __construct(
        Security $security,
        Environment $twig,
        NotificationRepository $notificationRepository,
        InvitationRepository $invitationRepository,
        FriendshipRepository $friendshipRepository
    ) {
        $this->security = $security;
        $this->twig = $twig;
        $this->notificationRepository = $notificationRepository;
        $this->invitationRepository = $invitationRepository;
        $this->friendshipRepository = $friendshipRepository;
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

        if ($user) {
            $notifications = $this->notificationRepository->findBy([
                'recipient' => $user,
                'isRead' => false,
            ]);

            $invitations = $this->invitationRepository->findBy([
                'user' => $user,
                'status' => 'pending',
            ]);

            $friendRequests = $this->friendshipRepository->findBy([
                'receiver' => $user,
                'status' => 'pending',
            ]);

            $this->twig->addGlobal('notifications', $notifications);
            $this->twig->addGlobal('invitations', $invitations);
            $this->twig->addGlobal('friendRequests', $friendRequests);
        }
    }
}
