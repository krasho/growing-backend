<?php

namespace Growing\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
	//Relations

	public function postTag() {
		return $this->belongsToMany('Growing\Models\PostTag', 'post_tags');
	}

}
