<?php

namespace App\Jobs;

use App\Domains\Merchant\Models\Summaries\TenantSaleSummary;
use App\Enums\Transaction\TransactionType;
use App\Models\Summary\SummaryCashFlow;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;

class JobCreateSummary implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public readonly User  $user,
        public readonly array $input,
        public bool           $isLocking = true
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->isLocking) {
            DB::beginTransaction();
        }
        $groupDate = createDate($this->input['date']);
        // First Or Create Summary Grouped Data
        SummaryCashFlow::query()
            ->firstOrCreate([
                'user_id' => $this->user->id,
                'group_date' => $groupDate,
            ], [
                'amount_income' => 0,
                'amount_expense' => 0,
                'amount_total' => 0,
            ]);

        /** @var SummaryCashFlow $summary */
        $summary = SummaryCashFlow::query()
            ->where([
                'user_id' => $this->user->id,
                'group_date' => $groupDate,
            ])->lockForUpdate()
            ->first();

        $columnUpdate = "amount_{$this->input['type']}";
        $amount = $this->input['amount'];
        if ($this->input['type'] == TransactionType::EXPENSE->value){
            $amount = $this->input['amount'] * -1;
        }
        $summary->{$columnUpdate} = $summary->{$columnUpdate} + $amount;
        $summary->amount_total = $summary->amount_income - $summary->amount_expense;
        $summary->save();

        if ($this->isLocking) {
            DB::commit();
        }
    }
}
