<?php

namespace Growing\Models;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model {
	//
	//
	const LIMIT_TO_PHRASE = 1;

	public static function getRandomPhrase() {
		//return self::limit(self::LIMIT_TO_PHRASE)->orderBy(\DB::raw('RAND()'))->get();
		//
		return self::limit(self::LIMIT_TO_PHRASE)->find(1)->get();
	}

}
