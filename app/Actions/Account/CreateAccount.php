<?php

namespace App\Actions\Account;

use App\Concerns\Base\ValidationInput;
use App\Enums\Account\AccountType;
use App\Enums\Account\Currency;
use App\Models\Account\Account;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class CreateAccount extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public User  $user,
        public array $inputs,
        public bool  $usingDBTransaction = false

    )
    {
        parent::__construct();
    }

    /**
     * @return BaseAction
     * @throws ValidationException
     */
    public
    function rules(): BaseAction
    {
        $this->validate(
            inputs: $this->inputs,
            rules: [
                'name' => ['required', 'string'],
                'type' => ['required', 'string', Rule::in(AccountType::values())],
                'currency' => ['required', 'string', Rule::in(Currency::values())],
            ]
        );
        return $this;
    }

    public
    function handle(): Account
    {
        $input = Account::getFillableAttribute($this->validatedData);
        $input['user_id'] = $this->user->id;
        $account = new Account();
        $account->fill($input);
        $account->save();

        return $account;
    }
}
