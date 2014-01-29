<div id="main-content1" class="row container show-border">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-8"><?php the_content(); ?></div>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <div class="col-md-4">
            <div class="block block-page">
                <h2>It's time to create good jobs. It's time to move forward with new exports.</h2>
                <p><a class="button" href="#">Pledge Your Support</a></p>
            </div>
            <div class="block block-page">
                <h2>Keep up-to-date and get involved.</h2>
            <form>
                <input type="text" name="UEmail" placeholder="Email Address" />
                <input type="submit" name="submit" value="Sign Up" class="button"/>
            </form>
            </div>
             <div class="block block-page">
                <h2>Get the Facts.</h2>
                <h1 class="fact-number">$1.5 billion</h1>
                <p class="fact-desc">The amount of private investment developers of the three terminals have pledged to build projects to full capacity.</p>
                <a class="read-more" href="#">Learn more about jobs and economic development »</a>
             </div>
                <div class="block block-page">
                    <h2>FEATURED VIDEO</h2>
                    <img src="assets/images/video.PNG" />
                </div>
        </div>
        </div><!--End of main-content1 div-->
        