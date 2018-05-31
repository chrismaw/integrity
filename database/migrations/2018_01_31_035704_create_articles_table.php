<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('series');
            $table->string('title');
            $table->date('date');
            $table->text('desc')->nullable();
            $table->longText('content')->nullable();
            $table->string('author')->nullable();
            $table->unsignedInteger('media')->nullable();
            $table->unsignedInteger('image_media')->nullable();
	        $table->boolean('featured')->default(1);
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
        Schema::dropIfExists('articles');
    }
}
