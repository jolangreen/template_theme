<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

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
                <?php
                while ( have_posts() ) : the_post();

                	get_template_part( 'template-parts/page/content', 'page' );

                	// If comments are open or we have at least one comment, load up the comment template.
                	if ( comments_open() || get_comments_number() ) :
                		comments_template();
                	endif;

                endwhile; // End of the loop.
                ?>
            </div><!-- .primary -->
            <div class="secondary col-md-4">
                <?php get_sidebar(); ?>
            </div><!-- .secondary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.container -->

<?php get_footer();
