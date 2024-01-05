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
                                </div>
                </div>
        </div>
</section>

<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
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

<?php
    if (have_rows('seller_section')):
        while (have_rows('seller_section')): the_row();?>
            <section class="story-area bg-seller color-white pos-relative">
                <div class="pos-bottom triangle-up"></div>
                <div class="pos-top triangle-bottom"></div>
                <div class="container">
                    <?php
                        $best_seller_title = get_sub_field('best_seller_title');
                        $best_seller_icon = get_sub_field('best_seller_icon');

                        if ($best_seller_title):
                    ?>
                        <div class="heading">
                            <img class="heading-img" src="<?php echo esc_url($best_seller_icon['url']); ?>" alt="<?php echo esc_attr($best_seller_title); ?>">
                            <h2><?php echo esc_html($best_seller_title); ?></h2>
                        </div>
                    <?php endif; ?>

                    <?php
                    $categories = get_terms('category', array('hide_empty' => false));

                    if ($categories):
                        ?>
                        <div class="row">
                    <?php $categories = get_terms('category', array('hide_empty' => false)); 
                            $pizza_category = 'pizza';
                            $category_posts = get_posts(array(
                                    'post_type' => 'cars',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'slug',
                                            'terms'    => $pizza_category,
                                        ),
                                    ),
                            ));

                            foreach ($category_posts as $menu_post):
                            $seller_image = get_field('seller_image', $menu_post->ID);
                            $title = $menu_post->post_title;
                            $price = $menu_post->price;
                            $tags = wp_get_post_tags($menu_post->ID);
                            $tagname=$tags[0]->name;                        
                    ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="center-text mb-30">
                                    <div class="ïmg-200x mlr-auto pos-relative">
                                        <?php

                                            switch ($tagname):
                                            case 'OFFER':
                                                    ?>
                                                    <h6 class="ribbon-cont color-white"><div class="ribbon primary"></div><b><?php echo $tagname; ?></b></h6>
                                                    <?php
                                                    break;
                                            case 'SPECIALITY':
                                                    ?>
                                                    <h6  class="ribbon-cont color-white"><div class="ribbon secondary"></div><b><?php echo $tagname; ?></b></h6>
                                                    <?php
                                                    break;
                                            case 'PLUS SIZE':
                                                    ?>
                                                    <h6 class="ribbon-cont color-black"><div class="ribbon white"></div><b><?php echo $tagname; ?></b></h6>
                                                    <?php
                                                    break;
                                            default:
                                                    break;
                                            endswitch;
                                            ?>
                                            <img src="<?php echo esc_url($seller_image['url']); ?>" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <h5 class="mt-20"><?php echo esc_html($title); ?></h5>
                                    <h4 class="mt-5"><b>$<?php echo esc_html($price); ?></b></h4>
                                    </div>
                            </div>
                            <?php endforeach; ?>
                    </div><!-- row-->

                    <?php endif; ?>
                    <h6 class="center-text mt-40 mt-sm-20 mb-30">
                        <a href="#" class="btn-primaryc plr-25"><b>SEE TODAY'S MENU</b></a>
                    </h6>
                </div>
            </section>
        <?php endwhile;
    endif;
    ?>

<?php $food_item = get_field('food_menu'); 
?>

<section>
    <div class="container">
        <div class="heading">
            <img class="heading-img" src="<?php echo $food_item['icon']['url']; ?>" alt="icon">
            <h2><?php echo $food_item['title']; ?></h2>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <ul class="selecton brdr-b-primary mb-70">
                    <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
                    <?php
                    $categories = get_categories(array(
                        'taxonomy' => 'category',
                        'exclude' => get_cat_ID('uncategorized'),
                    ));

                    foreach ($categories as $category) :
                    ?>
                        <li><a href="#" data-select="<?php echo $category->slug; ?>"><b><?php echo $category->name; ?></b></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="row">
            <?php
            $menu_posts = get_posts(array('post_type' => 'cars'));
            $categories = get_terms('category', array('hide_empty' => false));   

            foreach ($categories as $category) :
            ?>
                    <?php
                    $category_posts = get_posts(array(
                        'post_type' => 'cars',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => $category->slug,
                            ),
                        ),
                    ));

                    foreach ($category_posts as $menu_post) :?>
                        <div class="col-md-6 food-menu <?php echo $category->slug; ?>">

                       <?php $thumbnail_url = get_the_post_thumbnail_url($menu_post->ID, 'thumbnail');
                    ?>
                        <div class="sided-90x mb-30">
                            <div class="s-left"><img class="br-3" src="<?php echo $thumbnail_url; ?>" alt="Menu Image"></div>
                            <div class="s-right">
                                <h5 class="mb-10"><b><?php echo $menu_post->post_title; ?></b><b class="color-primary float-right">$12.00</b></h5>
                                <p class="pr-70"><?php echo $menu_post->post_content;?></p>
                            </div>
                        </div>
                </div><!-- food-menu -->
                <?php endforeach; ?>

            <?php endforeach; ?>
        </div>
        <!--row-->

        <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="<?php echo $food_item['button_link']; ?>" class="btn-primaryc plr-25"><b><?php echo $food_item['button_text']; ?></b></a></h6>
    </div><!-- container -->
</section>

<?php get_footer();?>
