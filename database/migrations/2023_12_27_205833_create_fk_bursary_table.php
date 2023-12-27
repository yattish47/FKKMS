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
        Schema::create('fk_bursary', function (Blueprint $table) {
            $table->string('bursaryICNumber', 16)->primary();
            $table->string('bursaryUsername', 20);
            $table->string('bursaryPassword', 255);
            $table->string('bursaryName', 50);
            $table->string('bursaryEmail', 55);
            $table->string('bursaryPhoneNumber', 30);
            $table->string('bursaryGender', 10);
            $table->string('bursaryNationality', 50);
            $table->integer('bursaryAge');
            $table->integer('bursaryOTP')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fk_bursary');
    }
};
