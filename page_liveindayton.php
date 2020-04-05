<?php
 /**
 * Template Name: Live in Dayton
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

		<h1>Live in Dayton</h1>
  <div class="row">

    <!-- link #1: Buy & Rent -->
		<a href="<?php echo home_url( '/buying-renting/' ); ?>">

				<section>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/WestwoodMural_1980x1000.jpg" width="1980" height="1000" alt="Westwood mural, Dayton OH" />

					<h2>Buy &amp; Rent</h2>

				</section><!--end header-over-image-->

		</a>


		<!-- link #2: City Living -->
		<a href="<?php echo home_url( '/city-living-essentials/' ); ?>">

				<section>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/WestwoodMural_1980x1000.jpg" width="1980" height="1000" alt="Westwood mural, Dayton OH" />

					<h2>City Living</h2>

				</section><!--end header-over-image-->

		</a>


		<!-- link #3: Incentives -->
		<a href="<?php echo home_url( '/financial-incentives/' ); ?>">

				<section>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/WestwoodMural_1980x1000.jpg" width="1980" height="1000" alt="Westwood mural, Dayton OH" />

					<h2>Incentives</h2>

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
