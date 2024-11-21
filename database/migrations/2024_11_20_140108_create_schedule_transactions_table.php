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
        Schema::create('scheduled_transactions', function (Blueprint $table) {
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
            $table->decimal('transaction_amount', 15);
            $table->text('transaction_description');
            $table->string('transaction_type');
            $table->string('schedule_type');
            $table->string('schedule_executed_at')->nullable();
            $table->integer('repeat')->default(0);
            $table->integer('maximum_repeat')->default(0);
            $table->timestamp('last_executed')->nullable();
            $table->string('status')->default(\App\Enums\ScheduleTransaction\ScheduleStatus::ACTIVE->value);
            $table->string('action')->default(\App\Enums\ScheduleTransaction\ScheduleStatus::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_transactions');
    }
};
