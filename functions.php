<?php
// Enable Custom Logo Support
add_theme_support( 'custom-logo' );

// Add Title Tag Support
add_theme_support('title-tag');

// Add TailwindCSS Stylesheet to DOM
function enqueue_scripts() {
  // Theme's Compiled TailwindCSS Styles
  wp_enqueue_style('whitneyjohnson-style', get_template_directory_uri() . '/dist/tailwind.css', array(), '2.0.0');
  // Theme's JavaScript Functionality
  wp_enqueue_script('whitneyjohnson-nav-js', get_template_directory_uri() . '/src/assets/js/navigationHandlers.js', array(), '2.0.0', false);
  wp_enqueue_script('whitneyjohnson-modal-js', get_template_directory_uri() . '/src/assets/js/modalHandler.js', array(), '2.0.0', false);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>