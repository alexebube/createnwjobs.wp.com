<div id="main-content1" class="row container">
    <div class="col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    
    </div>
    <div class="col-md-4">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?> 
   </div>
</div><!--End of main-content1 div-->
        <div id="main-content2" class="row container">
            <div class="col-md-4">  
                <div class="main-widget">
                <h2>Get the Facts</h2>
                <?php if(function_exists('shs_slider_view')){ shs_slider_view(); } ?>
                </div>
                <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
                <?php endif; ?>
                
            </div>
            <div class="col-md-8 adjust-pad">
                <h2 class="latest-news">latest news</h2>
                <div class="stories">
                       <?php $latest_news = new WP_Query('category_name=news&posts_per_page=5');
				if ($latest_news -> have_posts()): while ($latest_news -> have_posts()): $latest_news -> the_post(); ?>
                                          <div class="story">
                                              <p class="plink"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                              <p class="byline"><?php the_time('F j, Y'); ?></p>
					</div>
                    			<?php endwhile; wp_reset_postdata(); endif; ?>		
                    <p class="read-more"><a href="<?php bloginfo('url')?>/?cat=4">More news »</a></p>
                </div>
            </div>
        </div>