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
    wp_enqueue_style('Slab', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500&display=swap');

     // wp_enqueue_script( 'FontAwesomeJS', "https://kit.fontawesome.com/7893f8c309.js", array('jquery'), '3.2.2', true);

    wp_enqueue_script( 'DaytonNeighborhoodsJS', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), '3.2.2', true);



    // <script src="" crossorigin="anonymous"></script>

}






add_action( 'after_setup_theme', 'setup_child_theme' );




//-----------

function setup_child_theme() {
    //console_log('setup_child_theme()');
    if ( function_exists( 'add_theme_support' ) ) {
        //add_theme_support( 'post-thumbnails' );
        //set_post_thumbnail_size( 1980, 1000, true );
        	add_image_size('featured', 1200, 500, true);
        //add_image_size('featured', 2000, 500, true);
    }

}



//Category searches show results alphabetically, not by date
add_action( 'pre_get_posts', 'wpd_tax_alpha' );
function wpd_tax_alpha( $query ) {

    //console_log('wpd_tax_alpha');

    //if ( $query->is_tax() && $query->is_main_query() ) {
    if ( $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
