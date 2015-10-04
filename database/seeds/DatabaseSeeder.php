<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Model::unguard();

		// $this->call(UserTableSeeder::class);
		$this->call(PostTableSeeder::class);

		$this->_seedToTag();
		Model::reguard();
	}

	private function _seedToTag() {
		//Create Records
		$tag = new Tag;
		$tag->name = "N.L.P.";
		$tag->save();

		$tag = new Tag;
		$tag->name = "Gestalt";
		$tag->save();

		$tag = new Tag;
		$tag->name = "Humanist";
		$tag->save();
	}
}
