<?php

get_header();

?>

    	<div class="wrap">



        	<div class="sub-page">

            

				<?php dm3_services_menu(); ?>



                <div class="vr v500 fl"><div></div></div>



                <!-- Page Contents -->

                <div id="services" class="page-content fr">



				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                	<div><?php print_custom_field('service_img:to_image_tag'); ?></div>



                    <div class="con">

                    	<div class="fl icon"><?php print_custom_field('side_img'); ?></div>



                            <div class="txt fr">

                            	<h1 class="ttl2"><?php get_locale() == 'ar' ? print_custom_field('service_title_ar') : print_custom_field('service_title'); ?></h1>

	                            <?php the_content(); ?>

	                            <?php edit_post_link('Edit page', '<p>', '</p>'); ?>

                            </div>



                        <div class="clr"></div>

                    </div>



				<?php endwhile; endif; ?>

                </div>

                <!-- /Page Contents -->



                <div class="clr"></div>



            </div>



        </div>

<?php

get_footer();

?>