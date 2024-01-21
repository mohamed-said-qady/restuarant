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
        Schema::create('waiters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Order_id');
            $table->foreign('Order_id')->references('id')->on('orders'); 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waiters');
    }
};
