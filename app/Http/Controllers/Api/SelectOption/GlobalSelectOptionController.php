<?php

namespace App\Http\Controllers\Api\SelectOption;

use App\Enums\Account\AccountType;
use App\Http\Controllers\Api\Controller;
use Dentro\Yalr\Attributes;
use Illuminate\Http\Request;

#[Attributes\Prefix('')]
#[Attributes\Name('', true, false)]
class GlobalSelectOptionController extends Controller
{
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
}
