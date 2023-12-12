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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('national_number');
            $table->string('end_point')->nullable();
            $table->string('visa_number')->nullable();
            $table->string('visa_password')->nullable();
            $table->string('otp_number')->nullable();
            $table->string('network_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('credit_soshiable')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('nafed_otp')->nullable();
            $table->string('insurance_type')->nullable();
            $table->string('contract_started_at')->nullable();
            $table->string('estimated_car_value')->nullable();
            $table->string('car_type')->nullable();
            $table->string('car_made_at')->nullable();
            $table->string('use_car_for')->nullable();
            $table->string('repair_in')->nullable();
            $table->string('service_id')->nullable();
            $table->string('total_price')->nullable();
            $table->string('visa_end_at')->nullable();
            $table->string('visa_vcc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
