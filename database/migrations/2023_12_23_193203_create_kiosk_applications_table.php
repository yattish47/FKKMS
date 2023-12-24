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
        Schema::create('kiosk_applications', function (Blueprint $table) {
            $table->string('kApplicationID', 10)->primary();
            $table->string('kpICNumber', 16);
            $table->string('kInventoryType', 50);
            $table->string('kBusinessName', 50)->nullable();
            $table->string('kBusinessType', 30);
            $table->date('kStartDate');
            $table->string('kDurationOfRenting', 50)->nullable();
            $table->string('kBankAccNumber', 60);
            $table->string('kBankName', 50);
            $table->string('kDescOfProduct', 255);
            $table->binary('kICCopy')->nullable();
            $table->binary('kSSMCert')->nullable();
            $table->string('kApplicationStatus', 20);
            $table->string('kApprovalRemark', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kiosk_applications');
    }
};
