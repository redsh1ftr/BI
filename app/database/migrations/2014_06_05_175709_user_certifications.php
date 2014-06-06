<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCertifications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_certs', function($table){
			$table->increments('id');
			$table->integer('uid');
			$table->string('cert_id');
			$table->string('cert_recd');
			$table->string('cert_exp');
			$table->string('reminder');
			$table->string('certificate')->nullable();
			$table->integer('active')->nullable();
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
		Schema::drop('user_certs');
	}

}
