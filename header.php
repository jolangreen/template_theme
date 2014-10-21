<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css" />

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
               	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav' ) ); ?>
                <?php //get_search_form(); ?>
            </div>
        </div>
    </nav>
</header>


<!-- Main Content
================================================== -->
<section id="main">

