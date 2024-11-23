<?php

namespace App\Queries\Transaction;

use App\Concerns\Base\FilterDateRange;
use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Transaction\Transaction;
use Illuminate\Database\Eloquent\Builder;
use Winata\Core\Response\Exception\BaseException;

class TransactionQuery extends BaseQueryBuilder
{
    use FilterDateRange;

    /**
     * @return Builder
     */
    public function getBaseQuery(): Builder
    {
        return Transaction::query()
            ->orderBy('created_at', 'desc');
    }

    /**
     * @return void
     * @throws BaseException
     */
    public function applyFilterParams(): void
    {
        $request = request();

        $this->filterDateRange('date');

        $this->builder
            ->when(!empty($request->input('account_id')), static function (Builder $builder) use ($request) {
                $builder->where('account_id', '=', $request->input('account_id'));
            })
            ->when(!empty($request->input('category_id')), static function (Builder $builder) use ($request) {
                $builder->where('category_id', '=', $request->input('category_id'));
            })->when(!empty($request->input('type')), static function (Builder $builder) use ($request) {
                $builder->where('type', '=', $request->input('type'));
            });
    }
}
