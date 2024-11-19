<?php

namespace App\Actions\User;

use App\Concerns\Base\ValidationInput;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class ChangePassword extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public readonly User $user,
        public readonly array $inputs,
        public bool $usingDBTransaction = false
    )
    {
        parent::__construct();
    }

    /**
     * @return BaseAction
     * @throws ValidationException
     */
    #[\Override] public function rules(): BaseAction
    {
        $this->validate(
            inputs: $this->inputs,
            rules: [
                'current_password' => ['required', new MatchOldPassword()],
                'password' => ['required', 'confirmed'],
            ]);
        return $this;
    }

    /**
     * @return mixed
     */
    #[\Override] public function handle(): mixed
    {
        $this->user->password = $this->inputs['password'];
        $this->user->save();

        return $this->user;
    }
}
