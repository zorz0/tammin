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
        Schema::create('feature_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feature_id')->references('id')->on('features')->cascadeOnDelete();
            $table->foreignId('service_id')->references('id')->on('services')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_service');
    }
};
