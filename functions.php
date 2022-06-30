<?php

function mqr_load_scripts_and_styles()
{
  wp_enqueue_style('mqr-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css', array(), '1.0', 'all');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap', array(), null);
  wp_enqueue_script('fontawesome-icons', 'https://kit.fontawesome.com/e19e3b13e4.js', array(), false);
  wp_enqueue_script('mqr-script', get_template_directory_uri() . '/assets/js/main.min.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'mqr_load_scripts_and_styles');

function mqr_setup()
{
  register_nav_menus(array(
    'mqr-menu' => 'Main Menu'
  ));

  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mqr_setup');