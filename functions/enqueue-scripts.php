<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
        
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
	wp_enqueue_script( 'particles', get_template_directory_uri() . '/assets/scripts/particles.min.js');
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.js');
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.css');
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick-theme.css');
	wp_enqueue_style( 'flaticon', get_template_directory_uri() .'/assets/flaticon/flaticon.css');
	wp_enqueue_script( 'wahaya', get_template_directory_uri() . '/assets/scripts/wahaya.js', array('jquery', 'slick'), filemtime(get_template_directory(). '/assets/scripts/js'), true);
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);