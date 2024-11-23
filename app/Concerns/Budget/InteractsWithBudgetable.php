<?php

namespace App\Concerns\Budget;

use App\Models\Budget\Budget;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait InteractsWithBudgetable
{
    /**
     * @return MorphMany
     */
    public function budgets(): MorphMany
    {
        return $this->morphMany(Budget::class, 'budgetable', 'budgetable_type', 'budgetable_id');
    }

    /**
     * Get mutable id.
     */
    public function getBudgetableId(): int|string
    {
        return $this->{$this->getKeyName()};
    }

    /**
     * @return string
     */
    public function getBudgetableName(): string
    {
        return property_exists($this, 'MORPH_ALIAS') ? $this->MORPH_ALIAS : $this->getMorphClass();
    }

    /**
     * @return string
     */
    public function getBudgetableItemName(): string
    {
        return $this->name;
    }
}
