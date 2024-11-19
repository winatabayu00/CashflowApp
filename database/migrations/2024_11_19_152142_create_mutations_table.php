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
        Schema::create('mutations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\User::class, 'user_id')
                ->constrained()
                ->onDelete('restrict');
            $table->uuidMorphs('mutable');
            $table->string('type');
            $table->string('info')->nullable();
            $table->decimal('amount', 15);
            $table->decimal('amount_before', 15);
            $table->decimal('amount_after', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutations');
    }
};
