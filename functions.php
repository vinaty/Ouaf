<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage fimtheme
 * @since fimtheme 1.0
 */

// Secure functions.php
defined('ABSPATH') || exit;

// Defaut options
if (!function_exists('fim_theme_support')) {

    function fim_theme_support()
    {

        //Generate dynamic title
        add_theme_support('title-tag');

        // enables Post Thumbnails support for a theme
        add_theme_support('post-thumbnails');
        add_image_size('custom-thumb', 300, 200, array('center', 'center'));

        // Valid HTML5	
        add_theme_support(
            'html5',
            array(
                'comment-list',
                'comment-form',
                'search-form',
                'gallery',
                'caption',
                'style',
                'script'
            )
        );

        //enable logo customisation
        add_theme_support('custom-logo');

        // Customize Selective Refresh Widgets
        add_theme_support('customize-selective-refresh-widgets');

        //Register menus
        register_nav_menus(array(
            'menu-1'    => __('Header Menu', 'fimtheme'),
            'footer'    => __('Footer Menu', 'fimtheme'),
        ));

        //Add BS5 Walker class
        require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
    }
}
add_action('after_setup_theme', 'fim_theme_support');



// Add CSS
function add_custom_css()
{
    // add Bootstrap style
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', false, '5', 'all');
    // add defaut style.css
    wp_enqueue_style('fim-theme', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_custom_css');


// Add JS
function add_custom_js()
{
    // add Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', '', '5', true);
}
add_action('wp_enqueue_scripts', 'add_custom_js');

/***************************************************
 * CUSTOM SETTINGS
 ***************************************************/

//Remove front admin bar
//add_filter('show_admin_bar', '__return_false');
