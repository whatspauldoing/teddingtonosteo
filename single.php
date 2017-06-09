<?php get_header(); ?>
    <img class="featured" src="" />
    <div class="container-fluid white no-top-gap-page-content">
        <div class="container">
            <h1 class="blue center"><?php the_title(); ?></h1>
        </div>
        <div class="container yellow-top content">
            <div class="row">
                <div class="col">
                    <img class='big-headshot' src="<?php the_post_thumbnail_url() ?>" />
                </div>
                <div class="col">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            jQuery("hr").before("<div class='clearfix'></div>");
    /*        jQuery(".content > h1").each(function() {
                from = parseInt(jQuery(this).nextAll("hr:first").position().top); 
                to = parseInt(jQuery(this).position().top);
                newHeight = from - to;
                jQuery(this).height(newHeight);
            });*/
        }); 
    </script>
<?php get_footer(); ?>