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