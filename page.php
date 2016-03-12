<?php get_header(); ?>

    <section class="page-intro">
        <div class="tint">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Page Title</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumb"><a href="<?php echo home_url( '/' ); ?>">Home</a> / <span class="active">About</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
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
        </div><!-- /.container -->
    </section><!-- /.container -->

<?php get_footer(); ?>
