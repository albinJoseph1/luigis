<?php


    // Add theme support for featured images
    add_theme_support('post-thumbnails');


    function load_stylesheets(){
        wp_register_style("fonts", get_template_directory_uri() ."/fonts/beyond_the_mountains-webfont.css", array(), 1,"all");
        wp_register_style("bootstrap", get_template_directory_uri() ."/plugin-frameworks/bootstrap.min.css", array(), 1,"all");
        wp_register_style("swiper", get_template_directory_uri() ."/plugin-frameworks/swiper.css", array(), 1,"all");
        wp_register_style("ionicons", get_template_directory_uri() ."/fonts/ionicons.css", array(), 1,"all");
        wp_register_style("styles", get_template_directory_uri() ."/common/styles.css", array(), 1,"all");
        wp_register_style("custom", get_template_directory_uri() ."/custome.css", array(), 1,"all");

        wp_enqueue_style("fonts");
        wp_enqueue_style("bootstrap");
        wp_enqueue_style("swiper");
        wp_enqueue_style("ionicons");
        wp_enqueue_style("styles");
        wp_enqueue_style("custom");
    }

    add_action('wp_enqueue_scripts','load_stylesheets');






    function addjs(){
        wp_deregister_script("jquery");
        wp_register_script("jquery", get_template_directory_uri() ."/plugin-frameworks/jquery-3.2.1.min.js",array(), 1,1);
        wp_register_script("bootstrap", get_template_directory_uri() ."/plugin-frameworks/bootstrap.min.js",array(), 1,1);
        wp_register_script("swiper", get_template_directory_uri() ."/plugin-frameworks/swiper.js",array(), 1,1);
        wp_register_script("scripts", get_template_directory_uri() ."/common/scripts.js",array(), 1,1);
        wp_register_script("custom", get_template_directory_uri() ."/custome.js",array(), 1,1);


        wp_enqueue_script("jquery");
        wp_enqueue_script("bootstrap");
        wp_enqueue_script("swiper");
        wp_enqueue_script("scripts");
        wp_enqueue_script("custom");
    
    }
    add_action('wp_enqueue_scripts','addjs');


    add_image_size('product_image_small', 100, 100, false);
    add_image_size('product_image_large', 700, 700, false);


    add_theme_support('menus');
    register_nav_menus(
        array(
            'top-menu'=>__('Top Menu','theme'),
        ),
    );




    if(function_exists('acf_add_options_page'))
    {
        acf_add_options_page(
            array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-tools'
            )
        );

        acf_add_options_sub_page(
            array(
            'page_title' => 'Contact Settings',
            'menu_title' => 'Contact',
            'parent_slug' => 'website-settings',
            
            )
        );
        acf_add_options_sub_page(
            array(
            'page_title' => 'Design Settings',
            'menu_title' => 'Design',
            'parent_slug' => 'website-settings',
            
            )
        );
    }



    function my_first_post_type(){
        $args = array(
            'labels' => array(
                'name' => 'Cars',
                'singular_name' => 'Car',
            ),
            'hierarchical' =>true,
            'public'=>true,
            'has_archive' => true,
            'supports' =>array('title','editor','thumbnail'),

        );

        register_post_type('cars',$args);
    }
    add_action('init', 'my_first_post_type');

    function my_first_taxonamy(){
        $args = array(
            'labels' => array(
                'name' => 'Brands',
                'singular_name' => 'Brand',
            ),
            'public'=>true,
            'hierarchical' => true,
        );
        register_taxonomy('brands',array('cars'),$args);

    }

  


    add_action('init', 'my_first_taxonamy');

?>
