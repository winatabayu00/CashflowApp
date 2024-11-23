<?php

namespace App\Concerns\Transactional\Mutation;

use App\Actions\Transactional\Mutation\CreateMutation;
use App\Contracts\Transactional\Mutation\HasMutable;
use App\Enums\Transactional\Mutation\MutationInfo;
use App\Models\Transactional\Mutation;
use App\Models\User;
use Winata\Core\Response\Exception\BaseException;

trait InteractsWithMutation
{
    protected User $user;

    /**
     * @param User $user
     * @return $this
     */
    public function init(User $user): static
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @param float $amount
     * @param HasMutable $mutable
     * @param string $mutationInfo
     * @param bool $isLocking
     * @return $this
     * @throws BaseException
     */
    public function setMutable(
        float      $amount,
        HasMutable $mutable,
        string     $mutationInfo,
        string     $date,
        bool       $isLocking = true
    ): static
    {
        $this->interactWithMutation(
            user: $this->user,
            mutable: $mutable,
            mutationInfo: $mutationInfo,
            amount: $amount,
            date: $date,
            isLocking: $isLocking
        );

        return $this;
    }

    /**
     * @param User $user
     * @param HasMutable $mutable
     * @param string $mutationInfo
     * @param float $amount
     * @param bool $isLocking
     * @return Mutation
     * @throws BaseException
     */
    protected function interactWithMutation(
        User       $user,
        HasMutable $mutable,
        string     $mutationInfo,
        float      $amount,
        string     $date,
        bool       $isLocking = true
    ): Mutation
    {
        return (new CreateMutation(
            user: $user,
            mutable: $mutable,
            amount: $amount,
            mutationInfo: $mutationInfo,
            date: $date,
            isLocking: $isLocking,
        ))
            ->handle();
    }
}
