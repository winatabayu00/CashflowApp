<?php

namespace Database\Seeders;

use App\Enums\Account\AccountType;
use App\Enums\Account\Currency;
use App\Models\Account\Account;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeedAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->firstOrFail();
        $account = [
            'id' => Str::uuid(),
            'user_id' => $user->id,
            'name' => 'tabungan',
            'type' => AccountType::CASH->value,
            'currency' => Currency::IDR->value,
        ];

        Account::query()->create($account);
    }
}
