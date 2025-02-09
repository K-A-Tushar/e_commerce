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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); 
            $table->integer('quantity')->default(0);
            $table->decimal('dealer_price', 10, 2)->default(0.00);
            $table->decimal('wholesale_price', 10, 2)->default(0.00);
            $table->decimal('retail_price', 10, 2)->default(0.00);
            $table->integer('reserved')->default(0);
            $table->integer('sold')->default(0);
            $table->integer('returned')->default(0)->nullable();
            $table->integer('damaged')->default(0)->nullable();
            $table->string('location')->nullable();
            $table->string('batch_number')->nullable();
            $table->date('expiry_date')->nullable();
            $table->enum('status', ['in_stock', 'low_stock', 'out_of_stock'])->default('in_stock');
            $table->json('extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
