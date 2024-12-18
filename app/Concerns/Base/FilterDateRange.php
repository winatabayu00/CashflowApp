<?php

namespace App\Concerns\Base;

use App\Enums\ResponseCode\ResponseCode;
use Illuminate\Database\Eloquent\Builder;
use Winata\Core\Response\Exception\BaseException;

trait FilterDateRange
{
    /**
     * @param string $column
     * @return void
     * @throws BaseException
     */
    public function filterDateRange(string $column = 'created_at'): void
    {
        if (!$this->builder instanceof Builder){
            throw new BaseException(rc: ResponseCode::ERR_QUERY_EXCEPTION);
        }

        $request = request();
        $this->builder
            ->when(!empty($request->input('date_from')), static function (Builder $builder) use ($column, $request) {
                $builder->where($column, '>=', $request->input('date_from'));
            })
            ->when(!empty($request->input('date_to')), static function (Builder $builder) use ($column, $request) {
                $builder->where($column, '<=', $request->input('date_to'));
            });
    }
}
