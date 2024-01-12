<?php
    // Add theme support for featured images
    add_theme_support('custom-logo');
    add_image_size('product_image_small', 100, 100, false);
    add_image_size('product_image_large', 700, 700, false);
    add_theme_support('menus');
    register_nav_menus(
        array(
            'top-menu'=>__('Top Menu','theme'),
        ),
    );
    #load CSS Files
    function load_stylesheets(){
        wp_register_style("fonts", get_template_directory_uri() ."/fonts/beyond_the_mountains-webfont.css", array(), 1,"all");
        wp_register_style("bootstrap", get_template_directory_uri() ."/plugin-frameworks/bootstrap.min.css", array(), 1,"all");
        wp_register_style("swiper", get_template_directory_uri() ."/plugin-frameworks/swiper.css", array(), 1,"all");
        wp_register_style("ionicons", get_template_directory_uri() ."/fonts/ionicons.css", array(), 1,"all");
        wp_register_style("styles", get_template_directory_uri() ."/common/styles.css", array(), 1,"all");

        wp_enqueue_style("fonts");
        wp_enqueue_style("bootstrap");
        wp_enqueue_style("swiper");
        wp_enqueue_style("ionicons");
        wp_enqueue_style("styles");
    }
    add_action('wp_enqueue_scripts','load_stylesheets');
    #load JS Files
    function addjs(){
        wp_deregister_script("jquery");
        wp_register_script("jquery", get_template_directory_uri() ."/plugin-frameworks/jquery-3.2.1.min.js",array(), 1,1);
        wp_register_script("bootstrap", get_template_directory_uri() ."/plugin-frameworks/bootstrap.min.js",array(), 1,1);
        wp_register_script("swiper", get_template_directory_uri() ."/plugin-frameworks/swiper.js",array(), 1,1);
        wp_register_script("progressbar", get_template_directory_uri() ."/plugin-frameworks/progressbar.min.js",array(), 1,1);
        wp_register_script("waypoints", get_template_directory_uri() ."/plugin-frameworks/jquery.waypoints.min.js",array(), 1,1);
        wp_register_script("scripts", get_template_directory_uri() ."/common/scripts.js",array(), 1,1);

        wp_enqueue_script("jquery");
        wp_enqueue_script("bootstrap");
        wp_enqueue_script("swiper");
        wp_enqueue_script("progressbar");
        wp_enqueue_script("waypoints");
        wp_enqueue_script("scripts");    
    }
    add_action('wp_enqueue_scripts','addjs');
    #Custom option for header and footer
?>