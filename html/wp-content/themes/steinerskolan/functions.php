<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

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
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', true, '1.1', 'all');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css', true, '1.1', 'all');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css', true, '1.1', 'all');
    wp_enqueue_style('about-school', get_template_directory_uri() . '/assets/css/about-school.css', true, '1.1', 'all');
    wp_enqueue_style('apply', get_template_directory_uri() . '/assets/css/apply.css', true, '1.1', 'all');
    wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css', true, '1.1', 'all');
    wp_enqueue_style('courses', get_template_directory_uri() . '/assets/css/courses.css', true, '1.1', 'all');
    wp_enqueue_style('landing', get_template_directory_uri() . '/assets/css/landing.css', true, '1.1', 'all');
    wp_enqueue_style('details-block', get_template_directory_uri() . '/assets/css/details-block.css', true, '1.1', 'all');
    wp_enqueue_script('details-block', get_template_directory_uri() . '/assets/js/details-block.js', '', '', true);
    wp_enqueue_script('hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', '', '', true);
    wp_enqueue_script('loading', get_template_directory_uri() . '/assets/js/loading.js', '', '', true);
});

add_theme_support('wp-block-styles');

// Editor color palette.
$black     = '#000000';
$green     = '#D9ECD7';
$purple    = '#DDD8FA';
$yellow    = '#FFEFB6';
$white     = '#FFFFFF';
$pink      = '#F6CDC8';

add_theme_support(
    'editor-color-palette',
    array(
        array(
            'name'  => esc_html__('Black', 'steinerskolan'),
            'slug'  => 'black',
            'color' => $black,
        ),
        array(
            'name'  => esc_html__('Green', 'steinerskolan'),
            'slug'  => 'green',
            'color' => $green,
        ),
        array(
            'name'  => esc_html__('Purple', 'steinerskolan'),
            'slug'  => 'purple',
            'color' => $purple,
        ),
        array(
            'name'  => esc_html__('Yellow', 'steinerskolan'),
            'slug'  => 'yellow',
            'color' => $yellow,
        ),
        array(
            'name'  => esc_html__('White', 'steinerskolan'),
            'slug'  => 'white',
            'color' => $white,
        ),
        array(
            'name'  => esc_html__('Pink', 'steinerskolan'),
            'slug'  => 'pink',
            'color' => $pink,
        ),
    )
);

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
