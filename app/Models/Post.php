<?php

namespace Growing\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	//

	//Relations
	public function comments() {
		return $this->hasMany('Growing\Models\Comment');
	}

	public function postTag() {
		return $this->belongsToMany('Growing\Models\PostTag', 'post_tags');
	}

}
