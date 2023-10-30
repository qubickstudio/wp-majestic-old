<?php

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height' => 120,
        'width'  => 120,
    ));



    function majestic_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('majestic-style', get_template_directory_uri().'/style.css', array(), $version, 'all');
        wp_enqueue_style('majestic-animate_css', get_template_directory_uri().'/inc/cdn/animate-css/animate.css', array(), '4.1.1', 'all');
        // wp_enqueue_style('majestic-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
        wp_enqueue_style('majestic-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1', 'all');
        wp_enqueue_style('majestic-slick', get_template_directory_uri().'/inc/cdn/slick/slick.css', array());
        wp_enqueue_style('majestic-slick-theme', get_template_directory_uri().'/inc/cdn/slick/slick-theme.css', array());
        wp_enqueue_style('majestic-scroll', get_template_directory_uri().'/inc/cdn/js/scroll.css', array());
    }
    
    add_action('wp_enqueue_scripts', 'majestic_register_styles');

    function majestic_register_scripts(){
        wp_enqueue_script('majestic-jquery',  get_template_directory_uri().'/inc/cdn/jquery/jquery-3.6.0.js', array(), '3.6.0', false);
        wp_enqueue_script('majestic-slick',  get_template_directory_uri().'/inc/cdn/slick/slick.js', array(), false);
        wp_enqueue_script('majestic-tailwind', 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp', array(), '1.0.0', true);
        wp_enqueue_script('majestic-script', get_template_directory_uri().'/inc/js/script.js', array(), '1.0.0', true);
        // wp_enqueue_script('majestic-scroll', get_template_directory_uri().'/inc/cdn/js/scroll.js', array(), '1.0.0', true);
        wp_enqueue_script('animate-js', get_template_directory_uri().'/inc/cdn/animate-js/lib/anime.js', array(), '3.2.1',false);
        
        wp_enqueue_script('majestic-simple-parallax',  get_template_directory_uri().'/inc/cdn/js/simpleParallax.js', array(), '5.5.1', false);
    }
    
    add_action('wp_enqueue_scripts', 'majestic_register_scripts');
    
    function majestic_nav(){
        register_nav_menu('primary', 'Navigation');
    }

    add_action('init', 'majestic_nav');

    require_once get_template_directory().'/inc/meta.php';

?>