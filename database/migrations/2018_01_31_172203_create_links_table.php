<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->string('path');
            $table->string('parent',45)->nullable();
            $table->string('desc')->nullable();
            $table->string('dest')->nullable();
            $table->unsignedInteger('media_id')->nullable();
            $table->string('icon',45)->nullable();
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
        Schema::dropIfExists('links');
    }
}
