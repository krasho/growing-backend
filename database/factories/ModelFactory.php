<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(Growing\User::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->email,
		'password' => bcrypt(str_random(10)),
		'remember_token' => str_random(10),
	];
});

//Post's Factory
$factory->define(Growing\Models\Post::class, function (Faker\Generator $faker) {

	$description = $faker->text;

	return [
		'title' => $faker->streetName,
		'author' => 'Krasho',
		'publish_date' => 1443934800,
		'is_draft' => 'N',
		'short_description' => substr($description, 1, 100),
		'description' => $description,
		'image' => '',
	];
});

//Comment's Factory
$factory->define(Growing\Models\Comment::class, function (Faker\Generator $faker) {

	$post = Growing\Models\Post::where('id', '>', 0)->first();

	return [
		'post_id' => $post->id,
		'author' => 'Krasho',
		'description' => $faker->text,
	];
});
