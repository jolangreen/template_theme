<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
						<?php endwhile; ?>

						<div class="pagination">
						    <?php 
						    // Pagination links (inside Functions.php) 
						    the_posts_pagination( array(
						    	'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						    	'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						    	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
						    ) );
						    ?>
						</div>

					<?php else : ?>
						<?php get_template_part( 'template-parts/post/content', 'none' ); ?>
					<?php endif; ?>

				</div><!-- .primary -->
			    <div class="secondary col-md-4">
			        <?php get_sidebar(); ?>
			    </div><!-- .secondary -->
			</div><!-- /.row -->
        </div><!-- /.container -->
	</section>

<?php get_footer();
