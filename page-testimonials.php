<?php /* Template Name: Testimonials List */ ?>
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
                $args = ['category_name' => 'testimonials', 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' ];
                $myposts = get_posts($args);
                echo "<div class='row yellow-top' style='margin-bottom:20px;'>";
                $count = 1;
                foreach ( $myposts as $post ) : setup_postdata( $post );
                    echo "<div class='col testimonial'>";
                    echo '<p class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true" style="margin:10px 10px 0px 0px; color:#aaa;"></i>' . get_the_content() . '<i class="fa fa-quote-right" aria-hidden="true" style="margin:0px 0px 10px 10px; color:#aaa;"></i></p>';
                    echo '<h3 class="testimonial-name blue">' . get_post_meta(get_the_ID(),"client_name", true) . '</h3>';
                    echo '<h4 class="testimonial-job blue">' . get_post_meta(get_the_ID(),"client_occupation", true) . '</h4>';
                    echo '<span class="testimonial-location">' . get_post_meta(get_the_ID(),"client_location", true) . '</span>';
                    echo '<div class="clearfix"></div>';
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
<?php get_footer(); ?>