<?php

namespace App\Http\Controllers\Api\SelectOption;

use App\Enums\Account\AccountType;
use App\Enums\Budget\BudgetStatus;
use App\Enums\Category\CategoryType;
use App\Enums\ScheduleTransaction\ScheduleAction;
use App\Enums\ScheduleTransaction\ScheduleStatus;
use App\Enums\ScheduleTransaction\ScheduleType;
use App\Enums\Transaction\TransactionType;
use App\Http\Controllers\Api\Controller;
use App\Models\Account\Account;
use App\Models\Category\Category;
use App\Queries\Account\AccountQuery;
use App\Queries\Category\CategoryQuery;
use Dentro\Yalr\Attributes;
use Winata\Core\Response\Http\Response;

#[Attributes\Prefix('')]
#[Attributes\Name('', true, false)]
class GlobalSelectOptionController extends Controller
{
    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'account-types')]
    public function accountTypes(): \Winata\Core\Response\Http\Response
    {
        $accountTypes = AccountType::options();

        $data = collect($accountTypes)
            ->map(function ($key, $value) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'category-types')]
    public function categoryTypes(): \Winata\Core\Response\Http\Response
    {
        $categoryTypes = CategoryType::options();

        $data = collect($categoryTypes)
            ->map(function ($key, $value) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'transaction-types')]
    public function transactionTypes(): \Winata\Core\Response\Http\Response
    {
        $transactionTypes = TransactionType::options();

        $data = collect($transactionTypes)
            ->map(function ($key, $value) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'schedule-types')]
    public function scheduleTypes(): \Winata\Core\Response\Http\Response
    {
        $scheduleTypes = ScheduleType::options();

        $data = collect($scheduleTypes)
            ->map(function ($key, $value) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'schedule-actions')]
    public function scheduleActions(): \Winata\Core\Response\Http\Response
    {
        $scheduleTypes = ScheduleAction::options();

        $data = collect($scheduleTypes)
            ->map(function ($key, $value) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'schedule-status')]
    public function scheduleStatus(): \Winata\Core\Response\Http\Response
    {
        $scheduleStatus = ScheduleStatus::options();

        $data = collect($scheduleStatus)
            ->map(function ($key, $value) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'budget-status')]
    public function budgetStatus(): \Winata\Core\Response\Http\Response
    {
        $budgetStatus = BudgetStatus::options();

        $data = collect($budgetStatus)
            ->map(function ($key, $value) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'categories')]
    public function categories(): \Winata\Core\Response\Http\Response
    {
        $user = auth()->user();
        $accounts = CategoryQuery::byUser($user->id)
            ->filterColumn()
            ->orderColumn()
            ->getAllData();

        $data = collect($accounts)
            ->map(function (Category $data) {
                return [
                    'id' => $data->id,
                    'name' => $data->name,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param
     * @return Response
     */
    #[Attributes\Get(uri: 'accounts')]
    public function accounts(): \Winata\Core\Response\Http\Response
    {
        $user = auth()->user();
        $accounts = AccountQuery::byUser($user->id)
            ->filterColumn()
            ->orderColumn()
            ->getAllData();

        $data = collect($accounts)
            ->map(function (Account $data) {
                return [
                    'id' => $data->id,
                    'name' => $data->name,
                ];
            });
        return $this->response($data);
    }
}
