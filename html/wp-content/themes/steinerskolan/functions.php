<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css', true, '1.1', 'all');
    wp_enqueue_script('hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', '', '', true);
    wp_enqueue_script('loading', get_template_directory_uri() . '/assets/js/loading.js', '', '', true);
});

// Add support for editor styles.
add_theme_support('editor-styles');

// Enqueue editor styles.
add_editor_style('editor.css');

add_theme_support(
    'custom-logo',
    array(
        'height'      => 190,
        'width'       => 190,
        'flex-width'  => false,
        'flex-height' => false,
    )
);
