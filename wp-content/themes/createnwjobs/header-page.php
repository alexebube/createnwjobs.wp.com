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
    <?php $p = 105; if(is_page($p)){?>
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
           <h2 class="head-desc"><?php echo get_the_title($post->post_parent); ?></h2>
           <?php  } else { ?>
                <h2 class="head-desc"><?php echo get_the_title(); ?></h2>
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
            <div id="slide-show2" class="container no-box">
                <div class="bg">
                    <?php 
                        global $post;
                        $id = $post->ID; 
                        $args = array('child_of' => $id);
                        global $children;
                        $children = get_pages($args);
                        if ($children || $post->post_parent){ ?>
                            <div class="col-md-8"> 
                                <img src="http://createnwjobs.wp.com/wp-content/uploads/2012/08/workers-planning-car.jpg" />
                            </div>
                            <div class="col-md-4">  
                                <ul class="secondary-nav">

                                    <?php 
                                        echo "<li class='selected'><a href='".get_page_link( $id)."'>".$post->post_title."</a></li>" ;
                                     foreach ( $children as $page ) {        
                                        echo  "<li><a href='".get_page_link( $page->ID )."'>".$page->post_title."</a></li>";
                                     }
                                     ?>	
                                </ul>   
                            </div>
                        <?php } else { ?>      
                        <div class="col-md-12"> 
                            <img src="/assets/images/slide-image.PNG" class="img-responsive" />
                        </div>
                        <?php } ?>      
            </div><!--End of slide-show div-->           
    </div><!--End of head-wrap div-->