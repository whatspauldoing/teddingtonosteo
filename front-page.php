<?php get_header(); ?>
<span id='top-image'></span>
        <div class='container-fluid center'>
            <img class="featured" src="<?php the_post_thumbnail_url() ?>" />
            <div class='hp-logo'>
                <img src='/wp-content/uploads/2017/06/hp-logo.png' />
            </div>
        </div>
        <div class='clearfix'></div>
        <div class='homepage-nav'>
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse">
                                <?php wp_nav_menu("main"); ?>
                            <div class="clearfix"></div>
                        </div><!--/.nav-collapse -->
                </div>
            </div>        
        </div>
        <div class="container-fluid home-page-content">
            <div class="container">
                <h1 class="blue center"><?php the_title(); ?></h1>
            </div>            
            <div class='container-fluid white'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-6 col-sm-12 col-lg-3'>
                            <a href='/osteopathy/' class='hp-link'>Osteopathy</a>
                        </div>
                        <div class='col-md-6 col-sm-12 col-lg-3'>
                            <a href='/Podiatry/' class='hp-link'>Podiatry</a>
                        </div>
                        <div class='col-md-6 col-sm-12 col-lg-3'>
                            <a href='/foot-health-care/' class='hp-link'>Foot Health Care</a>
                        </div>
                        <div class='col-md-6 col-sm-12 col-lg-3'>
                            <a href='/sports-injury/' class='hp-link'>Sports Massage</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="container yellow-top content" style='margin-top:20px;'>
                    <h1>What we do:</h1>
                        <p><?php
                                $id = get_the_ID();
                                $what_we_do = get_post_meta($id,"what_we_do", true); 
                                echo $what_we_do;
                            ?></p>
                    <hr/>
                </div>
                <div id='talk' class="container content">
                    <h1 style='margin-right:15px;'>Latest Talk:</h1>
                    <p>
                    <?php 
                        global $post;
                        $id = get_the_ID();
                        $team_type = get_post_meta($id,"team_type", true);
                        $args = ['category_name' => 'teddingtonosteopathsnews', 'numberposts' => 3, 'orderby' => 'menu_order', 'order' => 'ASC' ];
                        $myposts = get_posts($args);
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                            echo "<div class='hp-talk'>";
                            echo '<div class="image-clip"><a href="' . get_the_permalink() . '"><div class="post-thumb" style="background-image:url(\'' . get_the_post_thumbnail_url() . '\');"></div></a></div>';
                            echo '<h3 class="team-member"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
                            echo "</div>";
                        endforeach; 
                        wp_reset_postdata();
                    ?>
                        </p>
                    <hr/>
                </div>                
                <div id='testimonials' class="container content">
                    <h1 style='margin-right:15px;'>Testimonials:</h1>
                    <p>
                    <?php 
                        global $post;
                        $id = get_the_ID();
                        $team_type = get_post_meta($id,"team_type", true);
                        $args = ['category_name' => 'testimonials', 'numberposts' => 3, 'orderby' => 'menu_order', 'order' => 'ASC' ];
                        $myposts = get_posts($args);
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                            echo "<div class='col-sm-12 col-md-3 sml-side-pad'>";
                            echo "<div class='testimonial'>";
                            echo '<p class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true" style="margin:10px 10px 0px 0px; color:#aaa;"></i>' . get_the_content() . '<i class="fa fa-quote-right" aria-hidden="true" style="margin:0px 0px 10px 10px; color:#aaa;"></i></p>';
                            echo '<h3 class="testimonial-name blue">' . get_post_meta(get_the_ID(),"client_name", true) . '</h3>';
                            echo '<h4 class="testimonial-job blue">' . get_post_meta(get_the_ID(),"client_occupation", true) . '</h4>';
                            echo '<span class="testimonial-location">' . get_post_meta(get_the_ID(),"client_location", true) . '</span>';
                            echo '<div class="clearfix"></div>';
                            echo "</div>";
                            echo "</div>";
                        endforeach; 
                        wp_reset_postdata();
                    ?>
                        </p>
                    <hr/>
                </div>                

                <div class="container content">
                    <h1 style='margin-right:15px;'>Tweets:</h1>
                    <div class='tweets'>
                        <?php 
                            echo do_shortcode('[ap-twitter-feed]');
                        ?>
                    </div>
                    <hr/>
                </div>  
                <div class="container content" style='margin-top:20px;'>                    
                    <h1>Who we are:</h1>
                        <p><?php
                                $id = get_the_ID();
                                $who_we_are = get_post_meta($id,"who_we_are", true); 
                                echo $who_we_are;
                            ?></p>
                    <hr/>
                </div>
            <div class='clearfix'></div>
            <script>
                jQuery(document).ready(function() {
                    if(jQuery(window).width() > 700) {
                        jQuery(".sitewide-nav").hide();
                        jQuery(".topbar-logo").hide();
                        jQuery(window).scroll(function () {
                            var scrollpos = jQuery(window).scrollTop();
                            var navtop= jQuery(".home-page-content").offset().top - jQuery(document).scrollTop();
                            if(navtop < 80) {
                                jQuery(".sitewide-nav").show();
                                jQuery(".topbar-logo").show();
                                jQuery(".hp-logo").hide();
                                jQuery(".homepage-nav").hide();
                                jQuery(".home-page-content").css("margin-top","490px");
                            } else {
                                jQuery(".sitewide-nav").hide();
                                jQuery(".homepage-nav").show();
                                jQuery(".topbar-logo").hide();
                                jQuery(".hp-logo").show();
                                jQuery(".home-page-content").css("margin-top","0px");
                            }
                        });
                    } else {
                        jQuery(".sitewide-nav").show();
                        jQuery(".topbar-logo").show();
                        jQuery(".hp-logo").hide();
                        jQuery(".homepage-nav").hide();
                        jQuery(".home-page-content").css("margin-top","150px");
                        jQuery(".homepage-nav").css("margin-top","0px");
                    }
                    jQuery(window).resize(function() {
                        if(jQuery(window).width() > 700) {
                            jQuery(".sitewide-nav").hide();
                            jQuery(".topbar-logo").hide();
                            jQuery(window).scroll(function () {
                                var scrollpos = jQuery(window).scrollTop();
                                var navtop= jQuery(".home-page-content").offset().top - jQuery(document).scrollTop();
                                if(navtop < 80) {
                                    jQuery(".sitewide-nav").show();
                                    jQuery(".topbar-logo").show();
                                    jQuery(".hp-logo").hide();
                                    jQuery(".homepage-nav").hide();
                                    jQuery(".home-page-content").css("margin-top","490px");
                                } else {
                                    jQuery(".sitewide-nav").hide();
                                    jQuery(".homepage-nav").show();
                                    jQuery(".topbar-logo").hide();
                                    jQuery(".hp-logo").show();
                                    jQuery(".home-page-content").css("margin-top","0px");
                                }
                            });
                        } else {
                            jQuery(".sitewide-nav").show();
                            jQuery(".topbar-logo").show();
                            jQuery(".hp-logo").hide();
                            jQuery(".homepage-nav").hide();
                            jQuery(".home-page-content").css("margin-top","150px");
                            jQuery(".homepage-nav").css("margin-top","0px");
                        }
                    });                    
                    var tallestTalk = 0;
                    jQuery(".hp-talk").each(function() {
                        if(jQuery(this).height() > tallestTalk) {
                            tallestTalk = jQuery(this).height();
                        }
                    });
                    jQuery(".hp-talk").height(tallestTalk);
                    
                    var tallestTweet = 0;
                    jQuery(".aptf-single-tweet-wrapper").each(function() {
                        if(jQuery(this).height() > tallestTweet) {
                            tallestTweet = jQuery(this).height();
                        }
                    });
                    jQuery(".aptf-single-tweet-wrapper").height(tallestTweet);                    
               
                });            
            </script>
<?php get_footer(); ?>