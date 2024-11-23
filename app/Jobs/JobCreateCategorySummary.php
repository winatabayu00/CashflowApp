<?php

namespace App\Jobs;

use App\Enums\Transaction\TransactionType;
use App\Models\Category\Category;
use App\Models\Summary\SummaryCategoryCashFlow;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;

class JobCreateCategorySummary implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public readonly User     $user,
        public readonly Category $category,
        public readonly array    $input,
        public bool              $isLocking = true
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
        SummaryCategoryCashFlow::query()
            ->firstOrCreate([
                'user_id' => $this->user->id,
                'category_id' => $this->category->id,
                'group_date' => $groupDate,
            ], [
                'user_id' => $this->user->id,
                'category_id' => $this->category->id,
                'group_date' => $groupDate,
                'amount_income' => 0,
                'amount_expense' => 0,
                'amount_total' => 0,
            ]);

        /** @var SummaryCategoryCashFlow $reportSummary */
        $summary = SummaryCategoryCashFlow::query()
            ->where([
                'user_id' => $this->user->id,
                'category_id' => $this->category->id,
                'group_date' => $groupDate,
            ])->lockForUpdate()
            ->first();

        $columnUpdate = "amount_{$this->input['type']}";
        $amount = $this->input['amount'];
        if ($this->input['type'] == TransactionType::EXPENSE->value){
            $amount = $this->input['amount'] * -1;
        }
        $summary->{$columnUpdate} = $summary->{$columnUpdate} + $amount;
        $summary->amount_total = $summary->amount_income + $summary->amount_expense;
        $summary->save();

        if ($this->isLocking) {
            DB::commit();
        }
    }
}
