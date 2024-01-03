<?php get_header();?>

<?php $hero=get_field('hero'); ?>
<?php $main_information=get_field('main_information'); ?>
<section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white">

                                <h5><b> <?php echo $hero['small_title'];?></b></h5>
                                <h1 class="mt-30 mb-15"><?php echo $hero['main_title'];?></h1>
                                <?php if($hero['link']):?>
                                        <h5><a href="<?php echo $hero['link'];?>" class="btn-primaryc plr-25"><b><?php echo $hero['link_text'];?></</b></a></h5>
                                <?php endif; ?>
                                </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <!-- <img class="heading-img" src="<?php // bloginfo('template_directory');?>/images/heading_logo.png" alt=""> -->
                        <img class="heading-img" src="<?php echo $main_information['section_icon']['url']; ?>" alt=""> 
                        <h2><?php echo $main_information['information_title']; ?></h2>

                </div>

                <div class="row">
                        <div class="col-md-6">
                                <?php  echo $main_information['left_side'];?>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <?php  echo $main_information['right_side'];?>
                        </div><!-- col-md-6 -->
                </div><!-- row -->
        </div><!-- container -->
</section>



<?php if (have_rows('seller_section')): ?>
    <?php while (have_rows('seller_section')): the_row(); ?>
        <section class="story-area bg-seller color-white pos-relative">
            <div class="pos-bottom triangle-up"></div>
            <div class="pos-top triangle-bottom"></div>
            <div class="container">
                <?php $best_seller_title = get_sub_field('best_seller_title'); ?>
                <?php $best_sellers = get_sub_field('best_sellers'); ?>

                
                <?php if ($best_seller_title): ?>
                    <div class="heading">

                        <?php $icon = get_sub_field('best_seller_icon'); ?>     
                        <!-- <img class="heading-img" src="<?php //bloginfo('template_directory'); ?>/images/heading_logo.png" alt=""> -->
                        <img class="heading-img" src="<?php echo $icon['url']; ?>" alt="<?php echo esc_attr($title); ?>"> 

                        <h2><?php echo esc_html($best_seller_title); ?></h2>
                    </div>
                <?php endif; ?>

                <?php if ($best_sellers): ?>
                        <div class="row">   
                                <?php while( have_rows('best_sellers') ): the_row();
                                        $image = get_sub_field('image');
                                        $title = get_sub_field('title');
                                        $price = get_sub_field('price');
                                        $link = get_sub_field('link');
                                        $offer = get_sub_field('offer');
                                        $deal = get_sub_field('deal_of_the_day');
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                <?php
                                                switch ($deal) {
                                                case 'offer':?>
                                                        <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>OFFER</b></h6>
                                                        <?php break;
                                                case 'speciality':?>
                                                        <h6 class="ribbon-cont"><div class="ribbon secondary"></div><b>SPECIALITY</b></h6>
                                                        <?php break;
                                                case 'plus_size':?>
                                                        <h6 class="ribbon-cont color-black"><div class="ribbon white"></div><b>PLUS SIZE</b></h6>
                                                        <?php break;
                                                default:
                                                        break;
                                                }
                                                ?>
                                                <img src="<?php echo $image['sizes']['product_image_large']; ?>" alt="<?php echo esc_attr($title); ?>"> 
                                        </div>
                                        <h5 class="mt-20"><?php echo $title; ?></h5>
                                        <h4 class="mt-5"><b>$<?php echo $price; ?></b></h4>
                                        <?php if($link): ?>
                                                <h6 class="mt-20"><a href="<?php echo esc_url($link); ?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                                        <?php endif; ?>                                                        
                                        </div>
                                </div>
                        <?php endwhile; ?> 
                <?php endif; ?>
                </div>
            
                <h6 class="center-text mt-40 mt-sm-20 mb-30">
                    <a href="#" class="btn-primaryc plr-25"><b>SEE TODAY'S MENU</b></a>
                </h6>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>










<!-- 
<?php if( have_rows('best_sellers') ): ?>
    <section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
        <div class="heading">
                <img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
                <h2>Best Sellers</h2>
            </div>

            <div class="row">   
                <?php while( have_rows('best_sellers') ): the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $price = get_sub_field('price');
                    $link = get_sub_field('link');
                    $offer = get_sub_field('offer');
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="center-text mb-30">
                            <div class="ïmg-200x mlr-auto pos-relative">
                                <?php if($offer): ?>                                           
                                    <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>OFFER</b></h6>
                                <?php endif; ?>
                                <img src="<?php echo $image['sizes']['product_image_large']; ?>" alt="<?php echo esc_attr($title); ?>"> 
                            </div>
                            <h5 class="mt-20"><?php echo $title; ?></h5>
                            <h4 class="mt-5"><b>$<?php echo $price; ?></b></h4>
                            <?php if($link): ?>
                                <h6 class="mt-20"><a href="<?php echo esc_url($link); ?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                            <?php endif; ?>                                                        
                        </div>
                    </div>
                <?php endwhile; ?> 
                
            </div>
            <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAY'S MENU</b></a></h6>
        </div>
    </section>            
<?php endif; ?>
 -->





<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_directory');?>/images/heading_logo.png" alt="">
                        <h2>Our Menu</h2>
                </div>
                <?php if(have_rows('our_menu')):?>
                        <div class="row">
                                <div class="col-sm-12">
                                        <ul class="selecton brdr-b-primary mb-70">
                                                <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
                                                <?php while(have_rows('our_menu')): the_row();
                                                        $category_name = get_sub_field('category_name');
                                                        $menu_name = get_sub_field('category');
                                                ?>
                                                <li><a href="#" data-select="<?php echo sanitize_title($category_name);?>"><b><?php echo $category_name?></b></a></li>
                                                <?php if(have_rows('category')):?>

                                                <?php endif;?>
                                                <?php endwhile;?>
                                        </ul>
                                </div>
                        </div>
                <?php endif;?>




                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
        </div><!-- container -->
</section>
<?php get_footer();?>
