<?php

namespace App;

use Sober\Controller\Controller;

class SingleCourses extends Controller
{
    public function related()
    {
        $related = new \WP_Query([
            'post_type' => ['event', 'post'],
            'posts_per_page' => 3,
            'status' => 'published',
            'meta_query' => [
                [
                    'key' => 'courses-relationship',
                    'value' => '"'.get_the_Id().'"',
                    'compare' => 'LIKE',
                ]
            ],
            'orderby' => 'date',
            'order' => 'DESC'
        ]);
        #dd($related);

        return $related;
    }
}
