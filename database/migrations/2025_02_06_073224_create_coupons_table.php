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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->decimal('discount', 10, 2);
            $table->enum('type', ['fixed', 'percentage']);
            $table->date('start_date');
            $table->date('end_date');
            $table->date('time_schedule')->nullable();
            $table->integer('usage_limit')->nullable();
            $table->decimal('min_order_amount', 10, 2)->nullable();
            $table->integer('user_limit')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->json('extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
