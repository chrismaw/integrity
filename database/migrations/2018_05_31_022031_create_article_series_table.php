<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('tagline')->nullable();
            $table->unsignedInteger('media_id')->nullable();
            $table->text('details')->nullable();
	        $table->string('slug');
	        $table->string('bg_color');
	        $table->string('text_color');
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
        Schema::dropIfExists('article_series');
    }
}
