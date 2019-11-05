<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section>
    <div class="container">
        <div class="row">
        	<div class="primary col-md-8">

    			<?php while ( have_posts() ) : the_post(); ?>

    				<?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
    				<?php 
	    				the_post_navigation( array(
                'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span>',
              ) );
    				?>
    				<?php 
	    				// If comments are open or we have at least one comment, load up the comment template.
	    				if ( comments_open() || get_comments_number() ) :
	    					comments_template();
	    				endif;
    				?>

    			<?php endwhile; ?>

    		</div><!-- .primary -->
            <div class="secondary col-md-4">
                <?php get_sidebar(); ?>
            </div><!-- .secondary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<?php get_footer();
