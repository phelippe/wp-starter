<?php

namespace App;

use Sober\Controller\Controller;

class PageComoIngressar extends Controller
{
	public function formas_ingresso()
	{
		$formas_ingresso = new \WP_Query([
			'post_type' => 'ingressos',
			'posts_per_page' => -1,
			'status' => 'published',
		]);

		return $formas_ingresso;
	}
}
