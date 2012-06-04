<?php

get_header();

?>

    	<div class="wrap">



        	<div class="sub-page">



				<?php dm3_works_menu(); ?>



                <div class="vr v500 fl"><div></div></div>



                <!-- Page Contents -->

                <div id="work" class="page-content fr">



                    <div id="work-slider" class="clr">

<!--                        <div class="cs_wrapper">

                            <div class="cs_slider"> -->



                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



                                    <div class="project" title="">

        

                                        <div><?php print_custom_field('thumb:to_image_tag'); ?></div>

        

                                        <div class="name">Project: <h1><?php print the_title() ?></h1></div>

        

                                        <div class="fl prob">

                                            <h3><?php print __( 'The brief', 'dm3' ) ?></h3>

                                            <p><?php get_locale() == 'ar' ? print_custom_field('problemar') : print_custom_field('work_problem'); ?></p>

                                        </div>

                                        <div class="fl sol">

                                            <h3><?php print __( 'The solution', 'dm3' ) ?></h3>

                                            <p><?php get_locale() == 'ar' ? print_custom_field('solutionar') : print_custom_field('work_solution'); ?></p>

                                        </div>

                                        <div class="clr"></div>



                                    </div>



                                <?php endwhile; endif; ?>



		                        <?php edit_post_link('Edit page', '<p>', '</p>'); ?>



                            <!--</div><!-- End cs_slider -->

                        </div><!-- End cs_wrapper -->

                    </div><!-- End contentslider -->



                </div>

                <!-- /Page Contents -->



                <div class="clr"></div>



            </div>



        </div>

<?php

get_footer();

?>