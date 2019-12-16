<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php bloginfo('template_directory'); ?>/favicon.ico" rel="icon" type="image/x-icon" />
<link href="<?php bloginfo('template_directory'); ?>/css/min/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/min/font-awesome.min.css" rel="stylesheet" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header
================================================== -->
<header>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <h1><a href="<?php echo home_url( '/' ); ?>" class="logo"></a></h1>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
               	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-header-menu', 'container' => 'ul', 'menu_class' => 'nav' ) ); ?>
                <?php //get_search_form(); ?>
            </div>
        </div>
    </nav>
</header>


<!-- Main Content
================================================== -->
<main id="main">
