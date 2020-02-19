<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventAttendeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_attendee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('event_id')->default(1);
            $table->string('id_attendee',12)->nullable();
            $table->string('fullname');
            $table->string('team')->nullable();
            $table->string('arrival_bus')->nullable();
            $table->string('return_bus')->nullable();
            $table->integer('attendance')->nullable()->default(0); // 0 = Not scanned; 1 = Scanned
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_attendee');
    }
}
