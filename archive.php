<?php
/**
 * The template for displaying archive pages
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
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
					<?php
				if ( have_posts() ) : ?>
					<h2 class="archive-title"><?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'twentyseventeen' ), get_the_date() );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'twentyseventeen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyseventeen' ) ) );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'twentyseventeen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyseventeen' ) ) );
						else :
							_e( 'Archives', 'twentyseventeen' );
						endif;
					?></h2>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

					the_posts_pagination( array(
						'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					) );

				else :

					get_template_part( 'template-parts/post/content', 'none' );

				endif; ?>


				</div><!-- .primary -->
		        <div class="secondary col-md-4">
		            <?php get_sidebar(); ?>
		        </div><!-- .secondary -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

<?php get_footer();
