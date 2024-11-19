<?php

namespace App\Actions\Account;

use App\Concerns\Base\ValidationInput;
use App\Enums\Account\AccountType;
use App\Models\Account\Account;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class UpdateAccount extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public Account $account,
        public array   $inputs,
        public bool    $usingDBTransaction = false

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
            ]
        );
        return $this;
    }

    public
    function handle(): Account
    {
        $input = Account::getFillableAttribute($this->validatedData);
        $this->account->fill($input);
        $this->account->save();

        return $this->account;
    }
}
