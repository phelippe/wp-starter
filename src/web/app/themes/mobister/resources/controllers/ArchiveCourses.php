<?php

namespace App;

use Sober\Controller\Controller;

class ArchiveCourses extends Controller
{
    public function course_places()
    {
        $course_places = new \WP_Query([
            'post_type' => 'places',
            'posts_per_page' => -1,
            'status' => 'published',
        ]);

        return $course_places;
    }

    public function course_levels()
    {
        /*$course_levels = new \WP_Query([
            'post_type' => 'places',
            'posts_per_page' => -1,
            'status' => 'published',
        ]);*/
        $course_levels = get_terms( 'course-level', array(
            'hide_empty' => false,
        ) );

        return $course_levels;
    }
}
