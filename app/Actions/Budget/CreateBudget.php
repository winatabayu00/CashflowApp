<?php

namespace App\Actions\Budget;

use App\Concerns\Base\ValidationInput;
use App\Contracts\Budget\HasBudgetable;
use App\Enums\Budget\BudgetStatus;
use App\Models\Budget\Budget;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class CreateBudget extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public readonly User           $user,
        public readonly array          $inputs,
        public readonly ?HasBudgetable $budgetable = null,
    )
    {
        parent::__construct();
    }

    /**
     * @return BaseAction
     * @throws ValidationException
     */
    public function rules(): BaseAction
    {
        $this->validate(
            inputs: $this->inputs,
            rules: [
                'amount' => ['required', 'numeric', 'gt:0'],
                'description' => ['required', 'string'],
                'status' => ['required', 'string', Rule::in(BudgetStatus::values())],
            ],
        );
        return $this;
    }

    /**
     * @return Budget
     */
    public function handle(): Budget
    {
        $input = Budget::getFillableAttribute($this->validatedData);

        $budget = new Budget();
        $input['user_id'] = $this->user->id;
        $budget->fill($input);
        if ($this->budgetable instanceof HasBudgetable) {
            $budget->budgetable()->associate($this->budgetable);
        }
        $budget->save();

        return $budget;
    }
}
