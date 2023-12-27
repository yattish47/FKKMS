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
        Schema::create('fk_technicalteam', function (Blueprint $table) {
            $table->string('ttICNumber', 16)->primary(); // Primary key
            $table->string('ttUsername', 20);
            $table->string('ttPassword', 255);
            $table->string('ttName', 50);
            $table->string('ttEmail', 55);
            $table->string('ttPhoneNumber', 30);
            $table->string('ttGender', 10);
            $table->string('ttNationality', 50);
            $table->integer('ttAge');
            $table->integer('ttOTP')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fk_technicalteam');
    }
};
