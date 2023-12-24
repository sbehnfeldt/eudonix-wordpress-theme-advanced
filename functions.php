<?php

// Theme support
add_action( 'after_setup_theme', function () {
    // nav menus
    register_nav_menus( [
        'primary' => __( 'Primary Menu' ),
        'footer'  => __( 'Footer Menu' )
    ] );

    // Featured image support
    add_theme_support( 'post-thumbnails' );

    // Post format support
    add_theme_support('post-formats', ['aside', 'gallery', 'link']);
} );


add_filter( 'excerpt_length', function () {
    return 25;
} );

function get_top_parent() {
    global $post;

    if ($post->post_parent) {
        $ancestors = get_post_ancestors($post->ID);
        return $ancestors[0];

    }
    return $post->ID;
}

function page_is_parent() {
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}