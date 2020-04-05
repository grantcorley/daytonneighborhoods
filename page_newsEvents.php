<?php
 /**
 * Template Name: News and Events
 *
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header();
?>


<main id="site-content" role="main" class="subpages-parent">

<!-- <article class="page"> -->


<div class="container">

		<h1>News &amp; Events</h1>
  <div class="row">

    <!-- link #1: Events -->
		<a href="<?php echo home_url( '/events/' ); ?>">

				<section>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wrightDunbar_featuredImg.jpg" width="1980" height="1000" alt="Wright Dunbar neighborhood, Dayton OH" />

					<h2>Events</h2>

				</section><!--end header-over-image-->

		</a>


		<!-- link #2: News -->
		<a href="<?php echo home_url( '/news/' ); ?>">

				<section>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/grafton.jpg" width="1980" height="1000" alt="Grafton neighborhood, Dayton OH" />

					<h2>News</h2>

				</section><!--end header-over-image-->

		</a>


		<!-- link #3: Podcasts -->
		<a href="<?php echo home_url( '/podcasts/' ); ?>">

				<section>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/podcast_featuredImg.jpg" width="1980" height="1000" alt="Screenshot of Dayton podcast webpage" />

					<h2>Podcasts</h2>

				</section><!--end header-over-image-->

		</a>






  </div>
</div>




<!-- </article> -->

<!-- <h2>Posts go here</h2> -->



<!--
< ?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_type() );
	}
}

? >
-->


</main><!-- #site-content -->

<?php //footer widgets (deleted for now)
//get_template_part( 'template-parts/footer-menus-widgets' );
?>

<?php get_footer(); ?>
