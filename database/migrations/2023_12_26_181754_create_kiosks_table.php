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
        Schema::create('kiosks', function (Blueprint $table) {
            $table->string('kioskID', 10)->primary();
            $table->string('kApplicationID', 10)->nullable();
            $table->string('kpICNumber', 20)->nullable();
            $table->string('kioskLocation', 100);
            $table->string('kioskStatus', 12);
            $table->string('kioskCondition', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kiosks');
    }
};
