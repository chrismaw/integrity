<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('active');
            $table->string('heading')->nullable();
            $table->string('type')->nullable();
            $table->string('where_used');
            $table->longText('content')->nullable();
            $table->enum('bg_color',App\Page::COLORS)->default(App\Page::COLORS[1]);
            $table->enum('text_color',App\Page::COLORS)->default(App\Page::COLORS[0]);
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
        Schema::dropIfExists('sections');
    }
}
