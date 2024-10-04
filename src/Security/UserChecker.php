<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\User;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof User) {
            return;
        }

        // Si l'utilisateur n'est pas vérifié, on bloque l'authentification
        if (!$user->isVerified()) {
            throw new CustomUserMessageAccountStatusException('Votre email n\'a pas encore été vérifié.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // Vous pouvez ajouter des vérifications supplémentaires ici après l'authentification, si nécessaire
    }
}
