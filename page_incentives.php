<?php
 /**
 * Template Name: Financial Incentives
 *
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header();
?>

<main id="site-content" role="main" class="post-query-page">

<article class="page">

<!-- ========================== -->

<div class="main-img incentives">
	<h2 class="entry-title">Incentives<h2>
</div>


<!-- ========================== -->



	<div class="post-inner thin top-level">

		<div class="entry-content">

			<h2 class="intro-text">Explore financial incentives available to Dayton homebuyers &amp; tenants.</h2>


			<!--============//? >===============-->

			<div class="articles">

			<?php

			// $the_query = new WP_Query( array( 'category_name' => 'city-living-essentials' ) );

			$the_query = new WP_Query( array(
									'category_name' => 'financial-incentives',
									'orderby' => 'title',
    							'order'   => 'ASC',
								));

			//if ( have_posts() ) {
			if ( $the_query->have_posts() ) {
				//query_posts('posts_per_page=3');

				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					get_template_part( 'template-parts/content', get_post_type() );
					//the_excerpt();
				}
			}
			?>

			</div>

			<!--============//? >===============-->






	</div> <!--end entry-content-->

</div> <!--end post-inner thin-->


</article>

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
