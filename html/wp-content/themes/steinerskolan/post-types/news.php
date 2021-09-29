<?php

declare(strict_types=1);
/*
* Register the project post type
*/
add_action('init', function () {
  register_post_type('News', [
    'has_archive' => true,
    'labels' => [
      'add_new_item' => __('Add New News'),
      'edit_item' => __('Edit News'),
      'name' => __('News'),
      'search_items' => __('Search News'),
      'singular_name' => __('News'),
    ],
    'supports' => [
      'title',
      'editor',
      'thumbnail',
    ],
    'menu_icon' => 'dashicons-portfolio',
    'menu_position' => 20,
    'public' => true,
    'show_in_rest' => true,
  ]);
});
