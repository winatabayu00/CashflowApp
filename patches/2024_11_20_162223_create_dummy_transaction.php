<?php

use Dentro\Patcher\Patch;

return new class extends Patch {

    public bool $isPerpetual = false;

    /**
     * Run patch script.
     *
     * @return void
     */
    public function patch(): void
    {
        $user = \App\Models\User::query()->firstOrFail();
        $accounts = \App\Models\Account\Account::query()
            ->where('user_id', '=', $user->id)
            ->get();

        $categories = \App\Models\Category\Category::query()
            ->where('user_id', '=', $user->id)
            ->pluck('id')->toArray();

        foreach ($accounts as $account) {

            $cashflows = [];

            $type = \App\Enums\Transaction\TransactionType::values();
            for ($i = 0; $i < rand(5, 10); $i++) {
                $amount = range(10000, 300000, 25000);
                $cashflows[] = [
                    'account_id' => $account->id,
                    'category_id' => $categories[rand(0, count($categories) - 1)],
                    'amount' => $amount[rand(0, count($amount) - 1)],
                    'description' => 'pengeluaran ' . $i,
                    'date' => now()->toDateString(),
                    'type' => $type[rand(0, count($type) - 1)],
                ];
            }

            $service = new \App\Service\TransactionService();
            foreach ($cashflows as $cashflow) {
                $service->create(user: $user, inputs: $cashflow);

            }
        }

    }
};
