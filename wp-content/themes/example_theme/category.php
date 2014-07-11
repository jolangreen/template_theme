<?php get_header(); ?>

	<div class="primary col-md-8">

		<?php if ( have_posts() ) : ?>
				<h2 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h2>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>

			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- .primary -->
        <div class="secondary col-md-4">
            <?php get_sidebar(); ?>
        </div><!-- .secondary -->
<?php get_footer(); ?>