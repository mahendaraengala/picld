<?php

use App\Enums\PaymentStatus;
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
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->bigIncrements('id')->from(100001);
            $table->uuid('uuid');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->morphs('referable');
            $table->string('gateway')->nullable();
            $table->string('token')->unique();
            $table->string('status')->default(PaymentStatus::PENDING);
            $table->string('transaction_id')->nullable();
            $table->json('meta_data')->nullable();
            $table->decimal('amount',13,2);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement('ALTER TABLE `payment_transactions` CHANGE `referable_type` `referable_type` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL');
        DB::statement('ALTER TABLE `payment_transactions` CHANGE `referable_id` `referable_id` BIGINT UNSIGNED NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_transactions');
    }
};
