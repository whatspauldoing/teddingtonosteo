<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

 /* @Recreate the default filters on the_content so we can pull formated content with get_post_meta
    -------------------------------------------------------------- */
    add_filter( 'meta_content', 'wptexturize'        );
    add_filter( 'meta_content', 'convert_smilies'    );
    add_filter( 'meta_content', 'convert_chars'      );
    add_filter( 'meta_content', 'wpautop'            );
    add_filter( 'meta_content', 'shortcode_unautop'  );
    add_filter( 'meta_content', 'prepend_attachment' );


?>