<?php
/* Template Name: Contact */
get_header();

$contact_page_top_banner = get_field('contact_page_top_banner'); 
if ($contact_page_top_banner['main_title']){?>
        <section class="bg-6 h-500x main-slider pos-relative">
            <div class="triangle-up pos-bottom"></div>
            <div class="container h-100">
                <div class="dplay-tbl">
                    <div class="dplay-tbl-cell center-text color-white pt-90">
                        <h5><b> <?php echo $contact_page_top_banner['small_title'];?> </b></h5>
                        <h2 class="mt-30 mb-15"><?php echo $contact_page_top_banner['main_title'];?></h2>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>
<?php }

$contact_section = get_field('contact_section'); 
$message_section = get_field('message_section'); 
if ($contact_section['section_title']){?>
    <section class="story-area left-text center-sm-text">
        <div class="container">
            <div class="heading">
                <img class="heading-img" src="images/heading_logo.png" alt="">
                <h2><?php echo $contact_section['section_title']; ?></h2>
                <h5 class="mt-10 mb-30"><?php echo $contact_section['sub_title']; ?></h5>
                <p class="mx-w-700x mlr-auto"><?php echo $contact_section['description']; ?></p>
            </div>
            <form class="form-style-1 placeholder-1">                        
                <?php echo do_shortcode('[contact-form-7 id="8e210e6" title="Contact form 1"]'); ?>
            </form>
        </div><!-- container -->
    </section>
<?php }?>

<?php get_footer();?>
