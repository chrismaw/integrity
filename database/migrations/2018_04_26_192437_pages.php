<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('parent');
           $table->unsignedInteger('link_id');
           $table->enum('bg_color',['dark','light','white']);
           $table->enum('text_color',['dark','light','white']);
           $table->unsignedInteger('billboard_img_id')->nullable();
           $table->string('billboard_text')->nullable();
           $table->enum('billboard_text_color',['dark','light','white']);
           $table->string('desc')->nullable();
           $table->longText('content')->nullable();
           $table->json('included_media')->nullable();
           $table->boolean('basic')->default(1);
           $table->boolean('active')->default(1);
           $table->timestamps();

           $table->foreign('billboard_img_id')->references('id')->on('media')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
