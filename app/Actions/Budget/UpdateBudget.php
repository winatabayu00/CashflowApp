<?php

namespace App\Actions\Budget;

use App\Concerns\Base\ValidationInput;
use App\Enums\Budget\BudgetStatus;
use App\Models\Budget\Budget;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class UpdateBudget extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public Budget $budget,
        public array  $inputs,
        public bool   $usingDBTransaction = false

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
                'amount' => ['required', 'numeric', 'gt:0'],
                'description' => ['required', 'string'],
                'status' => ['required', 'string', Rule::in(BudgetStatus::values())],
            ]
        );
        return $this;
    }

    /**
     * @return Budget
     */
    public
    function handle(): Budget
    {
        $input = Budget::getFillableAttribute($this->validatedData);
        $this->budget->fill($input);
        $this->budget->save();

        return $this->budget;
    }
}
