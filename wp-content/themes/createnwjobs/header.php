<!DOCTYPE html>
    <!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?> style="margin-top: 0px !important;">
<!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="The Alliance for Northwest Jobs and Exports supports new export terminals which will create jobs and bring new tax revenue to Northwest communities." />
	<meta name="keywords" content="coal exports, exports, northwest alliance for jobs and exports, washington state, oregon state, create jobs, new jobs, community investment, tax revenue, expanding trade, improve trade industry, coal trains, coal exports, washington coal export terminals, oregon coal export terminals, export terminals, new jobs, jobs in the northwest, investment" />
        <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?> | <?php bloginfo('description'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" />
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" />
        <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
        <?php wp_head(); ?>
    </head>
    <body class="body1">
        <div id="head-wrap" class="head-wrap1">
        <div id="header" class="container">
          <a href="<?php bloginfo('url')?>"><h1>Alliance for Northwest Jobs & Exports</h1></a>
          <h2 class="head-desc">
              <?php 
                if (is_category()){
                    echo single_cat_title();
                }  else {
                    echo get_the_title();
                }
              ?>
          </h2> 
        </div>
        <div id="nav-wrapper" class="nav-wrapper">
                <nav id="nav-wrap" class="nav-wrap">
                    <a href="#" class="showMenu">Menu</a>
                     <?php wp_nav_menu( array(
                                'container'=>'',
				'theme_location' =>'primary',
                                'menu' => 'main menu',
				'menu_class'=>'links',
				)); ?>
                    <ul class="social-links">
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="youtube-black"><a href="#">Youtube</a></li>
				<li class="google-plus"><a href="#" rel="publisher">Google+</a></li>
			</ul>

                </nav><!--End of nav-wrap nav-->
            </div><!--End of nav-wrapper div-->
            <div id="slide-show" class="container no-box">
			
            </div><!--End of slide-show div-->       
    </div><!--End of head-wrap div-->