<?php

namespace App\Queries\Summary;

use App\Concerns\Base\FilterDateRange;
use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Summary\SummaryCashFlow;
use Illuminate\Database\Eloquent\Builder;

class SummaryCashFlowQuery extends BaseQueryBuilder
{
    use FilterDateRange;

    public function getBaseQuery(): Builder
    {
        return SummaryCashFlow::query()
            ->orderBy('group_date', 'desc');
    }

    public function applyFilterParams(): void
    {
        $this->filterDateRange('group_date');

    }
}
