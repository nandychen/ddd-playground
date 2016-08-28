<?php

namespace Leos\Domain\User\Repository;

use Leos\Domain\User\Model\User;
use Leos\Domain\User\ValueObject\UserId;

/**
 * Interface UserRepositoryInterface
 *
 * @package Leos\Domain\User\Repository
 */
interface UserRepositoryInterface
{
    /**
     * @param UserId $userId
     * @return null|User
     */
    public function findById(UserId $userId);
    
    /**
     * @param string $username
     *
     * @return null|User
     */
    public function findByUsername(string $username);

    /**
     * @param User $user
     * @return void
     */
    public function save(User $user);
}
