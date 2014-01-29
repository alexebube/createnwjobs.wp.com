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
        
         <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" />
        <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
        <?php wp_head(); ?>
    </head>
    <body id="body">
        <div id="head-wrap">
        <div id="header" class="container">
            <a href="<?php bloginfo('url')?>"><h1>Alliance for Northwest Jobs & Exports</h1></a>
            <h2 class="head-desc">Will we bring thousands of new jobs here or will we let them pass us by?</h2>
        </div>
            <div id="slide-show" class="container">
                <!--<img src="<?php echo get_template_directory_uri();?>/assets/images/slide-image.PNG" class="img-responsive" />-->
                      <?php echo do_shortcode("[metaslider id=479]"); ?>
            </div><!--End of slide-show div-->
            <div id="nav-wrapper">
                <nav id="nav-wrap">
                     <a href="#" class="showMenu">Menu</a>
                     <?php wp_nav_menu( array(
                                'container'=>'',
				'theme_location' =>'primary',
                                'menu' => 'main menu',
				'menu_class'=>'links',
				)); ?>
                    <ul class="social-links">
				<li class="facebook"><a href="https://www.facebook.com/AllianceForNorthwestJobsExports">Facebook</a></li>
				<li class="twitter"><a href="https://twitter.com/CreateNWJobs">Twitter</a></li>
				<li class="youtube-black"><a href="http://www.youtube.com/user/CreateNWJobs">Youtube</a></li>
				<li class="google-plus"><a href="https://plus.google.com/107279081421460266821" rel="publisher">Google+</a></li>
			</ul>

                </nav><!--End of nav-wrap nav-->
            </div><!--End of nav-wrapper div-->
    </div><!--End of head-wrap div-->