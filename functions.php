<?php

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

add_action( 'widgets_init', function($id) {
    register_sidebar([
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="block side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Showcase',
        'id' => 'showcase',
        'before_widget' => '<div class="block showcase">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Box 1',
        'id' => 'box1',
        'before_widget' => '<div class="box box1">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Box 2',
        'id' => 'box2',
        'before_widget' => '<div class="box box2">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Box 3',
        'id' => 'box3',
        'before_widget' => '<div class="box box3">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

});


add_filter( 'excerpt_length', function () {
    return 25;
} );
