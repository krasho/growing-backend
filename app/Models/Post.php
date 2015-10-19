<?php

namespace Growing\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	const LIMIT_TO_POSTS = 5;

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['publish_date'];
	protected $dateFormat = 'U';

	//Relations
	public function comments() {
		return $this->hasMany('Growing\Models\Comment');
	}

	public function commentsCount() {
		return $this->hasOne('Growing\Models\Comment')
			->selectRaw("post_id, count(*) as total")
			->groupBy("post_id");
	}

	public function postTag() {
		return $this->belongsToMany('Growing\Models\PostTag', 'post_tags');
	}

	public function getCommentsCountAttribute() {
		if (!array_key_exists('commentsCount', $this->relations)) {
			$this->load('commentsCount');
		}

		$related = $this->getRelation('commentsCount');

		// then return the count directly
		return ($related) ? (int) $related->total : 0;
	}

	public static function getPredeterminatePosts() {
		return self::limit(self::LIMIT_TO_POSTS)->orderBy("publish_date", "desc")->get();
	}

	public function getPublishDateAttribute($publish_date) {
		return date("m/d/Y", $publish_date);
	}
}
