

    </div>

    <!-- /Content -->



    <!-- Footer -->

    <div id="footer">

    	<div class="wrap">

            <div class="contact fl">

                <?php 
				dynamic_sidebar('Footer contact numbers'); ?>

				<div class="clr"></div>

            </div>

            <div class="secondary fl">

				<?php

                if (get_locale() == 'ar')
				
				{
				
					dm3_ar_bottom_nav_menu();
				
				}
				else
				{
					
					wp_page_menu(
						array(
						   'include'        => '5,7,12,29,16',
						   'show_home'      => __( 'Home', 'dm3'),  
						   'sort_column'    => 'menu_order',  
						   'menu_class'     => 'fl'  
						)
					);
				}

                ?>

                <p class="copy fl"><?php print __( 'Copyright', 'dm3' ) ?> &copy; 2012 dm³</p>

                <div class="clr"></div>

            </div>

            <div class="clr"></div>

        </div>

    </div>

    <!-- /Footer -->

</div>

<!-- /Container -->

<?php wp_footer(); ?>

</body>
</html>