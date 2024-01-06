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
        Schema::create('SalesRecord', function (Blueprint $table) {
            $table->id('ReportID');
            $table->integer('year');
            $table->integer('month');
            $table->integer('week');
            $table->decimal('monday', 8, 2);
            $table->decimal('tuesday', 8, 2);
            $table->decimal('wednesday', 8, 2);
            $table->decimal('thursday', 8, 2);
            $table->decimal('friday', 8, 2);
            $table->decimal('saturday', 8, 2);
            $table->decimal('sunday', 8, 2);
            $table->decimal('totalPrice', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SalesRecord');
    }
};
