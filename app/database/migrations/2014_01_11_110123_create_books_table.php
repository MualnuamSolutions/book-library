<?php

use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function($table){
			$table->increments('id');
			$table->string('book_title');
			$table->string('acc_no');
			$table->string('edition');
			$table->integer('pages');
			$table->integer('language_id');
			$table->string('isbn_10');
			$table->string('isbn_13');
			$table->integer('copies');
			$table->integer('shelf_no');
			$table->integer('row_no');
			$table->date('published_date');
			$table->integer('author_id')->nullable();
			$table->integer('publisher_id')->nullable();
			$table->integer('category_id')->nullable();
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
		Schema::drop('books');
	}

}