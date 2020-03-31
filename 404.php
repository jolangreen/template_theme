<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="primary col-md-12">
                <div class="page-wrapper">
                    <h2><?php _e( '404 ERROR: PAGE NOT FOUND', 'twentyseventeen' ); ?></h2>
                    <p><?php _e( 'We&rsquo;re sorry, but the page you&rsquo;re looking for can&rsquo;t be found.', 'twentyseventeen' ); ?></p>
                    <p>You might want to head to our <a href="<?php echo home_url( '/' ); ?>">Home Page</a> to see if you can find what you are looking for from there.</p>
                    
                    <p><small>Please report any broken links to the <a href="<?php echo home_url( '/' ); ?>">Team</a>.</p>

                    <?php //get_search_form(); ?>
                </div><!-- .page-wrapper -->
            </div><!-- .primary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<?php get_footer();
