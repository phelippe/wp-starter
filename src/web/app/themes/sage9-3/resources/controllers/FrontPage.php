<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
	//functions need to be snake_case becuse they are converted to variables in blade templates
	public function slideshow()
	{
		$slideshow = new \WP_Query([
			'post_type' => 'post-type-name',
			'posts_per_page' => 4,
			'status' => 'published',
		]);

		return $slideshow;

	}

	public function course_levels()
	{
		$course_levels = get_terms( [
			'taxonomy' => 'tax-name',
			'hide_empty' => false,
		] );

		return $course_levels;
	}
}
