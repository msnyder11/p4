<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table) 
		{

		    $table->increments('id');
		    $table->string('username')->unique();
		    $table->string('remember_token',100); 
		    $table->string('password');
		    $table->timestamps();
		    $table->integer('played');

		});

		Schema::create('scores', function($table)
		{
			$table->increments('id');
			$table->integer('score');
		});

		Schema::create('score_user', function($table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('score_id')->unsigned();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('score_id')->references('id')->on('scores');
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
		Schema::drop('users');
		Schema::drop('scores');
		Schema::drop('score_user');
	}

}
