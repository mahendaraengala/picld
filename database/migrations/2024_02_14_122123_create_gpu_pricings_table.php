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
        Schema::create('gpu_pricings', function (Blueprint $table) {
            $table->bigIncrements('id')->from(100001);
            $table->string('gpu_card')->nullable();
            $table->string('os')->nullable();
            $table->string('gpu_memory')->nullable();
            $table->string('plan')->nullable();
            $table->string('vcpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('ssd_storage')->nullable();
            $table->decimal('pi_monthly_mrc', 10, 2)->nullable();
            $table->decimal('pi_hourly_mrc', 10, 2)->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpu_pricings');
    }
};
