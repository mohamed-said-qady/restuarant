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
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('amount');
            $table->double('tip');
            $table->double('tax');
            $table->boolean('isPaid');
            $table->unsignedBigInteger('OrderId');
            $table->foreign('OrderId')->references('id')->on('orders');
            $table->unsignedBigInteger('paymentId');
            $table->foreign('paymentId')->references('id')->on('payments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
