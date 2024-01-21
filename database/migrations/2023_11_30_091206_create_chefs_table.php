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
        Schema::create('chefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kitchen_id');
            $table->foreign('kitchen_id')->references('id')->on('kitchens');  
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
        Schema::dropIfExists('chefs');
    }
};
