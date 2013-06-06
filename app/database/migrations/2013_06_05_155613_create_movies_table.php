<?php

use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('movies', function($table)
        {
            $table->increments('id');
            $table->string('title')->unique();
            $table->date('releaseDate');
            $table->string('genre');
            $table->string('synopsis');
            $table->string('poster');
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
        Schema::drop('movies');
	}

}