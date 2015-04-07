<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Vote extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work', function (Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('author');
			$table->string('desc');
			$table->integer('votes');
		});
		Schema::create('vote', function (Blueprint $table){
			$table->increments('id');
			$table->integer('work_id');
			$table->string('ip');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('work');
		Schema::drop('vote');
	}

}
