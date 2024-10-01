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
        Schema::create('cloud_server_settings', function (Blueprint $table) {
            $table->bigIncrements('id')->from(100001);
            $table->json('cpu_cors')->nullable();
            $table->json('ram')->nullable();
            $table->json('disk_space')->nullable();
            $table->json('data_transfer')->nullable();
            $table->json('operating_system')->nullable();
            $table->json('storage_type')->nullable();
            $table->json('database')->nullable();
            $table->json('public_ip')->nullable();
            $table->json('dedicated_bandwidth')->nullable();
            $table->json('backup_storage')->nullable();
            $table->json('backup_licence')->nullable();
            $table->json('antivirus')->nullable();
            $table->json('two_factor_authentication')->nullable();
            $table->json('elastic_load_balancer')->nullable();
            $table->json('otc')->nullable();
            $table->json('dr_replication_tool')->nullable();
            $table->json('ms_rdp_call_license')->nullable();
            $table->json('web_panel')->nullable();
            $table->json('dedicated_firewall')->nullable();
            $table->json('vpn')->nullable();
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
        Schema::dropIfExists('cloud_server_settings');
    }
};
