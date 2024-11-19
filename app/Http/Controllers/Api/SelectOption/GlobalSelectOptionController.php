<?php

namespace App\Http\Controllers\Api\SelectOption;

use App\Enums\Account\AccountType;
use App\Enums\Category\CategoryType;
use App\Enums\Transaction\TransactionType;
use App\Http\Controllers\Api\Controller;
use App\Models\Account\Account;
use App\Models\Category\Category;
use App\Queries\Account\AccountQuery;
use App\Queries\Category\CategoryQuery;
use Dentro\Yalr\Attributes;
use Illuminate\Http\Request;
use Winata\Core\Response\Http\Response;

#[Attributes\Prefix('')]
#[Attributes\Name('', true, false)]
class GlobalSelectOptionController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    #[Attributes\Get(uri: 'account-types')]
    public function accountTypes(Request $request): \Winata\Core\Response\Http\Response
    {
        $accountTypes = AccountType::options();

        $data = collect($accountTypes)
            ->map(function ($value, $key) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param Request $request
     * @return Response
     */
    #[Attributes\Get(uri: 'category-types')]
    public function categoryTypes(Request $request): \Winata\Core\Response\Http\Response
    {
        $categoryTypes = CategoryType::options();

        $data = collect($categoryTypes)
            ->map(function ($value, $key) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param Request $request
     * @return Response
     */
    #[Attributes\Get(uri: 'transaction-types')]
    public function transactionTypes(Request $request): \Winata\Core\Response\Http\Response
    {
        $transactionTypes = TransactionType::options();

        $data = collect($transactionTypes)
            ->map(function ($value, $key) {
                return [
                    'id' => $key,
                    'name' => $value,
                ];
            });
        return $this->response($data);
    }

    /**
     * @param Request $request
     * @return Response
     */
    #[Attributes\Get(uri: 'categories')]
    public function categories(Request $request): \Winata\Core\Response\Http\Response
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
     * @param Request $request
     * @return Response
     */
    #[Attributes\Get(uri: 'accounts')]
    public function accounts(Request $request): \Winata\Core\Response\Http\Response
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
