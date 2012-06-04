<?php

get_header();



$cats = array( 

			'food-and-beverage', 
			'education',
			'publishing',
			'leisure',
			'banking-and-finance',

		);



$cat = 'food-and-beverage';



if ( isset($_GET['cat']) && !empty($_GET['cat']) && in_array($_GET['cat'], $cats) )

{

	$cat = $_GET['cat'];

}



$the_query = new WP_Query( 'post_type=client&category_name=' . $cat . '&orderby=date&order=ASC' );



// Reset Post Data

wp_reset_postdata();



?>

    	<div class="wrap">



        	<div class="sub-page">



				<?php dm3_clients_menu(); ?>



                <div class="vr v500 fl"><div></div></div>



                <!-- Page Contents -->

                <div id="clients" class="page-content fr">



                    <table class="clients">

                    

                    	<tr>

                    

					<?php 

					$count = 1;

					

					while ( $the_query->have_posts() ) : $the_query->the_post();

					

						if ($count > 3)

						{

							$count = 1;

							?>

                            </tr><tr>

							<?php

						}

						?>

                        	<td><?php print_custom_field('client_logo:to_image_tag'); ?></td>

					

						<?php 

                        $count++;

					

					endwhile; ?>

                    

                    	</tr>

                    </table>



                </div>

                <!-- /Page Contents -->



                <div class="clr"></div>



            </div>



        </div>

<?php

get_footer();

?>