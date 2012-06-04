<?php



if ( function_exists('register_sidebar') )
    register_sidebar();


/*
 * Arabic Translation
 * By: Ammar Alrefai
 */
load_theme_textdomain( 'dm3', TEMPLATEPATH.'/languages' );


/* Registering for menus */

register_nav_menus( array(

	'ar_nav'           => 'Top Nav menu',

	'services_nav'     => 'Services List Navigation Menu',
	'clients_nav'      => 'Clients List Navigation Menu',
	'works_nav'        => 'Works List Navigation Menu',
	'contact_nav'      => 'Contact List Navigation Menu',

	'services_nav_ar'     => 'Arabic Services List Navigation Menu',
	'clients_nav_ar'      => 'Arabic Clients List Navigation Menu',
	'works_nav_ar'        => 'Arabic Works List Navigation Menu',
	'contact_nav_ar'      => 'Arabic Contact List Navigation Menu',

));





if (function_exists('register_sidebar')) {

	register_sidebar(array(

		'name'=> 'Right Sidebar',
		'id' => 'right_sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',

	));



	// First HOME column

	register_sidebar(array(

		'name'=> 'HOME Column 1',
		'id' => 'col1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',

	));



	// Footer contact numbers
	register_sidebar(array(

		'name'=> 'Footer contact numbers',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<div class="fl call">',
		'after_title' => '</div>',

	));





}



// dynamic_sidebar('HOME Column 1');





/**

 * Services list menu

 * Draws side menu links for our services

 */

function dm3_services_menu()
{

	$where = get_locale() == 'ar' ? 'services_nav_ar' : 'services_nav';

	wp_nav_menu(array(
		'theme_location' => $where,
		'container'      => '',
		'container_id'   => '',
		'menu_class'     => 'side-menu fl'
	));

}



/**

 * Clients list menu

 */

function dm3_clients_menu()
{

	$where = get_locale() == 'ar' ? 'clients_nav_ar' : 'clients_nav';

	wp_nav_menu(array(
		'theme_location' => $where,
		'container'      => '',
		'container_id'   => '',
		'menu_class'     => 'side-menu fl'
	));

}



function dm3_ar_top_nav_menu()
{

	wp_nav_menu(array(
		'theme_location'   => 'ar_nav',
		'container'        => 'div',
		'container_class'  => 'nav-menu fr',
		'menu_class'       => ''
	));

}


function dm3_ar_bottom_nav_menu()
{

	wp_nav_menu(array(
		'theme_location'   => 'ar_nav',
		'container'        => 'div',
		'container_class'  => 'fl',
		'menu_class'       => ''
	));

}


/**

 * Works list menu

 */

function dm3_works_menu()
{

	$where = get_locale() == 'ar' ? 'works_nav_ar' : 'works_nav';

	wp_nav_menu(array(
		'theme_location' => $where,
		'container'      => '',
		'container_id'   => '',
		'menu_class'     => 'side-menu fl'
	));

}


/**

 * Contact Us list menu

 * Draws side menu links for Contact Us page

 */

function dm3_contact_menu()
{
	$where = get_locale() == 'ar' ? 'contact_nav_ar' : 'contact_nav';

	wp_nav_menu(array(
		'theme_location' => $where,
		'container'      => '',
		'container_id'   => '',
		'menu_class'     => 'side-menu contact-menu fl'
	));

}







/**

 * Prints HTML with meta information for the current post-date/time and author.

 * Create your own twentyeleven_posted_on to override in a child theme

 *

 */

function dm3_posted_on() {

	printf( __( '<div class="author-date"><span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span> | <span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a></span></div>', 'dm3' ),

		esc_url( get_permalink() ),

		esc_attr( get_the_time() ),

		esc_attr( get_the_date( 'c' ) ),

		esc_html( get_the_date() ),

		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),

		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),

		get_the_author()

	);

}





/*

 * Add support for post thumbnail

 */

if ( function_exists( 'add_theme_support' ) ) { 

  add_theme_support( 'post-thumbnails', array( 'post' ) ); 

}





/**

 * Search form for Blog

 */

function dm3_blog_search_form( $form ) {



    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >'.

			'<input type="text" value="' . get_search_query() . '" name="s" id="s" />'.

			'<input type="submit" id="searchsubmit" value="" />'.

			'</form>';



    return $form;

}



add_filter( 'get_search_form', 'dm3_blog_search_form' );





if ( ! function_exists( 'dm3_comment' ) ) :

/**

 * Template for comments and pingbacks.

 *

 * To override this walker in a child theme without modifying the comments template

 * simply create your own dm3_comment(), and that function will be used instead.

 *

 * Used as a callback by wp_list_comments() for displaying the comments.

 *

 * @since Twenty Ten 1.0

 */

function dm3_comment( $comment, $args, $depth ) {

	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :

		case '' :

	?>

	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

		<div id="comment-<?php comment_ID(); ?>">



		<div class="vcard fl">

			<?php echo get_avatar( $comment, 40 ); ?>

		</div><!-- .comment-author .vcard -->



		<div class="fl cmnt-txt">

            <div class="comment-meta commentmetadata">

				<div class="comment-author"><?php printf( __( '%s', 'dm3' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></div>



				<?php if ( $comment->comment_approved == '0' ) : ?>

                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'dm3' ); ?></em>

                    <br />

                <?php endif; ?>

    

                <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">



                <div class="comment-date"><?php

                    /* translators: 1: date, 2: time */

                    printf( __( '%1$s at %2$s', 'dm3' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'dm3' ), ' ' );

                ?></div>

                

            </div><!-- .comment-meta .commentmetadata -->



            <div class="comment-body"><?php comment_text(); ?></div>



            <div class="reply">

                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

            </div><!-- .reply -->



		</div>

		<div class="clr"></div>





        

	</div><!-- #comment-##  -->



	<?php

			break;

		case 'pingback'  :

		case 'trackback' :

	?>

	<li class="post pingback">

		<p><?php _e( 'Pingback:', 'dm3' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'dm3' ), ' ' ); ?></p>

	<?php

			break;

	endswitch;

}

endif;


/* Translation */
function translate_title($title) {
 return __($title);
}
add_filter('widget_title', translate_title);

/*
 * Change Lang block
 */
function change_lang_block()
{

	if (get_locale() != 'ar')
	{
		$lang = 'ar';
		$lang_txt = 'العربية';
	}
	else
	{
		$lang = 'en';
		$lang_txt = 'English';
	}
	
	echo '<div id="lang-box">' . PHP_EOL .
		 '<a href="' . qtrans_convertURL('', $lang) . '">' . $lang_txt . '</a>' . PHP_EOL .
		 '</div>';

}
