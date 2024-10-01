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
        Schema::create('cloud_storage_settings', function (Blueprint $table) {
            $table->bigIncrements('id')->from(100001);
            $table->json('disk_space')->nullable();
            $table->json('data_transfer')->nullable();
            $table->json('storage_type')->nullable();
            $table->json('dedicated_bandwidth')->nullable();
            $table->json('payment_terms')->nullable();
            $table->json('contract_period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloud_storage_settings');
    }
};
