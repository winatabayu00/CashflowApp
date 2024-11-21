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
        Schema::create('summary_category_cash_flows', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\User::class, 'user_id')
                ->constrained()
                ->onDelete('restrict');
            $table->foreignIdFor(\App\Models\Category\Category::class, 'category_id')
                ->constrained()
                ->onDelete('restrict');
            $table->date('group_date');
            $table->decimal('amount_income', 15)->default(0);
            $table->decimal('amount_expense', 15)->default(0);
            $table->decimal('amount_total', 15)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summary_category_cash_flows');
    }
};
