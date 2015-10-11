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
		$pathFile = $this->_getFile($event->image);

		$phrase = Phrase::getRandomPhrase();

		//Get First 5 posts
		$posts = Post::getPredeterminatePosts();

		return View("index", array(
			"event" => $event,
			"phrase" => $phrase,
			"posts" => $posts,
			"pathFile" => $this->_getFile($event->image),
		));

	}

	private function _getFile($image) {
		$public_path = public_path();
		return $public_path . '/storage/' . $image;

		//return response()->download($url);
	}
}
