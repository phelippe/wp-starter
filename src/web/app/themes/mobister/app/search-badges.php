<?php

namespace App;

function get_badge_name($post_type_object) {

//    dd(get_post_type_object($post_type_object));

    $post_type_name = get_post_type_object($post_type_object)->label;

//    dd($post_type_name);

    switch ($post_type_name) {
        case 'Posts':
            return 'Notícias';

        case 'Páginas':
            return 'Página';

        default:
            return $post_type_name;
    }

//    $nome = 'Post';
//    return $nome;
}
