<?php get_header(); ?>

		<div class="primary col-md-8">

			<h2><?php _e( 'Not found', 'twentythirteen' ); ?></h2>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- .primary -->
        <div class="secondary col-md-4">
            <?php get_sidebar(); ?>
        </div><!-- .secondary -->

<?php get_footer(); ?>