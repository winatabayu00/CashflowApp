<?php

namespace App\Contracts\Transactional\Mutation;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface HasMutable
{
    /**
     * Define morphToMany relationship with Mutation model.
     */
    public function mutations(): MorphMany;

    /**
     * Get starting balance.
     */
    public function getStartingAmount(): float;

    /**
     * Get balance key column.
     */
    public function getAmountKey(): string;

    /**
     * Get paid balance. if any
     */
    public function getStartingPaidAmount(): float|null;

    /**
     * Get paid balance key column.
     */
    public function getStartingPaidAmountKey(): string|null;

    /**
     * Get mutable name mapping.
     */
    public function getMutableName(): string;

    /**
     * Get mutable id.
     */
    public function getMutableId(): int|string;

    /**
     * Reload a fresh model instance from the database.
     */
    public function freshLock(array|string $with = []): mixed;

    /**
     * Allow negative balance.
     */
    public function allowNegativeAmount(): bool;

    public function getMutableItemName(): string;
}
