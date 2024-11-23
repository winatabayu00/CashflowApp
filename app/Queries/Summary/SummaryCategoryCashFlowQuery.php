<?php

namespace App\Queries\Summary;

use App\Concerns\Base\FilterDateRange;
use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Summary\SummaryCategoryCashFlow;
use Illuminate\Database\Eloquent\Builder;

class SummaryCategoryCashFlowQuery extends BaseQueryBuilder
{
    use FilterDateRange;

    public function getBaseQuery(): Builder
    {
        return SummaryCategoryCashFlow::query()
            ->orderBy('group_date', 'desc');
    }

    public function applyFilterParams(): void
    {
        $this->filterDateRange('group_date');

    }
}
