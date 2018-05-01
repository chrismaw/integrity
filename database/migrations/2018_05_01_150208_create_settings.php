<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('church_name');
            $table->string('domain');
            $table->string('site_name')->nullable();
            $table->text('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state', 2);
            $table->unsignedMediumInteger('zip');
            $table->string('phone');
            $table->string('email');
            $table->string('times');
            $table->unsignedSmallInteger('header_logo_light');
            $table->unsignedSmallInteger('header_logo_dark');
            $table->unsignedSmallInteger('small_logo')->nullable();
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
        Schema::dropIfExists('settings');

    }
}
