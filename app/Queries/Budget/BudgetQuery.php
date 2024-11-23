<?php

namespace App\Queries\Budget;

use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Budget\Budget;
use Illuminate\Database\Eloquent\Builder;

class BudgetQuery extends BaseQueryBuilder
{

    public function getBaseQuery(): Builder
    {
        return Budget::query();
    }

    public function applyFilterParams(): void
    {

    }
}
