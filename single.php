<?php
get_header('blog');
?>    

    <!-- Posts -->
    <div class="posts fl" role="main">

	<?php
    /* Run the loop to output the post.
     * If you want to overload this in a child theme then include a file
     * called loop-single.php and that will be used instead.
     */
    get_template_part( 'loop', 'single' );
    ?>

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