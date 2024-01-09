<!DOCTYPE HTML>
<html lang="en">
        <head>
                <title>Luigi's</title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta charset="UTF-8">
                <!-- Font -->
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">     
                <?php wp_head();?>
        </head>
        <body>
                <header>
                        <?php $con_header = get_field('header', 'option'); ?>
                        <div class="container">
                                <?php
                                $custom_logo_id = get_theme_mod('custom_logo');
                                if (isset($custom_logo_id) && !empty($custom_logo_id)) {
                                        $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full')[0];?>
                                        <a class="logo" href="#"><img src="<?php echo $logo_url; ?>" alt="Logo"></a>
                                <?php } 
                                if (isset($con_header['button_link']['url']) && isset($con_header['button_text']) && !empty($con_header['button_text']) && !empty($con_header['button_link']['url'])) { ?>
                                        <div class="right-area">
                                                <h6><a class="plr-20 color-white btn-fill-primary" href="<?php echo $con_header['button_link']['url']; ?>"><?php echo $con_header['button_text']; ?></a></h6>
                                        </div>
                                <?php } ?>                                                    
                                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
                                <?php 
                                        wp_nav_menu(
                                                array(
                                                        'theme_loction'=>'top-menu',
                                                        'menu_id'=>'main-menu',
                                                        'container'=>'ul',
                                                        'menu_class'=>'main-menu font-mountainsre',
                                                )
                                        );
                                ?>
                                <div class="clearfix"></div>
                        </div>
                </header>