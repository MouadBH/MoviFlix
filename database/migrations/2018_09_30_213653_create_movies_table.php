<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',150);
            $table->string('story');
            $table->string('poster');
            $table->string('cover');
            $table->string('trailer');
            $table->string('type');
            $table->string('genre');
            $table->string('release');
            $table->string('rank');
            $table->string('time');
            $table->float('ranked');
            $table->string('director');
            $table->string('language');
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
        Schema::dropIfExists('movies');
    }
}
