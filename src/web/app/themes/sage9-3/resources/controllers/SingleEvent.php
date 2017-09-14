<?php

namespace App;

use Sober\Controller\Controller;

class SingleEvent extends Controller
{
    public function related()
    {
        $related = new \WP_Query([
            'post_type' => 'event',
            'posts_per_page' => 3,
            'status' => 'published',
            'post__not_in' => array(get_the_ID()),
            /*'meta_query' => [
                ['key' => '_thumbnail_id']
            ],*/
        ]);

        return $related;
    }
}
