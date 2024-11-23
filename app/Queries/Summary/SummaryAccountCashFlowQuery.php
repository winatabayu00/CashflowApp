<?php

namespace App\Queries\Summary;

use App\Concerns\Base\FilterDateRange;
use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Summary\SummaryAccountCashFlow;
use Illuminate\Database\Eloquent\Builder;

class SummaryAccountCashFlowQuery extends BaseQueryBuilder
{
    use FilterDateRange;

    public function getBaseQuery(): Builder
    {
        return SummaryAccountCashFlow::query()
            ->orderBy('group_date', 'desc');
    }

    public function applyFilterParams(): void
    {
        $request = request();
        $this->filterDateRange('group_date');

        $this->builder
            ->when(!empty($request->input('account_id')), static function (Builder $builder) use ($request) {
                $builder->where('account_id', '=', $request->input('account_id'));
            });
    }
}
