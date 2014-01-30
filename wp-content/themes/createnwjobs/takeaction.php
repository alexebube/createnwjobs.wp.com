<?php
/*
Template Name: Take Action
*/
get_header('page');
get_template_part('content','action');
?>
<hr/>
<div id="footer">
            <p>&copy; 2014. Paid for by the Alliance for Northwest Jobs & Exports.<br />
            Build terminals here. Build jobs here.</p>
        </div>
</div>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/script.js" type="text/javascript"></script>
        <div id="fb-root"></div>
	<script>
	if ($('.fb-like, .fb-like-box, .twitter-share-button').length) {
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	}
	</script>
       <?php wp_footer(); ?>
    </body>
</html>