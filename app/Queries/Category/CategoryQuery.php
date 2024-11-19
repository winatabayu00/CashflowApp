<?php

namespace App\Queries\Category;

use App\Core\QueryExtend\Abstracts\BaseQueryBuilder;
use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Builder;

class CategoryQuery extends BaseQueryBuilder
{

    /**
     * @return Builder
     */
    public function getBaseQuery(): Builder
    {
        return Category::query();
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
