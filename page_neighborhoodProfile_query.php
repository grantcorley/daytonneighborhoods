<?php
 /**
 * Template Name: No Edit!: Neighborhood Profile Query
 *
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header();
?>


<main id="site-content" role="main" class="post-query-page neighborhood-profile">

<article class="page">

<!-- ========================== -->

<div class="main-img neighborhood-profiles">
	<h2 class="entry-title">Neighborhood Profiles<h2>
</div>

<!-- ========================== -->



	<div class="post-inner thin top-level">

		<div class="entry-content">

			<!-- <h2 class="intro-text">Explore Dayton's neighborhoods</h2> -->

			<!-- <p>page_neighborhoodProfile_query.php</p> -->


			<!--============//? >===============-->
			<div id="the-posts">

			<?php

			// $the_query = new WP_Query( array( 'category_name' => 'city-living-essentials' ) );

			$the_query = new WP_Query( array(
									'category_name' => 'neighborhood-profile',
									'orderby' => 'title',
    							'order'   => 'ASC',
								));

			//if ( have_posts() ) {
			if ( $the_query->have_posts() ) {
				//query_posts('posts_per_page=3');

				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					// get_template_part( 'template-parts/content', get_post_type() );
					get_template_part( 'template-parts/content_neighborhoodProfileQuery', get_post_type() );
					the_excerpt();
				}
			}
			?>

			</div> <!-- end the-posts-->
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
