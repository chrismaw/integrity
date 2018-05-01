<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSermonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('media_id')->nullable();
            $table->string('title');
            $table->date('date');
	        $table->unsignedSmallInteger('sermon_series_id');
	        $table->unsignedSmallInteger('preacher_id');
            $table->string('passage')->nullable();
	        $table->longText('summary')->nullable();
            $table->string('slug')->nullable();
	        $table->timestamps();

	        $table->foreign('sermon_series_id')->references('id')->on('sermon_series')->onDelete('cascade')->onUpdate('cascade');
	        $table->foreign('preacher_id')->references('id')->on('preachers');
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
        Schema::dropIfExists('sermons');
    }
}
