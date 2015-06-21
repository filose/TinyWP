<?php

/* ==========================================================================
CSS
========================================================================== */
function tiny_styles() {
  /* Register CSS */
  wp_register_style('style', get_template_directory_uri() . '/style.css');
  /* Enqueue CSS */
  wp_enqueue_style('style');
}

add_action( 'wp_enqueue_scripts', 'tiny_styles' );

/* ==========================================================================
JS
========================================================================== */
function tiny_scripts() {
  /* Register JS */
  wp_register_script('main', get_template_directory_uri() . '/js/script.min.js', array('jquery'), '1.0.0', true);
  /* Enqueue JS */
  wp_enqueue_script('jquery');
  wp_enqueue_script('main');
}

add_action( 'wp_enqueue_scripts', 'tiny_scripts' );

/* ==========================================================================
NAVS
========================================================================== */

add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

/* ==========================================================================
WIDGETS
========================================================================== */

function tiny_widgets_init() {

  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_2',
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="">',
    'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_3',
    'before_widget' => '<div class="footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));

}
add_action( 'widgets_init', 'tiny_widgets_init' );

/* ==========================================================================
EMBED WRAPPER
========================================================================== */

add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="video-container">' . $html . '</div>';
}

/* ==========================================================================
ADD FEATURED IMAGE
========================================================================== */

add_theme_support( 'post-thumbnails' );

?>