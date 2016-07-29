<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-form pull-right" id="searchform" method="get">
    <input type="text" placeholder="Search Keyword" id="s" name="s" value="<?php echo get_search_query(); ?>" class="field input-medium search-query">
    <input type="submit" class="search-submit" value="SEARCH">
</form>

