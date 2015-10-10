<?php

namespace Growing\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	//
	//
	//
	const LIMIT_TO_EVENT = 1;
	public static function getEventOnDate($date = "") {

		if (empty($date)) {
			$date = Carbon::now();
		}

		return self::limit(self::LIMIT_TO_EVENT)->where("start_date", "<=", $date->getTimestamp())
			->where("finish_date", ">=", $date->getTimestamp())
			->get();

	}
}
