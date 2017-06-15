<?php /* Template Name: Team List */ ?>
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
                $args = ['category_name' => $team_type, 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' ];
                $myposts = get_posts($args);
                echo "<div class='row yellow-top' style='margin-bottom:20px;'>";
                $count = 1;
                foreach ( $myposts as $post ) : setup_postdata( $post );
                    $cats = wp_get_post_categories($id);
                    while(list(, $cat) = each($cats)) {
                        $curcat = get_category($cat);
                        $cat_name = $curcat->slug;
                        $is_admin = strpos($cat_name,"admin") . " - ";
                        if($is_admin == " - ") {
                            $link = true;                     
                        } else {
                            $link = false;
                            break;
                        }
                    }
                    if($link == true) {
                        echo "<div class='col-sm-12 col-md-3'>";
                        echo '<a href="' . get_the_permalink() . '"><img class="headshot" src="' . get_the_post_thumbnail_url() . '" /></a>';
                        echo '<h3 class="team-member"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
                        echo '<p class="team-job">' . get_post_meta(get_the_ID(),"job_title", true) . '</p>';
                        echo "</div>";
                    } else {
                        echo "<div class='col-sm-12 col-md-3'>";
                        echo '<img class="headshot" src="' . get_the_post_thumbnail_url() . '" />';
                        echo '<h3 class="team-member blue">' . get_the_title() . '</h3>';
                        echo '<p class="team-job">' . get_post_meta(get_the_ID(),"job_title", true) . '</p>';
                        echo "</div>";
                    }
                if($count >= 4 && $count > 1) {
                    echo "</div><div class='row yellow-top' style='margin-bottom:20px; margin-top:20px;'>";
                    $count = 1;
                } else {
                    $count ++;
                }
                endforeach; 
                while($count <= 4 && $count > 1) {
                    echo "<div class='col-sm-12 col-md-3'></div>";
                    $count ++;
                }
                echo "</div>";
                wp_reset_postdata();
            ?>
        </div>
<?php get_footer(); ?>