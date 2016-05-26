<?php get_header(); ?>

	<section>
		<div class="container">
          	<div class="row">
                <div class="primary col-md-8">

        			<div class="page-wrapper">
        				<div class="page-content">
        					<h2><?php _e( '404 ERROR: PAGE NOT FOUND', 'twentythirteen' ); ?></h2>
        					<p><?php _e( 'We&rsquo;re sorry, but the page you&rsquo;re looking for can&rsquo;t be found.', 'twentythirteen' ); ?></p>
        					<p>You might want to head to our <a href="<?php echo home_url( '/' ); ?>">Home Page</a> to see if you can find what you are looking for from there.</p>
        					
        					<p><small>Please report any broken links to the <a href="<?php echo home_url( '/' ); ?>">The Team</a>.</p>

        					<?php get_search_form(); ?>
        				</div><!-- .page-content -->
        			</div><!-- .page-wrapper -->

        		</div><!-- .primary -->
                <div class="secondary col-md-4">
                    <?php get_sidebar(); ?>
                </div><!-- .secondary -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php get_footer(); ?>
