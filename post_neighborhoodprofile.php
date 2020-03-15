<?php
/*
 * Template Name: Neighborhood Profile (Post)
 * Template Post Type: post, page, product
 */

 get_header();  ?>

<main id="site-content" class="inside-post" role="main">


<!-- <h1>post_neighborhoodprofile.php</h1> -->

	<?php



	if ( have_posts() ) {
		while ( have_posts() ) {
      //echo('1');
			the_post();
      //echo('1');
			get_template_part( 'template-parts/content_neighborhoodprofile', get_post_type() );
      //echo('1');
      //the_field('walk_score');
		}
	}

	?>

</main><!-- #site-content -->

<?php //footer widgets (deleted for now)
//get_template_part( 'template-parts/footer-menus-widgets' );
?>

<?php get_footer(); ?>
