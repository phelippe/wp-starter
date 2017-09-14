<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
	//functions need to be snake_case becuse they are converted to variables in blade templates
	public function slideshow()
	{
		$slideshow = new \WP_Query([
			'post_type' => 'vitrine',
			'posts_per_page' => 4,
			'status' => 'published',
		]);

		return $slideshow;

	}

	public function course_levels()
	{
		$course_levels = get_terms( [
			'taxonomy' => 'course-level',
			'hide_empty' => false,
		] );

		return $course_levels;
	}

	public function scholarships()
	{
		$scholarships = new \WP_Query([
			'post_type' => 'page',
			'posts_per_page' => 6,
			'post_parent' => 18,
			'status' => 'published',
		]);

		return $scholarships;
	}

	public function news()
	{
		$news = new \WP_Query([
			'post_type' => 'post',
			'posts_per_page' => 3,
			'status' => 'published',
		]);

		return $news;
	}

	public function events()
	{
		$events = new \WP_Query([
			'post_type' => 'event',
			'posts_per_page' => 3,
			'status' => 'published',
		]);

		return $events;
	}

	public function places()
	{
		$places = new \WP_Query([
			'post_type' => 'place',
			'posts_per_page' => 6,
			'status' => 'published',
		]);

		return $places;
	}

}
