<?php

namespace Growing\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model {
	//Relations

	public function post() {
		return $this->belongsToMany('Growing\Models\Post');
	}

	public function tag() {
		return $this->belongsToMany('Growing\Models\Tag');
	}

}
