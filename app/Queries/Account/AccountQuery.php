<?php

namespace App\Queries\Account;

use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Account\Account;
use Illuminate\Database\Eloquent\Builder;

class AccountQuery extends BaseQueryBuilder
{

    /**
     * @return Builder
     */
    public function getBaseQuery(): Builder
    {
        return Account::query();
    }

    /**
     * @return void
     */
    public function applyFilterParams(): void
    {
        $request = request();
        $this->builder
            ->when(!empty($request->input('type')), static function (Builder $builder) use ($request) {
                $builder->where('type', '=', $request->input('type'));
            });
    }
}
