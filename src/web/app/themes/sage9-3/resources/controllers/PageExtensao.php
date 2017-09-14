<?php

namespace App;

use Sober\Controller\Controller;

class PageExtensao extends Controller
{
	public function extensions_programs()
	{
		$extensions_programs = new \WP_Query([
			'post_type' => 'extension_programs',
			'posts_per_page' => 10,
			'status' => 'published',
		]);

		return $extensions_programs;
	}
}
