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
        $request = request();

        $this->builder
            ->when(!empty($request->input('account_id')), static function (Builder $builder) use ($request) {
                $builder->where('account_id', '=', $request->input('account_id'));
            })
            ->when(!empty($request->input('category_id')), static function (Builder $builder) use ($request) {
                $builder->where('category_id', '=', $request->input('category_id'));
            })
            ->when(!empty($request->input('schedule_type')), static function (Builder $builder) use ($request) {
                $builder->where('schedule_type', '=', $request->input('schedule_type'));
            })
            ->when(!empty($request->input('transaction_type')), static function (Builder $builder) use ($request) {
                $builder->where('transaction_type', '=', $request->input('transaction_type'));
            });
    }
}
