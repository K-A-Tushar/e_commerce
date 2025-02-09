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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->boolean('canview')->default(0);
            $table->boolean('canadd')->default(0);
            $table->boolean('canedit')->default(0);
            $table->boolean('candelete')->default(0);
            $table->boolean('canprint')->default(0);
            $table->boolean('canexport')->default(0);
            $table->boolean('canlist')->default(0);
            $table->boolean('canimport')->default(0);
            $table->boolean('canapprove')->default(0);
            $table->boolean('canreject')->default(0);
            $table->boolean('canverify')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};

