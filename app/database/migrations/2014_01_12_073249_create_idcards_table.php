<?php

use Illuminate\Database\Migrations\Migration;

class CreateIdcardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idcards', function($table){
			$table->increments('id');
			$table->string('card_no');
			$table->string('name');
			$table->string('contact');
			$table->enum('type', array('student', 'faculty', 'temporary'));

			$table->integer('session_start')->nullable(); // Session year. Only for student
			$table->integer('session_end')->nullable(); // Only for student
			$table->text('current_address')->nullable(); // For faculty and student
			$table->text('permanent_address')->nullable(); // Only for student
			$table->boolean('permanent_address_same_as_current')->nullable(); // Only for student
			$table->string('class')->nullable(); // For students only: Pre-Service and In-Service. Will be blank for temporary teacher and faculty
			$table->string('designation')->nullable(); // For faculty only
			$table->string('name_of_school')->nullable(); // For temporary teacher only

			$table->date('valid_upto');			
			$table->softDeletes();
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
		Schema::drop('idcards');
	}

}