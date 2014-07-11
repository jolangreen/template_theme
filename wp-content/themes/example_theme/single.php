<?php get_header(); ?>

	<div class="primary col-md-8">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- .primary -->
        <div class="secondary col-md-4">
            <?php get_sidebar(); ?>
        </div><!-- .secondary -->
<?php get_footer(); ?>