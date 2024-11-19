<?php

namespace App\Actions\Category;

use App\Concerns\Base\ValidationInput;
use App\Enums\Category\CategoryType;
use App\Models\Category\Category;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class UpdateCategory extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public Category $category,
        public array    $inputs,
        public bool     $usingDBTransaction = false

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

    /**
     * @return Category
     */
    public
    function handle(): Category
    {
        $input = Category::getFillableAttribute($this->validatedData);
        $this->category->fill($input);
        $this->category->save();

        return $this->category;
    }
}
