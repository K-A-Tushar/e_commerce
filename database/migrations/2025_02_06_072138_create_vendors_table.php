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
            $table->string('phone_number')->unique();
            $table->string('shop_email')->unique()->nullable();
            $table->string('shop_password')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('tax_certificate')->nullable();
            $table->string('vat_registration')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('shop_description')->nullable();
            $table->enum('status', ['active', 'inactive', 'pending', 'accepted', 'rejected'])->default('pending');
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
