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
       <?php wp_footer(); ?>
    </body>
</html>