<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Config\Doctrine\Orm\EntityManagerConfig;

class UserManager
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    public function save(User $user, bool $isNeedFlush = false): void
    {
        $this->entityManager->persist($user);

        if ($isNeedFlush){
            $this->entityManager->flush();
        }
    }
}