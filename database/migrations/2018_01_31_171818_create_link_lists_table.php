<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('link1');
            $table->smallInteger('link2')->nullable();
            $table->smallInteger('link3')->nullable();
            $table->smallInteger('link4')->nullable();
            $table->smallInteger('link5')->nullable();
            $table->smallInteger('link6')->nullable();
            $table->smallInteger('link7')->nullable();
            $table->smallInteger('link8')->nullable();
            $table->smallInteger('link9')->nullable();
            $table->smallInteger('link10')->nullable();
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
        Schema::dropIfExists('link_lists');
    }
}
