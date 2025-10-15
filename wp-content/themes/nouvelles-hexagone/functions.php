<?php
function nouvelles_hexagone_enqueue_assets() {
    wp_enqueue_style('nouvelles-hexagone-style', get_stylesheet_uri(), [], '1.0');
    wp_enqueue_script('nouvelles-hexagone-script', get_template_directory_uri() . '/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'nouvelles_hexagone_enqueue_assets');

function nouvelles_hexagone_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Menu principal', 'nouvelles-hexagone'),
    ]);
}
add_action('after_setup_theme', 'nouvelles_hexagone_theme_support');
