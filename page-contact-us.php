<?php

get_header();

?>

    	<div class="wrap">



        	<div class="sub-page">



               <?php dm3_contact_menu(); ?>



                <div class="vr v500 fl"><div></div></div>



                <!-- Page Contents -->

                <div id="about" class="page-content fr">



                	<div class="bnr-contact"></div>



                    <div class="con">

                    	<div class="fl"><h1 class="ttl"><?php print __( 'Share a thought', 'dm3' ) ?></h1></div>

                        

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="txt contact-details fr">



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