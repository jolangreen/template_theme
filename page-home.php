<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>


<!-- Banner
================================================== -->

    <section id="banner">
        <div id="myCarousel" class="carousel slide">
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol> -->
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php bloginfo('template_directory'); ?>/images/headers/banner1.jpg">
                </div>
                <div class="item" >
                    <img src="<?php bloginfo('template_directory'); ?>/images/headers/banner2.jpg">
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </section>

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
