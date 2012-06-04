<?php

get_header();

?>

    	<div class="wrap">

        	<div class="sub-page">

                <div class="bnr-about"><div></div></div>

                <!-- Page Contents -->
                <div id="about" class="about-page-content">

                    <h1 class="about-ttl fl"><?php print __( 'dm³ is a bespoke digital marketing agency', 'dm3' ) ?></h1>
                    <div class="vr vabout fl"><div></div></div>
                    <div class="con fl">

                         <?php if (have_posts()) : while (have_posts()) : the_post();?>

                        <div class="text">

                        	<?php the_content() ?>
	                        <?php edit_post_link('Edit page', '<p>', '</p>'); ?>

                        </div>

						<?php endwhile; endif; ?>

                    </div>

                    <div class="clr"></div>

                </div>
                <!-- /Page Contents -->

            </div>

        </div>

<?php get_footer(); ?>