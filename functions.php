<?php
// Enable Custom Logo Support
add_theme_support( 'custom-logo' );

// Add Title Tag Support
add_theme_support('title-tag');

// Add TailwindCSS Stylesheet to DOM
function enqueue_styles() {
  // Update version to force browsers to refetch asset if you have added new Tailwind Classes to the DOM
  wp_enqueue_style('tailwindCSS-style', get_template_directory_uri() . '/dist/tailwind.css', false, '1.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
?>