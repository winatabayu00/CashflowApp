<?php

namespace App\Queries\ScheduleTransaction;

use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Transaction\ScheduleTransaction;
use Illuminate\Database\Eloquent\Builder;

class ScheduleTransactionQuery extends BaseQueryBuilder
{

    /**
     * @return Builder
     */
    public function getBaseQuery(): Builder
    {
        return ScheduleTransaction::query();
    }

    /**
     * @return void
     */
    public function applyFilterParams(): void
    {
    }
}
