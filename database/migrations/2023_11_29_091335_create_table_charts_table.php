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
        Schema::create('table_charts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->photo('TableChartImage');
            $table->unsignedBigInteger('branchId');
            $table->foreign('branchId')->references('id')->on('branches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_charts');
    }
};
