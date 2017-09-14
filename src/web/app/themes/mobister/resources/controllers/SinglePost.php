<?php

namespace App;

use Sober\Controller\Controller;

class SinglePost extends Controller
{
    public function related()
    {
        $related = new \WP_Query([
            'post_type' => 'post',
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
