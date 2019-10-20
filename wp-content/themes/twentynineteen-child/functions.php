<?php

/**
 * Twenty Nineteen Child theme styles and scripts
 */
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');
add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');

function enqueue_parent_styles() {
  // Parent theme css
  wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

function enqueue_child_theme_styles() {
  // Child theme css
  wp_enqueue_style('child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style'),
    wp_get_theme()->get('Version')
  );

  // Bootstrap css
  wp_enqueue_style('bootstrap-css',
    get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  // Fontawesome css
  wp_enqueue_style('fontawesome-css',
    get_stylesheet_directory_uri() . '/css/fontawesome/css/all.min.css');
}

function enqueue_child_theme_scripts() {
  // Child template js
  wp_enqueue_script('child-template-js',
    get_stylesheet_directory_uri() . '/js/main.js',
    array('jquery'), '1.0', true
  );

  // Bootstrap js
  wp_enqueue_script('bootstrap-js',
    get_stylesheet_directory_uri() . '/js/bootstrap.min.js',
    array('jquery'), '1.0', true
  );
}

/**
 * Template functions
 */
require dirname(__FILE__) . '/inc/template-functions.php';
