<?php

namespace App\Queries\Mutation;

use App\Concerns\Base\FilterDateRange;
use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Transactional\Mutation;
use Illuminate\Database\Eloquent\Builder;

class MutationQuery extends BaseQueryBuilder
{
    use FilterDateRange;

    public function getBaseQuery(): Builder
    {
        return Mutation::query()
            ->orderBy('date', 'desc');
    }

    public function applyFilterParams(): void
    {
        $request = request();
        $this->filterDateRange('date');

        $this->builder
            ->when(!empty($request->input('type')), static function (Builder $builder) use ($request) {
                $builder->where('type', '=', $request->input('type'));
            });

    }
}
