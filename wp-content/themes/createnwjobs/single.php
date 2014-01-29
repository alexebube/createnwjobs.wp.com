<?php
get_header('single'); ?>
 <div id="main-content1" class="row container show-border single-temp">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-8 addpad">
            <h1 class="single-title"><?php the_title(); ?></h1>
            <p class="byline"><?php the_date(); ?></p>
            <p class="single-body"><?php the_content(); ?></p>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
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