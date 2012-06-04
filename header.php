<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta property="fb:page_id" content="152882908155792" />

<title><?php wp_title(''); ?></title>

<style type="text/css" media="screen">
@import url("<?php bloginfo("stylesheet_url"); ?>");
<?php if ( get_locale() == 'ar' ) : ?>@import url("<?php echo get_template_directory_uri(); ?>/css/ar.css");<?php endif; ?>
<?php if ( !is_front_page() ) : ?>@import url("<?php echo get_template_directory_uri(); ?>/css/jflow.css");<?php endif; ?>
</style>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/easySlider1.7.js"></script>
<?php // if ( is_home() || is_front_page() ) : ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php 
// endif;

if ( !is_front_page() ) : ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jflow.plus.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/latest-news-slider.js"></script>
<?php endif; ?>


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>

<body>

<!-- Container -->
<div id="container">

    <!-- DM3 Main Nav -->
    <div id="dm3-nav">

        <div class="wrap">
            <div class="logo fl"></div>

            <ul class="fl">

				<?php if ( !is_home() && in_array( get_post_type(), array('page', 'service', 'work') )  )
				{
					$dm3_link   = '<li class="dm3 active">dm³ Agency</li>';
					$blog_link  = '<li class="blog"><a href="http://www.dm-3.com/blog/">dm³ Blog</a></li>';
				}
				else
				{
					$dm3_link   = '<li class="dm3"><a href="http://www.dm-3.com">dm³ Agency</a></li>';
					$blog_link  = '<li class="blog active">dm³ Blog</li>';
				}
				?>

                <?php print $dm3_link ?>
                <li class="dmi"><a href="http://dmime.com">dm³ Education</a></li>
<!--                <li class="sm4b"><a href="#SM4B">dm³ Training</a></li> -->
                <?php print $blog_link ?>

            </ul>
            
        </div>

    </div>
    <div class="clr"></div>
    <!-- /DM3 Main Nav -->

	<?php if ( !is_home() && in_array( get_post_type(), array('page', 'service', 'work') )  ) : ?>
    <!-- Header -->
    <div id="header">

    	<div class="wrap">

            <!-- Logo -->
            <div id="logo"><a href="<?php echo esc_url( qtrans_convertURL( home_url( '/' ))); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/dm3-logo.png" alt="DM3 | DIGITAL Media, Marketing &amp; Monitoring" title="DM3 | DIGITAL Media, Marketing &amp; Monitoring" /></a></div>
            <!-- /Logo -->

            <!-- Header Content -->
            <div class="con fr">

                 <!-- Social -->
                <div id="social">
                    <a href="http://twitter.com/#!/DMMM3" title="Follow @DMMM3" class="tw fr social"><span></span></a>
                    <a href="http://www.facebook.com/pages/Digital-Media-Marketing-Monitoring/152882908155792" title="Facebook.com/Digital.M3" class="fb fr social"><span></span></a>
                    <a href="http://linkedin.com/company/dm3" title="LinkedIn DM3" class="li fr social"><span></span></a>
                    
		<?php change_lang_block() ?>
		
                    <!-- <div id="in"><script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/FollowCompany" data-id="2538087" data-counter="none"></script></div> -->

                </div>
                <!-- /Social -->

                <!-- Slogan -->
                <div id="slogan" class="clr fl"><h1><span class="b">DIGITAL</span> Media, Marketing &amp; Monitoring</h1></div>
                <!-- /Slogan -->

                <!-- Navigation -->
                <?php 
				
				if (get_locale() == 'ar')
				
				{
				
					dm3_ar_top_nav_menu();
				
				}
				else
				{
					
					wp_page_menu(
						array(
						   'include'        => '5,7,12,29,16',
						   'show_home'      => __( 'Home', 'dm3'),  
						   'sort_column'    => 'menu_order',  
						   'menu_class'     => 'nav-menu fr'  
						)
					);
				}
				
				 ?>
                <!-- /Navigation -->

                <div class="clr"></div>

            </div>
            <!-- /Header Content -->

            <div class="clr"></div>

        </div>

    </div>
    <!-- /Header -->
    <?php endif; ?>

    <!-- Content -->
    <div id="content">