<?php

use Dentro\Patcher\Patch;

return new class extends Patch
{

    public bool $isPerpetual = false;

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
        $cashflows = [
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'amount' => 1000000,
                'description' => 'gaji',
                'date' => now()->toDateString(),
                'type' => \App\Enums\Transaction\TransactionType::INCOME->value,
            ],
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'amount' => 100000,
                'description' => 'bayar tagihan bpjs',
                'date' => now()->toDateString(),
                'type' => \App\Enums\Transaction\TransactionType::EXPENSE->value,
            ],
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'amount' => 150000,
                'description' => 'top up game pubg',
                'date' => now()->toDateString(),
                'type' => \App\Enums\Transaction\TransactionType::EXPENSE->value,
            ],
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'amount' => 200000,
                'description' => 'dana kaget',
                'date' => now()->toDateString(),
                'type' => \App\Enums\Transaction\TransactionType::INCOME->value,
            ],
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'amount' => 50000,
                'description' => 'kafe',
                'date' => now()->toDateString(),
                'type' => \App\Enums\Transaction\TransactionType::EXPENSE->value,
            ],
            [
                'account_id' => $account->id,
                'category_id' => $category->id,
                'amount' => 50000,
                'description' => 'bensin',
                'date' => now()->toDateString(),
                'type' => \App\Enums\Transaction\TransactionType::EXPENSE->value,
            ],
        ];

        $service = new \App\Service\TransactionService();
        foreach ($cashflows as $cashflow) {
            $service->create(user: $user, inputs: $cashflow);

        }
    }
};
