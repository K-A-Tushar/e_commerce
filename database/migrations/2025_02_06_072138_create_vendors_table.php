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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('vendor_code', 9)->unique();
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('shop_description')->nullable();
            $table->string('phone_number')->unique();
            $table->string('shop_email')->unique()->nullable();
            $table->string('logo')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('tax_certificate')->nullable();
            $table->string('vat_registration')->nullable();
            $table->decimal('total_sales', 10, 2)->default(0.00);
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->decimal('withdrawable_balance', 10, 2)->default(0.00);
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->integer('total_reviews')->default(0);
            $table->json('extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
