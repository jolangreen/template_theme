<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- bower:css -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.css" />
<!-- endbower -->

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

<!-- Banner
================================================== -->
<?php if(is_front_page()){ ?>
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
<?php } else { ?>
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
<?php } ?>

<!-- Main Content
================================================== -->
<section id="main">
