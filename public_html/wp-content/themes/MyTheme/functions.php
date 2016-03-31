<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_theme_support('automatic-feed-links');
show_admin_bar(false);

function logo_widgets_init() {

    register_sidebar( array(
        'name'          => 'Логотип SVG',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'logo_widgets_init' );

add_theme_support('post-thumbnails');

require_once ( get_stylesheet_directory() . '/theme-options.php' );

// Отключаем стандартную галерею
// remove_shortcode('gallery');
