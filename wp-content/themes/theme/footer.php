                <?php $footer = get_field('footer', 'option'); ?>
                <footer class="pb-50  pt-70 pos-relative">
                        <div class="pos-top triangle-bottom"></div>
                        <div class="container-fluid">
                                <?php if (has_custom_logo()) : ?>
                                        <a href="#"><?php the_custom_logo(); ?></a>
                                <?php endif;                            
                                if ($footer['address_field']['title'] && $footer['address_field']['title_value']) { ?>
                                        <div class="pt-30">
                                                <p class="underline-secondary"><b><?php echo $footer['address_field']['title']; ?></b></p>
                                                <p><?php echo $footer['address_field']['title_value']; ?></p>
                                        </div>
                                <?php } 
                                if ($footer['contact_field']['title'] && $footer['contact_field']['title_value']) { ?>
                                        <div class="pt-30">
                                                <p class="underline-secondary mb-10"><b><?php echo $footer['contact_field']['title']; ?></b></p>
                                                <a href="tel:+53 345 7953 32453 "><?php echo $footer['contact_field']['title_value']; ?></a>
                                        </div>
                                <?php } 
                                if ($footer['email_field']['title' ]&& $footer['email_field']['title_value']) { ?>
                                        <div class="pt-30">
                                                <p class="underline-secondary mb-10"><b><?php echo $footer['email_field']['title']; ?></b></p>
                                                <a href="mailto:yourmail@gmail.com"><?php echo $footer['email_field']['title_value']; ?></a>
                                        </div>
                                <?php } 
                                if ($footer['icon_set']){ ?>
                                        <ul class="icon mt-30">                             
                                                <?php foreach ($footer['icon_set'] as $icon){ 
                                                        if($icon['icon_link']['url'] && $icon['icon_class_name']) ?>
                                                        <li><a href="<?php echo $icon['icon_link']['url']; ?>"><i class="<?php echo $icon['icon_class_name']; ?>"></i></a></li>
                                                <?php } ?>
                                        </ul>
                                <?php } 
                                if ($footer['copy_right']){ ?>
                                        <p class="color-light font-9 mt-50 mt-sm-30">
                                                <?php echo  $footer['copy_right']['right']; ?>                
                                                <a href="<?php echo  $footer['copy_right']['link1']['url']; ?>" target="_blank"><?php echo  $footer['copy_right']['link1']['title']; ?>
                                                &nbsp;
                                                <a href="<?php echo  $footer['copy_right']['link2']['url']; ?>" target="_blank"><?php echo  $footer['copy_right']['link2']['title']; ?>
                                        </p>
                                <?php } ?>
                        </div>
                </footer>
                <?php wp_footer();?>
        </body>
</html>