<?php

namespace App;

use Sober\Controller\Controller;

class PageBolsasEFinanciamentos extends Controller
{
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
}
