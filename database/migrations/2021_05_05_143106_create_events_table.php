<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('eventID')->unsigned()->index();
            $table->string('eventName',40);
            $table->string('eventCat',30);
            $table->string('eventPlace',50);
            $table->dateTime('eventData');
            $table->float('eventPrice');
            $table->longText('eventDesc');
            $table->mediumInteger('eventSeats');
            $table->tinyInteger('eventDiscount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
