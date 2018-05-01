<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', \App\Media::TYPES);
            $table->string('filename');
            $table->string('alt')->nullable();
            $table->string('function',45)->nullable();
            $table->string('folder',45)->nullable();
            $table->string('link')->nullable();
            $table->string('file_size')->nullable();
            $table->string('thumb_link')->nullable();
            $table->string('thumb_size')->nullable();
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
        Schema::dropIfExists('media');
    }
}
