<?php get_header(); ?>
    <img class="featured" src="<?php the_post_thumbnail_url() ?>" />
    <div class="container-fluid white page-content">
        <div class="container">
            <h1 class="blue center"><?php the_title(); ?></h1>
        </div>
        <div class="container yellow-top content">
            <?php the_content(); ?>
        </div>
<?php get_footer(); ?>