<?php

namespace App\Contracts\Transaction;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface HasTransaction
{
    public function transactions(): MorphMany;
    /**
     * Get transaction name mapping.
     */
    public function getTransactionName(): string;

    /**
     * Get transaction id.
     */
    public function getTransactionId(): int|string;
}
