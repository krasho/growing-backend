<?php

namespace Growing\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
	//
	//Relations
	//

	public function post() {
		return $this->belongsTo('Growing\Models\Post');
	}

}
