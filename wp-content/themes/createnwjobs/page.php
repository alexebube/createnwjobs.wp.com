<?php
get_header('page'); ?>
<div id="main-content3" class="row container show-border">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-8"><?php the_content(); ?></div>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
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
        
<?php get_footer(); ?>