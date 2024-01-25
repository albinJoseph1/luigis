<?php
/* Template Name: About Us */
get_header();
$top_banner = get_field('top_banner'); 
if($top_banner){?>
<section class="bg-4 h-500x main-slider pos-relative">
    <div class="triangle-up pos-bottom"></div>
    <div class="container h-100">
        <div class="dplay-tbl">
            <div class="dplay-tbl-cell center-text color-white pt-90">
                <?php if ($top_banner['small_title']){ ?>
                    <h5><b> <?php echo $top_banner['small_title'];?> </b></h5>
                <?php } 
                if ($top_banner['main_title']){ ?>
                    <h2 class="mt-30 mb-15"><?php echo $top_banner['main_title'];?></h2>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } 

$story_area = get_field('story_area');
if($story_area){?>
<section class="story-area left-text center-sm-text">
    <div class="container">
        <div class="row">
            <?php if ($story_area['imgae_1']) { ?>
                <div class="col-md-6"><img class="mb-30" src="<?php echo $story_area['imgae_1']['url'];?>" alt="<?php echo $story_area['imgae_1']['alt'];?>"></div>
            <?php }
            if ($story_area['imgae_2']) { ?>
                <div class="col-md-6"><img class="mb-30" src="<?php echo $story_area['imgae_2']['url'];?>" alt="<?php echo $story_area['imgae_2']['alt'];?>"></div>
            <?php } ?>
            <div class="col-md-12">
                <?php if ($story_area['story_title']) { ?>
                    <div class="mt-50 mt-sm-30 mb-50 mb-sm-30 center-text">
                    <h2><?php echo $story_area['story_title'];?></h2>
                </div>
                <?php }
                if ($story_area['story_description']) { ?>
                <h5 class="center-text mb-50 mb-sm-30 plr-25">
                    <?php echo $story_area['story_description'];?>
                </h5>
                <?php } ?>
            </div>
            <?php if ($story_area['left']) { ?>
                <div class="col-md-6">
                    <?php echo $story_area['left'];?>
                </div>
            <?php }
            if ($story_area['right']) { ?>
                <div class="col-md-6">
                    <?php echo $story_area['right'];?>
                    <!-- <p class="mb-15"></p> -->
                </div>
            <?php } ?>
        </div>
        <?php $button_section = $story_area['button'];
        if ($button_section) { ?>
            <h6 class="center-text mt-40 mt-sm-30 mb-20">
            <?php foreach ($button_section as $button) { ?>
                <a href="<?php echo $button['button_link_and_text']['url']; ?>" class="<?php echo $button['class']; ?>"><b><?php echo $button['button_link_and_text']['title']; ?></b></a>
            <?php } ?>
            </h6>
        <?php } ?>
    </div><!-- container -->
</section>
<?php } 

$review_section = get_field('review_section');
if ($review_section){?>
    <section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
            <div class="heading">
                <img class="heading-img" src="images/heading_logo.png" alt="">
                <h2><?php echo get_field('review_section_title'); ?></h2>
            </div>
            <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500"
                data-swiper-margin="25" data-swiper-slides-per-view="3" data-swiper-breakpoints="true" data-scrollbar="true"
                data-swiper-loop="true" data-swpr-responsive="[1, 2, 2, 2]">
                <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">
                    <?php foreach($review_section as $review){?>
                    <div class="swiper-slide">
                        <?php 
                        if($review['review_title']){?>                        
                            <h4><?php echo $review['review_title'];?></h4>
                        <?php } 
                        if($review['review_content']){?>                        
                            <p class="color-ash mb-50 mb-sm-30 mt-20"><?php echo ($review['review_content']); ?></p>
                        <?php } 
                        if($review['profile']){?>   
                            <img class="circle-60 mb-20 " src="<?php echo($review['profile']['url']); ?>" alt="no img">
                        <?php } 
                        if($review['name']){?>   
                            <h6>
                                <b class="color-primary"><?php echo( $review['name']);?></b>
                                <?php if($review['name']){?>,   
                                    <b class="color-ash"><?php echo($review['role_']); ?></b>
                                <?php } ?>
                            </h6>
                        <?php } ?>
                    </div>
                    <?php }?>
                </div><!-- swiper-wrapper -->
                <div class="swiper-pagination"></div>
            </div><!-- swiper-container -->
        </div><!-- container -->
    </section>
<?php }

$counter_section = get_field('counter_section');    
if ($counter_section){ ?>
    <section class="counter-section section center-text" id="counter">
        <div class="container">
            <div class="row">
                <?php foreach($counter_section as $counter){?>
                    <div class="col-sm-6 col-md-3">
                        <?php if($counter['icon_class'] && $counter['text'] && $counter['count']){ ?>
                            <div class="mb-30 ">
                                <?php if($counter['icon_class']){ ?>
                                    <i class="mlr-auto mb-30  <?php echo ($counter['icon_class']); ?>"></i>
                                <?php }
                                if($counter['text'] && $counter['count']){ ?>
                                    <h2><b><span class="counter-value" data-duration="400"
                                                data-count="<?php echo ($counter['count']); ?>">0</span></b>
                                    </h2>
                                <?php }
                                if($counter['count']){ ?>
                                    <h5 class="semi-black"><b><?php echo ($counter['text']); ?></b></h5>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>
            </div><!-- row-->
        </div><!-- container-->
    </section>
<?php }?>

<?php get_footer();?>