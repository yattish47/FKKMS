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
        Schema::create('pupuk_admin', function (Blueprint $table) {
            $table->string('pICNumber', 16)->primary();
            $table->string('pUsername', 20);
            $table->string('pAdminPassword', 255);
            $table->string('pAdminName', 50);
            $table->string('pEmail', 55);
            $table->string('pPhoneNumber', 30);
            $table->string('pGender', 10);
            $table->string('pNationality', 50);
            $table->integer('pAge');
            $table->integer('pOTP')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pupuk_admin');
    }
};
