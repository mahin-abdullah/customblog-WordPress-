<?php

  function mahinblog_theme_support() {
    //adds dynamic title-tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  
  add_action('after_setup_theme', 'mahinblog_theme_support');

  function mahinblog_menus() {
    $locations = array(
      'primary' => "Desktop Primary Left Sidebar",
      'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
  }

  add_action('init', 'mahinblog_menus');


  function mahinblog_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('mahinblog-style', get_template_directory_uri() . "/style.css", array('mahinblog-bootstrap'), $version, 'all');
    wp_enqueue_style('mahinblog-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.5.3', 'all');
    wp_enqueue_style('mahinblog-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  }

  add_action('wp_enqueue_scripts', 'mahinblog_register_styles');



  function mahinblog_register_scripts() {
    wp_enqueue_script('mahinblog-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('mahinblog-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('mahinblog-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.5.3', true);
    wp_enqueue_script('mahinblog-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
  }

  add_action('wp_enqueue_scripts', 'mahinblog_register_scripts');

?>