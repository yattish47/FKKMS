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
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('admin_ID')->primary;
            $table->string('admin_username', 20);
            $table->string('adminPassword', 255);
            $table->string('adminName', 50);
            $table->string('adminEmail', 55);
            $table->string('adminPhoneNumber', 30);
            $table->string('adminGender', 10);
            $table->integer('adminOTP')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
