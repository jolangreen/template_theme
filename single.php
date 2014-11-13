<?php get_header(); ?>

    <section>
        <div class="container">
            <div class="row">
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
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php get_footer(); ?>
