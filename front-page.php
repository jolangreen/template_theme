<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

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
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/headers/banner1.jpg">
                </div>
                <div class="item" >
                    <?php get_template_part( 'template-parts/header/header', 'image' ); ?>
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
                	<?php // Show the selected frontpage content.
                	if ( have_posts() ) :
                		while ( have_posts() ) : the_post();
                			get_template_part( 'template-parts/page/content', 'front-page' );
                		endwhile;
                	else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
                		get_template_part( 'template-parts/post/content', 'none' );
                	endif; ?>

                	<?php
                	// Get each of our panels and show the post data.
                	if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

                		/**
                		 * Filter number of front page sections in Twenty Seventeen.
                		 *
                		 * @since Twenty Seventeen 1.0
                		 *
                		 * @param $num_sections integer
                		 */
                		$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
                		global $twentyseventeencounter;

                		// Create a setting and control for each of the sections available in the theme.
                		for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
                			$twentyseventeencounter = $i;
                			twentyseventeen_front_page_section( null, $i );
                		}

                endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>
            </div><!-- .primary -->
            <div class="secondary col-md-4">
                <?php get_sidebar(); ?>
            </div><!-- .secondary -->
        </div><!-- /.row -->
    </section>


<?php get_footer();
