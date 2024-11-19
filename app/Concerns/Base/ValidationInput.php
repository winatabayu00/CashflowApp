<?php

namespace App\Concerns\Base;

use App\Actions\User\ChangePassword;
use App\Actions\User\CreateNewUser;
use App\Actions\User\UpdateUser;
use App\Enums\ResponseCode\ResponseCode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Winata\Core\Response\Exception\BaseException;

trait ValidationInput
{
    protected array $validatedData;

    /**
     * @param array $data
     * @param Request $request
     * @return array
     * @throws BaseException
     * @throws ValidationException
     */
    public function validated(array $data, Request $request): array
    {
        if (!$request->authorize())
            throw new BaseException(ResponseCode::ERR_FORBIDDEN_ACCESS, "You are unauthorized to access this resource");

        $validator = Validator::make($data, $request->rules(), $request->messages())->validate();

        $this->setValidatedData($validator);

        return $validator;
    }

    /**
     * Validates inputs.
     *
     * @param array $inputs
     * @param array $rules
     * @param array $messages
     * @param array $attributes
     *
     * @return array|RedirectResponse
     *
     * @throws ValidationException
     */
    public function validate(array $inputs, array $rules, array $messages = [], array $attributes = []): array|RedirectResponse
    {
        $validator = Validator::make($inputs, $rules, $messages, $attributes);

        $routeName = !empty(\request()->route()) ? \request()->route()->getName() : null;

        $this->setValidatedData($validator->validated());

        $validated = $validator->validate();

        if (!Str::startsWith($routeName, 'api.') && !App::runningInConsole()){
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        return $validated;
    }


    /**
     * @param array $validatedData
     * @return ChangePassword|CreateNewUser|UpdateUser|ValidationInput
     */
    protected function setValidatedData(array $validatedData): self
    {
        $this->validatedData = $validatedData;
        return $this;
    }


    /**
     * @return array
     */
    protected function getValidatedData(): array
    {
        return $this->validatedData;
    }
}
