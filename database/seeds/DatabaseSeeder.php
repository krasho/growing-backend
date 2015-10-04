<?php

use Growing\Models\Event;
use Growing\Models\Phrase;
use Growing\Models\Tag;
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
		$this->_seedToTag();
		$this->call(PostTableSeeder::class);
		$this->call(CommentTableSeeder::class);
		$this->call(PostTagTableSeeder::class);
		$this->_seedToPhrase();
		$this->_seedToNew();
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

	private function _seedToPhrase() {

		$phrase = new Phrase;
		$phrase->name = 'Si cambias la forma en que miras las cosas, las cosas que miras cambian.';
		$phrase->author = 'Wayne Dyer';

		$phrase->save();

		$phrase = new Phrase;
		$phrase->name = 'Ve a por el ahora. El futuro no esta prometido a nadie.';
		$phrase->author = 'Wayne Dyer';

		$phrase->save();

		$phrase = new Phrase;
		$phrase->name = 'Cuando juzgas a otros, no los defines, te defines a ti mismo.';
		$phrase->author = 'Wayne Dyer';

		$phrase->save();

	}

	private function _seedToNew() {
		$new = new Event();
		$new->description = "IV taller de desarrollo Humano";
		$new->image = "";
		$new->is_draft = "N";
		$new->start_date = 1443934800;
		$new->finish_date = 1451538000;

		$new->save();
	}
}
