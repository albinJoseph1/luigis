<?php $con_footer = get_field('footer', 'option'); ?>
<footer class="pb-50  pt-70 pos-relative">
        <div class="pos-top triangle-bottom"></div>
        <div class="container-fluid">
                <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo-white.png" alt="Logo"></a>

                <div class="pt-30">
                
                        <p class="underline-secondary"><b><?php echo $con_footer['address_field']['title']; ?></b></p>
                        <p><?php echo $con_footer['address_field']['title_value']; ?></p>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b><?php echo $con_footer['contact_field']['title']; ?></b></p>
                        <a href="tel:+53 345 7953 32453 "><?php echo $con_footer['contact_field']['title_value']; ?></a>
                </div>

 
                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b><?php echo $con_footer['email_field']['title']; ?></b></p>
                        <a href="mailto:yourmail@gmail.com"><?php echo $con_footer['email_field']['title_value']; ?></a>
                </div>


                <?php var_dump($con_footer['icon_set']); ?>
                <?php if ($con_footer['icon_set']): ?>
                        here
                        <ul class="icon mt-30">
                                <?php foreach ($con_footer['icon__set'] as $icon): ?>
                                <?php if (isset($icon['icon_link']['url'])): ?>
                                        <li>4
                                        <a href="<?php echo esc_url($icon['icon_link']['url']); ?>"><?php echo esc_html($icon['icon_link']['title']); ?></a>
                                        </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                        </ul>
                <?php endif; ?>





                <?php if ($con_footer['icon__set']): ?>
                        <ul class="icon mt-30">
                                
                        <?php //var_dump($con_footer['icon__set']);
                        while (have_rows($con_footer['icon__set'])): the_row(); 
                                
                                ?>
                                <!--<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="ion-social-vimeo"></i></a></li>-->
                        </ul>
                        <?php endwhile; ?>
                <?php endif; ?>

                <p class="color-light font-9 mt-50 mt-sm-30">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib --- Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a></a>
</p>
        </div><!-- container -->
</footer>

<!-- SCIPTS -->


<?php wp_footer();?>

</body>
</html>