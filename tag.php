<?php get_header(); ?>

	<section>
		<div class="container">
          	<div class="row">
				<div class="primary col-md-8">

					<?php if ( have_posts() ) : ?>
							<h2 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'twentythirteen' ), single_tag_title( '', false ) ); ?></h2>

							<?php if ( tag_description() ) : // Show an optional tag description ?>
							<div class="archive-meta"><?php echo tag_description(); ?></div>
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
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php get_footer(); ?>
