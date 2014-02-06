<?php
/*
Template Name: 404 and fact
*/
get_header(); ?>
 <div id="main-content4" class="row container show-border single-temp">
        <div class="col-md-8 addpad">
            <div class="stories">
                <?php if (is_404()){ ?>
                        <div class="section">
                            <h1 class="head">Page Not Found</h1>
                                <p>We couldn't find this page for you. It might have been removed, had its name changed, or it could be temporarily unavailable. Please try the following:</p>
                                <ul>
                                        <li>If you typed the page address in the address bar, make sure that it is spelled correctly.</li>
                                        <li>Go to the <a href="<?php bloginfo('url')?>">home page</a> and look for links to the information you want.</li>
                                        <li>Use the navigation bar above to find the link you are looking for.</li>
                                </ul>
                    </div>
                  <?php  }elseif (is_page()) {
                         if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                                 the_content();
                          endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; 
                    }  else { ?>
                        <p> NOT FOUND! </p>
                   <?php  } ?>
                    
            </div>
        </div>
        <div class="col-md-4">
             <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?> 
            <div class="block block-page">
                <h2>Get the Facts</h2>
                <?php if(function_exists('shs_slider_view')){ shs_slider_view(); } ?>
                </div>
        </div>
        </div><!--End of main-content1 div-->

<?php get_footer('single'); ?>