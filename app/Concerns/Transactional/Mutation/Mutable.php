<?php

namespace App\Concerns\Transactional\Mutation;

use App\Models\Transactional\Mutation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property Collection<Mutation> $mutations
 **/
trait Mutable
{
    /**
     * Get starting balance.
     */
    public function getStartingAmount(): float
    {
        return $this->attributes[$this->getAmountKey()];
    }

    /**
     * Get Balance Key.
     */
    public function getAmountKey(): string
    {
        return property_exists($this, 'balanceKey') ? $this->balanceKey : 'balance';
    }

    /**
     * Get starting balance.
     */
    public function getStartingPaidAmount(): float|null
    {
        return $this->attributes[$this->getStartingPaidAmountKey()];
    }

    /**
     * Get Balance Key.
     */
    public function getStartingPaidAmountKey(): string|null
    {
        return property_exists($this, 'paidAmountKey') ? $this->paidAmountKey : null;
    }

    /**
     * Define morphToMany relationship with Mutation model.
     */
    public function mutations(): MorphMany
    {
        return $this->morphMany(Mutation::class, 'mutable', 'mutable_type', 'mutable_id');
    }

    /**
     * Get mutable id.
     */
    public function getMutableId(): int|string
    {
        return $this->{$this->getKeyName()};
    }

    public function getMutableItemName(): string
    {
        return method_exists($this, 'setMutableItemName') ? $this->setMutableItemName() : $this->name;
    }

    /**
     * @return string
     */
    public function getMutableName(): string
    {
        return property_exists($this, 'MORPH_ALIAS') ? $this->MORPH_ALIAS : $this->getMorphClass();
    }
}
