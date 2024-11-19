<?php

namespace App\Core\QueryExtend\Concerns;

use App\Core\QueryExtend\BaseQueryBuilderExtend;
use Illuminate\Database\Eloquent\Builder;

trait QueryOrder
{
    /**
     * @param array|string|null $orderableColumns
     * @param string $direction
     * @return BaseQueryBuilderExtend|QueryOrder
     */
    public function _orderColumn(array|string|null $orderableColumns = null, string $direction = "ASC"): self
    {
        if (method_exists($this->builder->getModel(), 'getOrderableColumns')) {
            $orderableColumns = $this->builder->getModel()->getOrderableColumns();
        }
        $this->defaultOrderColumn();

        if (is_array($orderableColumns)) {
            $requestQueryParam = config("core.query-extend.order_query_param_root") ?
                request()->query(config("core.query-extend.order_query_param_root"), []) :
                request()->query();


            $columns = array_intersect_key($requestQueryParam, $orderableColumns);

            foreach ($columns as $columnName => $requestDirection) {
                $this->checkDirection($requestDirection);
                $this->builder->orderBy($orderableColumns[$columnName], $requestDirection);
            }
        }

        if (is_string($orderableColumns)) {
            $this->checkDirection($direction);
            $this->builder->orderBy($orderableColumns, $direction);
        }

        return $this;
    }


    /**
     * @return void
     */
    private function defaultOrderColumn(): void
    {
        if ($orderKey = config('core.query-extend.order_query_param_root')) {
            $requestCreatedOrder = empty(request()->query()[$orderKey]["created_at"]);
        } else {
            $requestCreatedOrder = empty(request()->query("order_created_at"));
        }

        $this->builder->when(!$requestCreatedOrder, function (Builder $query) use ($orderKey) {
            $direction = $orderKey ?
                request()->query()[$orderKey]["created_at"] :
                request()->query("order_created_at");

            $direction = strtolower($direction);

            if ($direction === "asc" || $direction === "desc") {
                $query->orderBy("created_at", $direction);
            }
        });
    }


    /**
     * Use set direction into ASC when direction is not between ASC or DESC
     * @param $requestDirection
     * @return void
     */
    private function checkDirection(&$requestDirection): void
    {
        $requestDirection = strtoupper($requestDirection);

        if ($requestDirection !== "ASC" && $requestDirection !== "DESC") {
            $requestDirection = "ASC";
        }
    }

}
