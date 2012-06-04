<?php

get_header();

$the_query = new WP_Query( 'post_type=slider' );

// Reset Post Data

wp_reset_postdata();

?>



    	<!-- Home page -->

		<div id="slider-bg">

			<div id="slider-container">



				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div id="slider">

                    <ul>

                    <?php 

                    $photos = get_custom_field('slider_photo:to_array', 'to_image_tag'); 

//                     echo '<hr />' . count($photos) . '<hr />';

            

                    foreach ($photos as $photo)

                    {

                        echo '<li>'. $photo .'</li>' . PHP_EOL;

                    }

                    

                    ?>

                    </ul>

                </div>

				<?php endwhile; ?>



			</div>

		</div>

		<!-- /Home page -->



    	<div class="wrap slider-sh">



    		<div id="tp"></div>



    		<div class="hr home-hr"></div>



			<!-- Columns -->

			<div id="columns">





				<!-- Column1 -->

				<div id="col1" class="fl">

                

					<h3><?php print __( 'Why dm³', 'dm3' ) ?></h3>

					<div class="hr"></div>



                	<h2><?php 



					if (have_posts()) : while (have_posts()) : the_post();

						print the_content();

					endwhile;

					endif;



					?></h2>



				</div>

				<!-- /Column1 -->



				<!-- Column2 -->

				<div id="col2" class="fl">



					<h3><?php print __( 'Explore dm³', 'dm3' ) ?></h3>

					<div class="hr"></div>



					<div class="dm3-exp first">

						<a href="<?php echo get_permalink(7); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/dm3-dms.png" alt="Digital Media Strategy" title="Digital Media Strategy" class="exp-img" /></a>

						<h1><a href="<?php echo get_permalink(7); ?>"><?php print __( 'Digital Media Strategy', 'dm3' ) ?></a></h1>

					</div>



					<div class="dm3-exp">

						<a href="<?php echo qtrans_convertURL( get_permalink(27)); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/dm3-smm.png" alt="Social Media Management" title="Social Media Management" class="exp-img" /></a>

						<h1><a href="<?php echo qtrans_convertURL( get_permalink(27)); ?>"><?php print __( 'Social Media Management', 'dm3' ) ?></a></h1>

					</div>



				</div>

				<!-- /Column2 -->



				<!-- Column3 -->

				<div id="col3" class="fl">



					<h3><?php print __( 'See dm³', 'dm3' ) ?></h3>

					<div class="hr"></div>







					<?php

					// Show last projects

                    $the_query = new WP_Query( 

						array( 

							'post_type' => 'work',

							'orderby' => 'ID', 

							'order' => 'ASC',

							'post__in'  => array( 182, 195, 211 ) 

						) 

					);



                    // Reset Post Data

                    wp_reset_postdata();

					

					$count = 1;

					

					while ( $the_query->have_posts() ) : $the_query->the_post();
					
					$work_url = qtrans_convertURL( get_permalink());
					
					?>



					<div class="proj<?php echo $count == 1 ? ' first' : ''?>">

						<a href="<?php echo $work_url; ?>"><?php print_custom_field('home_thumb'); ?></a>

						<div class="info">

							<h4><a href="<?php echo $work_url; ?>"><?php print __( get_custom_field('work_type'), 'dm3' ); ?></a></h4>
							<p><?php the_title() ?></p>

						</div>

						<div class="clr"></div>

					</div>



					<?php 

                    $count++;

                    endwhile; ?>


				</div>

				<!-- /Column3 -->



				<div class="clr"></div>



			</div>

			<!-- /Columns -->



        </div>

<?php



// get_sidebar();

get_footer();

?>