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
        Schema::create('payment_record', function (Blueprint $table) {
            $table->bigIncrements('paymentID')->primary;
            $table->foreign('kioskID', 10)->reference('kisokID',10)->on('kiosks')->onDelete('cascade');//foreing key from kiosk table
            $table->dateTime('payDate',$precision = 0);
            $table->string('payDetail', 100);
            $table->binary('payProof');
            $table->binary('payQR');
            $table->binary('payInovice');
            $table->string('payStatus', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_record');
    }
};