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
        Schema::create('paymentRecords', function (Blueprint $table) {
            $table->id('paymentID'); // Assuming 'paymentID' is your primary key
            $table->string('kioskID', 10);
            $table->foreign('kioskID')->references('kioskID')->on('kiosks')->onDelete('cascade');
            $table->dateTime('payDate', $precision = 0);
            $table->string('payDetail', 100);
            $table->binary('payProof');
            $table->binary('payInvoice')->nullable();
            $table->string('payStatus', 20)->nullable();
            $table->timestamps(); // Created_at and updated_at columns
            $table->unique('paymentID'); // Ensure uniqueness on paymentID
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_records');
    }
};
