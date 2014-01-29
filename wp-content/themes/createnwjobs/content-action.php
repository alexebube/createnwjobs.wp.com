<div id="main-content1" class="row container">
    <div class="col-md-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>    
    </div>
</div><!--End of main-content1 div-->
<div class="row bg2">
<div id="main-content2" class="row container">
    <p class="section-header">Stand with our diverse coalition</p><br/>
    <p class="take-action">Labor and Business, Republicans and Democrats, all coming together to represent over 396,000 workers and 43,000 businesses to support job creation and economic growth.
        <br/><br/>Including groups you know and trust: </p>
</div>
