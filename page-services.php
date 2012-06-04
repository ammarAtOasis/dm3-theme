<?php

get_header();

?>

    	<div class="wrap">



        	<div class="sub-page">



				<?php dm3_services_menu(); ?>



                <div class="vr v500 fl"><div></div></div>



                <!-- Page Contents -->

                <div id="services" class="page-content fr">



                	<div class="bnr-services"></div>



                    <div class="con">



                    	<div class="fl"><h1 class="srvc-ttl"><?php print __( 'understanding &amp; engagement = results', 'dm3' ) ?></h1></div>

                        	

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        

                        <div class="txt fr">

                            <?php the_content(); ?>

                            <?php edit_post_link('Edit page', '<p>', '</p>'); ?>

                        </div>



                        <?php endwhile; endif; ?>



                        <div class="clr"></div>



                    </div>



                </div>

                <!-- /Page Contents -->



                <div class="clr"></div>



            </div>



        </div>

<?php

get_footer();

?>