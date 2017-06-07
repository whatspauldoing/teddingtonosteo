<?php get_header(); ?>
    <img class="featured" src="<?php the_post_thumbnail_url() ?>" />
    <div class="container-fluid white page-content">
        <div class="container">
            <h1 class="blue center"><?php the_title(); ?></h1>
        </div>
        <div class="container yellow-top content">
            <?php the_content(); ?>
        </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            jQuery("hr").before("<div class='clearfix'></div>");
            jQuery(".content > h1").each(function() {
                from = parseInt(jQuery(this).nextAll("hr:first").position().top); 
                to = parseInt(jQuery(this).position().top);
                newHeight = from - to;
                jQuery(this).height(newHeight);
            });
        });
    </script>
<?php get_footer(); ?>