<?php
get_header();
?>    
    	<!-- Blog -->
        <div id="blog">
        
        	<div class="wrap-blog">
            
            	<div class="blog-content">
    
                    <!-- Blog Header -->     
                    <div class="header">
                    
                        <!-- Nav -->
                        <div class="nav fl">
                        
                            <ul class="fl">
                        
                            <?php
                            wp_list_categories( array(
                                    'child_of'    => 22,
                                    'title_li'    => '',
                                    'hide_empty'  => 0,
                                    'orderby'     => 'ID',
                                    'order'       => 'ASC',
                                )
                            );
                            ?>
                            
                            </ul>
                            
                            <h3 class="fr"><?php print __( 'DIGITAL Media, Marketing &amp; Monitoring', 'dm3' ) ?></h3>
                            <div class="clr"></div>
                            
                        </div>
                        <!-- /Nav -->

                        <div class="fr blog-logo"><a href="<?php echo get_page_link(201); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-logo.png" alt="DM3 | DIGITAL Media, Marketing &amp; Monitoring" title="DM3 | DIGITAL Media, Marketing &amp; Monitoring" /></a></div>
                        <div class="clr"></div>

                        <!-- Social & Search -->
                        <div class="social-search">
                        
                            <ul class="sn">
                            
                            	<li class="ico fb"><a href="http://www.facebook.com/pages/Digital-Media-Marketing-Monitoring/152882908155792" title="Facebook"></a></li>
                            	<li class="ico tw"><a href="http://twitter.com/#!/DMMM3" title="Twitter"></a></li>
                            	<li class="ico li"><a href="http://www.linkedin.com/company/dm3" title="LinkedIn"></a></li>
                            	<li class="ico rss"><a href="<?php print bloginfo('rss_url'); ?>" title="<?php print __( 'Subscribe via RSS', 'dm3' ) ?>"></a></li>
                            </ul>

                            <div class="search-form"><?php get_search_form( true ); ?></div>
                            <div class="clr"></div>
                        </div>
                        <!-- /Social & Search -->
        
                    </div>
                    <!-- /Blog Header -->     
        
        
                    <!-- Blog The Loops -->
                    <div class="cont">