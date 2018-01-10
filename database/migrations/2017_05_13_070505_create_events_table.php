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
            $table->increments('id');
            $table->string('address');
            $table->string('post_client_name');
            $table->string('title')->nullable();
            $table->string('advert');
            $table->string('start_time');
            $table->string('stop_time')->nullable();
            $table->date('date')->nullable();
            $table->integer('price')->nullable();
            $table->string('coordinates');
            $table->string('picture_url')->nullable();
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
        Schema::dropIfExists('events');
    }
}
