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
            $table->string('title');
            $table->date('date');
	        $table->string('passage');
	        $table->unsignedSmallInteger('sermon_series_id');
	        $table->unsignedSmallInteger('preacher_id');
	        $table->longText('summary');
	        $table->unsignedSmallInteger('media_id')->nullable();
	        $table->string('slug');
	        $table->timestamps();

	        $table->foreign('sermon_series_id')->references('id')->on('sermon_series')->onDelete('cascade');
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
