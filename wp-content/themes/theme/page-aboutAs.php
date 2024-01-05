<?php
/* Template Name: About Us */


get_header();?>
<?php $top_banner = get_field('top_banner'); ?>

    <section class="bg-4 h-500x main-slider pos-relative">
            <div class="triangle-up pos-bottom"></div>
            <div class="container h-100">
                    <div class="dplay-tbl">
                            <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b> <?php echo $top_banner['small_title'];?> </b></h5>
                                <h2 class="mt-30 mb-15"><?php echo $top_banner['main_title'];?></h2>
                            </div>
                    </div>
            </div>
    </section>

    
    <?php $story_area = get_field('story_area'); ?>

    <section class="story-area left-text center-sm-text">
        <div class="container">

                <div class="row">
                        <div class="col-md-6"><img class="mb-30" src="<?php echo $story_area['imgae_1']['url'];?>" alt=""></div>
                        <div class="col-md-6"><img class="mb-30" src="<?php echo $story_area['imgae_2']['url'];?>" alt=""></div>
                        <div class="col-md-12">
                                <div class="mt-50 mt-sm-30 mb-50 mb-sm-30 center-text"> <h2><?php echo $story_area['story_title'];?></h2> </div>

                                <h5 class="center-text mb-50 mb-sm-30 plr-25">
                                    <?php echo $story_area['story_description'];?>
                                </h5>
                        </div>
                        <div class="col-md-6">
                        <?php echo $story_area['left'];?>

                                <p class="mb-15">
                                </p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                        <?php echo $story_area['right'];?>

                                <p class="mb-15">
                                </p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-30 mb-20">
                        <a href="#" class="btn-primaryc plr-25 mb-10 mlr-5"><b>SEE TODAYS MENU</b></a>
                        <a href="#" class="btn-primaryc secondary plr-50 mlr-5 mb-10"><b>ORDER NOW</b></a>
                </h6>

        </div><!-- container -->
    </section>


    <?php $review_section = get_field('review_section'); 
    if ($review_section){
        
        ?>

<section class="story-area bg-seller color-white pos-relative">
            <div class="pos-bottom triangle-up"></div>
            <div class="pos-top triangle-bottom"></div>
            <div class="container">
                    <div class="heading">
                            <img class="heading-img" src="images/heading_logo.png" alt="">
                            <h2>What Clients Say</h2>
                    </div>

                    <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3"
                        data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true" data-swpr-responsive="[1, 2, 2, 2]">

                            <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">

                            <?php foreach($review_section as $review):?>

                                    <div class="swiper-slide">
                                            <h4>
                                            <?php echo ($review['review_title']); ?>
                                            </h4>
                                            <p class="color-ash mb-50 mb-sm-30 mt-20"><?php echo ($review['review_content']); ?></p>
                                            <img class="circle-60 mb-20 " src="<?php echo($review['profile']['url']); ?>" alt="no img">
                                            <h6><b class="color-primary"><?php echo esc_html( $review['name']);?></b>,<b class="color-ash"><?php echo esc_html($review['role_']); ?></b>
                                            </h6>
                                            
                                    </div>
                        <?php endforeach;?>                                   
                            </div><!-- swiper-wrapper -->
                            <div class="swiper-pagination"></div>
                    </div><!-- swiper-container -->
            </div><!-- container -->            
</section>
<?php }?>




<?php $counter_section = get_field('counter_section');    
if ($counter_section){ ?>
<section class="counter-section section center-text" id="counter">
        <div class="container">
                <div class="row">
                <?php foreach($counter_section as $counter){?>
                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30 ">
                                        <i class="mlr-auto mb-30  <?php echo ($counter['icon_class']); ?>"></i>
                                        <h2><b><span class="counter-value" data-duration="400" data-count="<?php echo ($counter['count']); ?>">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b><?php echo ($counter['text']); ?></b></h5>
                                </div>
                        </div>       
                <?php }?>
                </div><!-- row-->
        </div><!-- container-->
</section>
<?php }?>

<?php get_footer();?>
