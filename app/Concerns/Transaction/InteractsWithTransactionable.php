<?php

namespace App\Concerns\Transaction;

use App\Models\Transaction\Transaction;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait InteractsWithTransactionable
{
    /**
     * @return MorphMany
     */
    public function transactions(): MorphMany
    {
        return $this->morphMany(Transaction::class, 'transaction', 'transaction_type', 'transaction_id');
    }

    /**
     * Get transaction id.
     */
    public function getTransactionId(): int|string
    {
        return $this->{$this->getKeyName()};
    }

    /**
     * @return string
     */
    public function getTransactionName(): string
    {
        return property_exists($this, 'MORPH_ALIAS') ? $this->MORPH_ALIAS : $this->getMorphClass();
    }
}
