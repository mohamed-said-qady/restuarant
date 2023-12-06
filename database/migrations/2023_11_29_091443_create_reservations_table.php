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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('TimeOfReservation', $precision = 0);
            $table->integer('PeopleCount');
            $table->enum('status', ['Requested', 'Pending','Confirmed','Checked-in','Canceled','abandoned']);
            $table->string('notes');
            $table->date('checkInTime');
            $table->unsignedBigInteger('tableId');
            $table->foreign('tableId')->references('id')->on('tables');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
