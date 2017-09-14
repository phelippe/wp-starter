<?php

namespace App;

use Sober\Controller\Controller;

class PageInscrevaSe extends Controller
{
	public function inscricoes()
	{
		$inscricoes = new \WP_Query([
			'post_type' => 'inscricoes',
			'posts_per_page' => -1,
			'status' => 'published',
		]);

		return $inscricoes;
	}
}
