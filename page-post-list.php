<?php /* Template Name: Post List */ ?>
<?php get_header(); ?>
    <img class="featured" src="<?php the_post_thumbnail_url() ?>" />
    <div class="container-fluid white page-content">
        <div class="container">
            <h1 class="blue center"><?php the_title(); ?></h1>
        </div>
        <div class="container content">
            <?php 
                global $post;
                $id = get_the_ID();
                $team_type = get_post_meta($id,"team_type", true);
                $args = ['category_name' => 'teddingtonosteopathsnews', 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' ];
                $myposts = get_posts($args);
                echo "<div class='row yellow-top' style='margin-bottom:20px;'>";
                $count = 1;
                foreach ( $myposts as $post ) : setup_postdata( $post );
                    echo "<div class='col'>";
                    echo '<div class="image-clip"><a href="' . get_the_permalink() . '"><div class="post-thumb" style="background-image:url(\'' . get_the_post_thumbnail_url() . '\');"></div></a></div>';
                    echo '<h3 class="team-member"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
                    echo '<p class="team-job">' . get_post_meta(get_the_ID(),"job_title", true) . '</p>';
                    echo "</div>";
                    if($count >= 4) {
                        echo "</div><div class='row yellow-top' style='margin-bottom:20px; margin-top:20px;'>";
                        $count = 1;
                    } else {
                        $count ++;
                    }
                endforeach; 
                while($count <= 4) {
                    echo "<div class='col'></div>";
                    $count ++;
                }
                echo "</div>";
                wp_reset_postdata();
            ?>
        </div>
    </div>
    <script>
       // jQuery(document).ready(function() {
    //        jQuery("hr").before("<div class='clearfix'></div>");
    //        jQuery(".content > h1").each(function() {
    //            from = parseInt(jQuery(this).nextAll("hr:first").position().top); 
    //            to = parseInt(jQuery(this).position().top);
    //            newHeight = from - to;
    //            jQuery(this).height(newHeight);
    //        });
    //    });
    </script>
<?php get_footer(); ?>