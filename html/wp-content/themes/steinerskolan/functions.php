<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');



    //add_theme_support('featured-img'); 
    // add_theme_support('custom-header');
    add_theme_support('widgets');

    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Enqueue editor styles.
    add_editor_style('editor.css');

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 200,
            'width'       => 400,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css', true, '1.1', 'all');
    wp_enqueue_style('news', get_template_directory_uri() . '/assets/css/news.css', true, '1.1', 'all');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css', true, '1.1', 'all');
    wp_enqueue_style('apply', get_template_directory_uri() . '/assets/css/apply.css', true, '1.1', 'all');
    wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css', true, '1.1', 'all');
    wp_enqueue_style('landing', get_template_directory_uri() . '/assets/css/landing.css', true, '1.1', 'all');
    wp_enqueue_script('hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', '', '', true);
    wp_enqueue_script('loading', get_template_directory_uri() . '/assets/js/loading.js', '', '', true);
});

add_theme_support('wp-block-styles');

// Register news custom post type.
require get_template_directory() . '/post-types/news.php';

//Register blocks on news posts in template so teh blocka are there when user create a new news post
add_action('init', function () {
    $post_type_object = get_post_type_object('news');
    $post_type_object->template = array(
        array('core/image'),
        /* array('core/heading'), */
        array('core/paragraph')
    );
});



function get_menu(string $location)
{
    $menu = [];
    $items = wp_get_nav_menu_items($location) ?: [];

    foreach ($items as $item) {
        $parentId = (int) $item->menu_item_parent;

        if ($parentId === 0) {
            $item->children = [];
            $menu[$item->ID] = $item;

            continue;
        }

        $menu[$parentId]->children[] = $item;
    }

    return $menu;
}
