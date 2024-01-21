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
        Schema::create('meal_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->unsignedBigInteger('meal_id');
            $table->foreign('meal_id')->references('id')->on('meals');
            $table->unsignedBigInteger('menuItem_id');
            $table->foreign('menuItem_id')->references('id')->on('menu_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_items');
    }
};
