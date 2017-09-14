<?php

namespace App;


add_action('pre_get_posts', __NAMESPACE__.'\\filter_courses');
function filter_courses($query) {
    global $wp_query, $wpdb;

    if (isset($query->query['post_type']) && $query->query['post_type'] == 'courses') {
        if ( is_archive('courses') ){

            $taxquery = [];
            $metaquery = [];

            if(isset($_GET['unidade']) && !empty($_GET['unidade'])){
                array_push($metaquery,
                    [
                        'key'       => 'course-places',
                        'value'     => $_GET['unidade'],
                        'compare' => 'LIKE',
                    ]
                );
            }

            if(isset($_GET['nivel']) && !empty($_GET['nivel'])){
                array_push($taxquery,
                    [
                        'taxonomy' => 'course-level',
                        'field'    => 'term_id',
                        'terms'    => $_GET['nivel'],
                    ]
                );
            }

            if(isset($_GET['turno']) && !empty($_GET['turno'])){
                array_push($metaquery,
                    [
                        'key'       => 'course-shift',
                        'value'     => '"'.$_GET['turno'].'"',
                        #'compare' => '=',
                        #'type' => 'numeric',
                        'compare' => 'LIKE',
                    ]
                );
            }

            if(isset($_GET['nome']) && !empty($_GET['nome'])){
                $query->set('s', $_GET['nome']);
            }

            if(isset($metaquery) && !empty($metaquery)){
                $query->set('meta_query', $metaquery);
            }
            if(isset($taxquery) && !empty($taxquery)){
                $query->set('tax_query', $taxquery);
            }

            $query->set('post_type' ,'courses');

            $query->set('orderby' ,'title');
            #$query->set('menu_order' , 'false');
            $query->set('order' ,'ASC');
            $query->set('nopaging' ,'true');
            $query->set('posts_per_page' ,'-1');
        }
    }

    //we remove the actions hooked on the '__after_loop' (post navigation)
    #remove_all_actions ( '__after_loop');
}


/*add_filter( 'allowed_http_origins', 'add_allowed_origins' );
function add_allowed_origins( $origins ) {
    $origins[] = 'https://anima-saojudas-website.dev';
    return $origins;
}*/

function home_search_courses () {
    $qCourse = isset($_GET['course']) ? $_GET['course'] : null;

    if (! $qCourse) {
        echo '[]';
        exit;
    }

    $args = [
        'post_type' => 'courses',
        'posts_per_page' => 10,
        's' => $qCourse,
    ];
    $wp_query = new \WP_Query($args);
    $posts = [];

//    dd($wp_query->posts);

    $rtrn = [
        'items' => []
    ];


    foreach ($wp_query->posts as $post) {
        $rtrn['items'][] = [
            'id' => $post->ID,
            'text' => $post->post_title,
            'url' => get_permalink($post->ID)
        ];
    }

    echo json_encode($rtrn);
    exit;
    wp_die();
}
add_action('wp_ajax_nopriv_home_search_courses', __NAMESPACE__.'\\home_search_courses');
add_action('wp_ajax_home_search_courses', __NAMESPACE__.'\\home_search_courses');


/*function add_menu_class( $classes, $item ) {

    if($item->type == 'taxonomy') {
        $classes[] = 'taxonomy-id-'.$item->object_id;
    }

    return $classes;

}
add_filter( 'nav_menu_css_class', __NAMESPACE__.'\\add_menu_class', 10, 2 );*/

function query_string_unidades( $url, $post ) {
    if ( $post->post_type == 'places' ) {
        $url = '/unidades/#'.$post->post_name;
    }
    return $url;
}
add_filter( 'post_type_link', __NAMESPACE__.'\\query_string_unidades', 10, 3 );

function query_string_formas_ingresso( $url, $post ) {
    if ( $post->post_type == 'ingressos' ) {
        $url = '/como-ingressar/#'.$post->post_name;
    }
    return $url;
}
add_filter( 'post_type_link', __NAMESPACE__.'\\query_string_formas_ingresso', 10, 3 );

function query_string_curso_niveis( $url, $term, $taxonomy) {
    #dd($term, $taxonomy);
    if ( $taxonomy == 'course-level' ) {
        $url = '/cursos/?nivel='.$term->term_id;
    }

    return $url;
}
add_filter( 'term_link', __NAMESPACE__.'\\query_string_curso_niveis', 10, 3 );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
