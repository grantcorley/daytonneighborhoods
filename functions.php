<?php








add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.


    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
    wp_enqueue_script( 'javascript', get_stylesheet_directory_uri() . '/scripts.js' );


}





add_action( 'after_setup_theme', 'setup_child_theme' );


function setup_child_theme() {
    //console_log('setup_child_theme()');
    if ( function_exists( 'add_theme_support' ) ) {
        //add_theme_support( 'post-thumbnails' );
        //set_post_thumbnail_size( 1980, 1000, true );
        	add_image_size('featured', 1200, 500, true);
        //add_image_size('featured', 2000, 500, true);
    }
}


// function console_log($output, $with_script_tags = true) {
//     $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
// ');';
//     if ($with_script_tags) {
//         $js_code = '<script>' . $js_code . '</script>';
//     }
//     echo $js_code;
// }

//customize featured image size
// if ( function_exists( 'add_theme_support' ) ) {
//   add_theme_support( 'post-thumbnails' );
//   set_post_thumbnail_size( 1980, 1000, true ); // default Featured Image dimensions (cropped)
//
//
// }


// Handle SVG icons.
// require get_stylesheet_directory_uri() . '/classes/class-twentytwenty-svg-icons.php';
