<?php

namespace Database\Seeders;

use App\Actions\User\CreateNewUser;
use App\Enums\Roles;
use Illuminate\Database\Seeder;

class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'superadmin',
                'username' => 'user_superadmin',
                'email' => 'superadmin@gmail.com',
                'phone' => '81111112',
                'dial' => '+62',
            ]
        ];

        foreach ($users as $user) {
            (new CreateNewUser(
                inputs: $user,
            ))
                ->handle();
        }
    }
}
