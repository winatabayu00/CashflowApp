<?php

namespace App\Contracts\Budget;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface HasBudgetable
{
    public function budgets(): MorphMany;
    /**
     * Get budgetable name mapping.
     */
    public function getBudgetableName(): string;

    /**
     * Get budgetable name mapping.
     */
    public function getBudgetableItemName(): string;

    /**
     * Get budgetable id.
     */
    public function getBudgetableId(): int|string;
}
