<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

    <section class="content-section">
        <div class="row">
    		<div class="primary col-md-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article>
    	                <h2><?php the_title(); ?></h2>
    	                <?php the_content(); ?>
    	                <?php //comments_template(); ?>
                	</article>
                <?php endwhile; ?>
            </div><!-- .primary -->
            <div class="secondary col-md-4">
                <?php get_sidebar(); ?>
            </div><!-- .secondary -->
        </div><!-- /.row -->
    </section>

<?php get_footer(); ?>
