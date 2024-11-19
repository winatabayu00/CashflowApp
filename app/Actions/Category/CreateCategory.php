<?php

namespace App\Actions\Category;

use App\Concerns\Base\ValidationInput;
use App\Enums\Category\CategoryType;
use App\Models\Category\Category;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class CreateCategory extends BaseAction
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
                'type' => ['required', 'string', Rule::in(CategoryType::values())],
            ]
        );
        return $this;
    }

    public
    function handle(): Category
    {
        $input = Category::getFillableAttribute($this->validatedData);
        $input['user_id'] = $this->user->id;
        $account = new Category();
        $account->fill($input);
        $account->save();

        return $account;
    }
}
