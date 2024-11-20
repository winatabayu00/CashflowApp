<?php

namespace App\Jobs;

use App\Models\Transaction\ScheduleTransaction;
use App\Service\TransactionService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessActiveTransactionToday implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public readonly ScheduleTransaction $scheduleTransaction,
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //update schedule transaction
        $this->scheduleTransaction->repeat = $this->scheduleTransaction->repeat + 1;
        $this->scheduleTransaction->last_executed = now();
        $this->scheduleTransaction->save();

        $this->scheduleTransaction->loadMissing('user');

        $transactionService = new TransactionService();
        $newTransactionData = [
            'account_id' => $this->scheduleTransaction->account_id,
            'category_id' => $this->scheduleTransaction->category_id,
            'amount' => $this->scheduleTransaction->transaction_amount,
            'description' => $this->scheduleTransaction->transaction_description,
            'date' => now(),
            'type' => $this->scheduleTransaction->transaction_type,
        ];
        $transactionService->create(user: $this->scheduleTransaction->getUser(), inputs: $newTransactionData, transaction: $this->scheduleTransaction);
    }
}
