<?php
get_header();

$cats = array( 
				'work-email', 
				'work-web',
				'work-seo',
				'work-ppc',
				'work-mobile',
				'work-display',
				'work-social-media',
			);

$cat = 'work-web';

if ( isset($_GET['cat']) && !empty($_GET['cat']) && in_array($_GET['cat'], $cats) )
{
	$cat = $_GET['cat'];
}

// Include Slider JS files
//wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js');
//wp_enqueue_script('ennui', get_template_directory_uri() . '/js/jquery.ennui.contentslider.js');
//wp_enqueue_script('work_slider', get_template_directory_uri() . '/js/work-slider.js');
wp_enqueue_script('jshowoff', get_template_directory_uri() . '/js/jquery.jshowoff.min.js');
wp_enqueue_script('work_slider', get_template_directory_uri() . '/js/work-slider.js');

// Include Slider CSS file(s)
//wp_enqueue_style( 'ennui', get_template_directory_uri() . '/css/jquery.ennui.contentslider.css' );

$the_query = new WP_Query( 'post_type=work&category_name=' . $cat . '&orderby=date&order=ASC' );

// Reset Post Data
wp_reset_postdata();

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

                                <?php 
                                while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>

                                    <div class="project" title="">

                                        <!-- <div><a href="<?php echo get_permalink(); ?>"><?php print_custom_field('thumb:to_image_tag'); ?></a></div> -->
                                        <div><?php print_custom_field('thumb:to_image_tag'); ?></div>

                                        <!-- <div class="name">Project: <h1><a href="<?php echo get_permalink(); ?>"><?php print the_title() ?></a></h1></div> -->
                                        <div class="name"><?php print __( 'Project', 'dm3' ) ?>: <h1><?php print the_title() ?></h1></div>

                                        <div class="fl prob">
                                            <h3><?php print __( 'The brief', 'dm3' ) ?></h3>
                                            <p><?php get_locale() == 'ar' ? print_custom_field('problemar') : print_custom_field('work_problem'); ?></p>
                                        </div>
                                        <div class="fl sol">
                                            <h3><?php print __( 'The solution', 'dm3' ) ?></h3>
                                            <p><?php get_locale() == 'ar' ? print_custom_field('solutionar') : print_custom_field('work_solution'); ?></p>
                                        </div>
                                        <div class="clr"></div>
										
										<?php edit_post_link('Edit this work', '<p>', '</p>'); ?>
                                    </div>

                                <?php endwhile; ?>

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