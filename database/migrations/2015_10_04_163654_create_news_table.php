<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('news', function (Blueprint $table) {
			$table->increments('id');
			$table->mediumText('description');
			$table->string('image');
			$table->char('is_draft', 1)->default('Y');
			$table->bigInteger('start_date')->unsigned();
			$table->bigInteger('finish_date')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('news');
	}
}
