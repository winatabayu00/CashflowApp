<?php

use Dentro\Patcher\Patch;

return new class extends Patch
{
    public bool $isPerpetual = true;

    /**
     * Run patch script.
     *
     * @return void
     */
    public function patch(): void
    {
        $user = \App\Models\User::query()->firstOrFail();
        $account = \App\Models\Account\Account::query()->firstOrFail();
        $category = \App\Models\Category\Category::query()->firstOrFail();
        $data = [
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'transaction_amount' => 100000,
                'transaction_description' => 'schedule transaction',
                'transaction_type' => \App\Enums\Transaction\TransactionType::EXPENSE->value,
                'schedule_type' => \App\Enums\ScheduleTransaction\ScheduleType::DAILY->value,
                'status' => \App\Enums\ScheduleTransaction\ScheduleStatus::ACTIVE->value,
            ],
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'transaction_amount' => 100000,
                'transaction_description' => 'schedule transaction',
                'transaction_type' => \App\Enums\Transaction\TransactionType::EXPENSE->value,
                'schedule_type' => \App\Enums\ScheduleTransaction\ScheduleType::DAILY->value,
                'status' => \App\Enums\ScheduleTransaction\ScheduleStatus::PAUSED->value,
            ],
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'transaction_amount' => 100000,
                'transaction_description' => 'schedule transaction',
                'transaction_type' => \App\Enums\Transaction\TransactionType::EXPENSE->value,
                'schedule_type' => \App\Enums\ScheduleTransaction\ScheduleType::DAILY->value,
                'status' => \App\Enums\ScheduleTransaction\ScheduleStatus::COMPLETED->value,
            ]
        ];

        foreach ($data as $d) {
            (new \App\Actions\ScheduleTransaction\CreateScheduleTransaction(
                $user, $d
            ))
                ->handle();
        }
    }
};
