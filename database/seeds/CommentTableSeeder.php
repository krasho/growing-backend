<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		factory(apf\Models\Comment::class, 10)->create();
	}
}
