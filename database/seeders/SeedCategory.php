<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeedCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Kategori Pemasukan
            ['name' => 'Gaji', 'type' => 'income', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bonus', 'type' => 'income', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Investasi', 'type' => 'income', 'created_at' => now(), 'updated_at' => now()],

            // Kategori Pengeluaran
            ['name' => 'Makanan', 'type' => 'expense', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Transportasi', 'type' => 'expense', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hiburan', 'type' => 'expense', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kesehatan', 'type' => 'expense', 'created_at' => now(), 'updated_at' => now()],
        ];

        $user = User::query()->firstOrFail();
        Category::insert(collect($categories)->map(function ($category) use ($user) {
            $category['id'] = Str::uuid();
            $category['user_id'] = $user->id;
            return $category;
        })->toArray());
    }
}
