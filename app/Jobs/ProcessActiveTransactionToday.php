<?php

namespace App\Jobs;

use App\Enums\ScheduleTransaction\ScheduleAction;
use App\Models\Transaction\ScheduleTransaction;
use App\Notifications\SendNotification;
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

        $user = $this->scheduleTransaction->getUser();
        $newTransactionData = [
            'account_id' => $this->scheduleTransaction->account_id,
            'category_id' => $this->scheduleTransaction->category_id,
            'amount' => $this->scheduleTransaction->transaction_amount,
            'description' => $this->scheduleTransaction->transaction_description,
            'date' => now(),
            'type' => $this->scheduleTransaction->transaction_type,
        ];

        if ($this->scheduleTransaction->action == ScheduleAction::TRIGGER_TRANSACTION->value){
            $this->scheduleTransaction->loadMissing('user');

            $transactionService = new TransactionService();

            $transactionService->create(user: $user, inputs: $newTransactionData, transaction: $this->scheduleTransaction);
        }else if ($this->scheduleTransaction->action == ScheduleAction::CREATE_NOTIFICATION->value){
            $user->notify(
                new SendNotification(
                    title: 'Transaksi butuh tindakan',
                    message: 'Transaksi terjadwal belum ada tindakan',
                    metadata: [
                        'schedule_transaction_id' => $this->scheduleTransaction->id,
                        'amount' => $newTransactionData['amount'],
                        'description' => $newTransactionData['description'],
                        'type' => $newTransactionData['type'],
                    ]
                )
            );
        }

    }
}
