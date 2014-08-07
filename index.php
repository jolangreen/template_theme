<?php get_header(); ?>

	<div class="primary col-md-8">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<div class="pagination">
			    <?php html5wp_pagination(); // Pagination links (inside Functions.php) ?>
			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- .primary -->
    <div class="secondary col-md-4">
        <?php get_sidebar(); ?>
    </div><!-- .secondary -->

<?php get_footer(); ?>