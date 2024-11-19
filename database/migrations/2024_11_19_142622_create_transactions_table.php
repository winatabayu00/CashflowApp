<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\User::class, 'user_id')
                ->constrained()
                ->onDelete('restrict');
            $table->foreignIdFor(\App\Models\Account\Account::class, 'account_id')
                ->constrained()
                ->onDelete('restrict');
            $table->foreignIdFor(\App\Models\Category\Category::class, 'category_id')
                ->constrained()
                ->onDelete('restrict');
            $table->decimal('amount', 15);
            $table->text('description');
            $table->date('date');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
