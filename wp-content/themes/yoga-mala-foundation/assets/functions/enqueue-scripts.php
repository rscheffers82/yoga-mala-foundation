<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  // Load vimeo API in the header
  wp_enqueue_script( 'vimeo-api', 'https://player.vimeo.com/api/player.js', '', '', false);

  // Load What-Input files in footer
  wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/dist/what-input.min.js', array(), '', true );

  // Adding Foundation scripts file in the footer
  wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2.3', true );

  // Adding scripts file in the footer
  wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery', 'vimeo-api' ), '', true );

  // Adding scroll Reveal script file in the footer
  wp_enqueue_script( 'scroll-reveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array( 'jquery' ), '', true );

  // Adding scroll Reveal settings file in the footer
  wp_enqueue_script( 'scroll-reveal-settings', get_template_directory_uri() . '/js/scrollRevealSettings.js', array( 'jquery', 'scroll-reveal'), '', true );

  // Adding Reveal (modal) file in the footer
  wp_enqueue_script( 'reveal', get_template_directory_uri() . '/vendor/foundation-sites/js/foundation.reveal.js', array('jquery', 'foundation-js'), '', true );

  // Register main stylesheet
  wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

  // Comment reply script for threaded comments
  if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
