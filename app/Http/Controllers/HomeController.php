<?php

namespace Growing\Http\Controllers;

use Growing\Http\Controllers\Controller;
use Growing\Models\Post;

class HomeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//Get First 5 posts
		$posts = Post::limit(Post::LIMIT_TO_POSTS)->orderBy("publish_date", "desc")->get();

		return View("index", array(
			"posts" => $posts,
		));

	}
}
