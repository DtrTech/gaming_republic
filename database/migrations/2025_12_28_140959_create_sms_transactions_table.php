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
        Schema::create('sms_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('contact_no')->nullable();
            $table->string('code')->nullable();
            $table->double('amount')->nullable();
            $table->double('before_wallet')->nullable();
            $table->double('after_wallet')->nullable();
            $table->string('desc')->nullable();
            $table->string('to')->nullable();
            $table->string('ref')->nullable();
            $table->string('currency')->nullable();
            $table->double('balance')->nullable();
            $table->double('cost_count_from_next')->nullable();
            $table->double('new_balance_count_from_next')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_transactions');
    }
};
