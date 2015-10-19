<?php

namespace Growing\Http\Controllers;

use Growing\Http\Controllers\Controller;
use Growing\Models\Event;
use Growing\Models\Phrase;
use Growing\Models\Post;

class HomeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$event = Event::getEventOnDate();
		$phrase = Phrase::getRandomPhrase();

		//Get First 5 posts
		$posts = Post::getPredeterminatePosts();

		$pathFile = "";
		if (isset($event->image)) {
			$pathFile = $event->image;
		}

		return View("index", array(
			"event" => $event,
			"phrase" => $phrase,
			"posts" => $posts,
			"pathFile" => $pathFile,
		));

	}

	public function post($post) {
		$post = Post::find($post);

		return View("post", array(
			"post" => $post,
		));
	}

	private function _getFile($image) {
		$url = '/storage/' . $image;
		return $url;
	}
}
