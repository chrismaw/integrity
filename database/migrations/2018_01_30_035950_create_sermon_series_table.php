<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSermonSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermon_series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('tagline')->nullable();
            $table->string('passage')->nullable();
	        $table->unsignedInteger('media_id')->nullable();
            $table->longText('details')->nullable();
	        $table->string('slug')->nullable();
	        $table->timestamps();

	        $table->foreign('media_id')->references('id')->on('media');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sermon_series');
    }
}
