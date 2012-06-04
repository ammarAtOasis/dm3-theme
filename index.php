<?php
get_header('blog');
?>    
                    
    <!-- Posts -->
    <div class="posts fl">

    <?php if ( have_posts() ) : ?>

        <?php //twentyeleven_content_nav( 'nav-above' ); ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

        <?php endwhile; ?>

        <?php //twentyeleven_content_nav( 'nav-below' ); ?>

    <?php else : ?>

        <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php _e( 'Nothing Found', 'dm3' ); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'dm3' ); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-0 -->

    <?php endif; ?>


    </div>
    <!-- /Posts -->

    <!-- Side Bar -->
    <div class="side-bar fr">
    <?php get_sidebar(); ?>
    
    
    </div>
    <!-- /Side Bar -->

    <div class="clr"></div>

<?php
get_footer('blog');
?>