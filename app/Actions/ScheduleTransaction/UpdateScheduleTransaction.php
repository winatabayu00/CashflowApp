<?php

namespace App\Actions\ScheduleTransaction;

use App\Concerns\Base\ValidationInput;
use App\Enums\ScheduleTransaction\ScheduleStatus;
use App\Enums\ScheduleTransaction\ScheduleType;
use App\Enums\Transaction\TransactionType;
use App\Models\Transaction\ScheduleTransaction;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\PackageBased\Abstracts\BaseAction;

class UpdateScheduleTransaction extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public ScheduleTransaction $scheduleTransaction,
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
                'transaction_amount' => ['required', 'numeric', 'gt:0'],
                'transaction_description' => ['required', 'string'],
                'transaction_type' => ['required', 'string', Rule::in(TransactionType::values())],
                'schedule_type' => ['required', 'string', Rule::in(ScheduleType::values())],
                'status' => ['nullable', 'string', Rule::in(ScheduleStatus::values())],
            ]
        );
        return $this;
    }

    /**
     * @return ScheduleTransaction
     */
    public
    function handle(): ScheduleTransaction
    {
        $input = ScheduleTransaction::getFillableAttribute($this->validatedData);
        $this->scheduleTransaction->fill($input);
        $this->scheduleTransaction->save();

        return $this->scheduleTransaction;
    }
}
