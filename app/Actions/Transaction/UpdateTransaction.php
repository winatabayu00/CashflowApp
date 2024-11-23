<?php

namespace App\Actions\Transaction;

use App\Concerns\Base\ValidationInput;
use App\Enums\Transaction\TransactionType;
use App\Models\Transaction\Transaction;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class UpdateTransaction extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public Transaction $transaction,
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
                'account_id' => ['required', 'uuid'],
                'category_id' => ['required', 'uuid'],
                'amount' => ['required', 'numeric', 'gt:0'],
                'description' => ['required', 'string'],
                'date' => ['required', 'date'],
                'type' => ['required', 'string', Rule::in(TransactionType::values())],
            ]
        );
        return $this;
    }

    /**
     * @return Transaction
     */
    public
    function handle(): Transaction
    {
        $input = Transaction::getFillableAttribute($this->validatedData);
        $this->transaction->fill($input);
        $this->transaction->save();

        return $this->transaction;
    }
}
