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
        Schema::create('kiosk_participants', function (Blueprint $table) {
            $table->string('kpICNumber', 20)->primary();
            $table->string('kpName', 50);
            $table->string('kpUsername', 20);
            $table->string('kpEmail', 55);
            $table->string('kpType', 20);
            $table->string('kpPhoneNumber', 30);
            $table->string('kpMatricID', 10);
            $table->string('kpNationality', 50);
            $table->integer('kpAge');
            $table->string('kpPassword', 255);
            $table->integer('kpOTP')->nullable(); 
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kiosk_participants');
    }
};
