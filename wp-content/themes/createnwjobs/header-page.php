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
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
        <?php wp_head(); ?>
    </head>
    <?php global $p; $p = 105; if(is_page($p)){?>
        <body id="body">
         <div id="head-wrap" class="head-wrap2">
    <?php }  else { ?>
       <body class="body1">  
       <div id="head-wrap" class="head-wrap1">
     <?php }?>
        <div id="header" class="container">
           <a href="<?php bloginfo('url')?>"><h1>Alliance for Northwest Jobs & Exports</h1></a>
           <?php global $post;
                    if ( is_page() && $post->post_parent ) {?>
           <h3 class="head-desc"><?php echo get_the_title($post->post_parent); ?></h3>
           <?php  } else { ?>
                <h3 class="head-desc"><?php echo get_the_title(); ?></h3>
                 <?php } ?>
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
				<li class="facebook"><a href="https://www.facebook.com/AllianceForNorthwestJobsExports">Facebook</a></li>
				<li class="twitter"><a href="https://twitter.com/CreateNWJobs">Twitter</a></li>
				<li class="youtube-black"><a href="http://www.youtube.com/user/CreateNWJobs">Youtube</a></li>
				<li class="google-plus"><a href="https://plus.google.com/107279081421460266821" rel="publisher">Google+</a></li>
			</ul>
                </nav><!--End of nav-wrap nav-->
            </div><!--End of nav-wrapper div-->
            <div id="<?php if(($p === 105) && is_page($p)): echo "slide-show3"; else: echo "slide-show2";endif;?>" class="container no-box">
                <?php if(is_page($p)){?>
                    <div>
                <?php } else { ?>
                    <div class="bg">
                <?php } ?>
                    <?php 
                        global $post;
                        $id = $post->ID; 
                        $subpages1 = array (18, 17, 223, 16, 19, 4);
                        $subpages2 = array (13, 11);
                        $subpages3 = array (223, 23, 22, 6);
                        if (in_array($id, $subpages1)){ ?>
                            <div class="col-md-8"> 
                                 <?php echo get_the_post_thumbnail($id); ?> 
                            </div>
                            <div class="col-md-4">  
                                    <?php 
                                      wp_nav_menu( array(
                                                    'container'=>'',
                                                    'theme_location' =>'primary',
                                                    'menu' => 'sub menu 1',
                                                    'menu_class'=>'secondary-nav',
                                                    )); 
                                     ?>	
                            </div>
                        <?php } elseif(in_array($id, $subpages2)) { ?>      
                        
                            <div class="col-md-8"> 
                                 <?php echo get_the_post_thumbnail($id); ?> 
                            </div>
                            <div class="col-md-4">  
                                    <?php 
                                      wp_nav_menu( array(
                                                    'container'=>'',
                                                    'theme_location' =>'primary',
                                                    'menu' => 'sub menu 2',
                                                    'menu_class'=>'secondary-nav',
                                                    )); 
                                     ?>	
                            </div>
                    <?php } elseif(in_array($id, $subpages3)) { ?>      
                        
                            <div class="col-md-8"> 
                                 <?php echo get_the_post_thumbnail($id); ?> 
                            </div>
                            <div class="col-md-4">  
                                    <?php 
                                      wp_nav_menu( array(
                                                    'container'=>'',
                                                    'theme_location' =>'primary',
                                                    'menu' => 'sub menu 3',
                                                    'menu_class'=>'secondary-nav',
                                                    )); 
                                     ?>	
                            </div>
                             <?php } elseif($id == 105) { ?>      
                            <div class="col-md-12">  
                                 <div class="fb-like-box-wrapper">
                                    <h2>Join People Like You<br />From Across The Northwest</h2>
                                        <div class="fb-like-box-mask">
                                           <div class="fb-like-box" data-href="https://www.facebook.com/AllianceForNorthwestJobsExports" data-width="960" height="335" data-show-faces="true" data-border-color="#ffffff" data-stream="false" data-header="false"></div>
                                        </div>
                                        <div class="fb-like" data-href="https://www.facebook.com/AllianceForNorthwestJobsExports" data-send="false" data-width="960" data-show-faces="false"></div>     
                                </div>
                            </div>
                        <?php } else {?>
                        <div class="col-md-12"> 
                            <img src="/wp-content/uploads/2014/02/workers-planning-car1.jpg" />
                        </div>
                        <?php } ?>      
            </div><!--End of slide-show div-->           
    </div><!--End of head-wrap div-->