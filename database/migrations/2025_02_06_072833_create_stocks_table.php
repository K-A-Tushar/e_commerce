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
            $table->foreignId('uer_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); 
            $table->integer('quantity')->default(0);
            $table->integer('dealer_price')->default(0);
            $table->integer('wholesale_price')->default(0);
            $table->integer('retail_price')->default(0);
            $table->integer('reserved')->default(0);
            $table->integer('sold')->default(0);
            $table->integer('returned')->default(0)->nullable();
            $table->integer('damaged')->default(0)->nullable();
            $table->string('location')->nullable();
            $table->string('batch_number')->nullable();
            $table->date('expiry_date')->nullable();
            $table->enum('status', ['in_stock', 'low_stock', 'out_of_stock'])->default('in_stock');
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
