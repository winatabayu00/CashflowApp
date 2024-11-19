<?php

namespace App\Actions\User;

use App\Concerns\Base\ValidationInput;
use App\Enums\ResponseCode\ResponseCode;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\Core\Response\Exception\BaseException;
use Winata\PackageBased\Abstracts\BaseAction;

class UpdateUser extends BaseAction
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
     * @throws BaseException
     * @throws ValidationException
     */
    #[\Override] public function rules(): BaseAction
    {
        $validated = $this->validate(
            inputs: $this->inputs,
            rules: [
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:100'],
                'password' => ['nullable', 'string'],
                'email' => [
                    'nullable',
                    Rule::unique('users', 'email')->ignore($this->user->id),
                ],
                'phone' => ['nullable', 'numeric', 'max_digits:50'],
                'dial' => [Rule::requiredIf(!empty($this->inputs['phone'])), 'string', 'max:10'],
            ]);

        // check if phone already registered
        $userExistByPhone = null;
        if (!empty($validated['phone']) && !Str::contains($this->user->phone, $validated['phone'])){
            $userExistByPhone = User::checkPhone(phone: $validated['phone'], dial: $validated['dial']);
        }

        if (!empty($userExistByPhone)){
            throw new BaseException(
                rc: ResponseCode::ERR_ENTITY_ALREADY_EXISTS,
                message: __("Nomor HP `{$userExistByPhone->phone}` sudah digunakan"));
        }
        return $this;
    }

    /**
     * @return mixed
     */
    #[\Override] public function handle(): mixed
    {

        $input = User::getFillableAttribute($this->validatedData);
        $this->user->fill($input);
        if (!empty($input['phone']) && !Str::contains($this->user->phone, $input['phone'])){
            $phone = sanitizePhone(phone: $this->validatedData['phone'], dial: $this->validatedData['dial']);
            $this->user->phone = $phone;
            $this->user->dial = $fillable['dial'] ?? '+62';
        }
        $this->user->save();

        return $this->user;
    }
}
