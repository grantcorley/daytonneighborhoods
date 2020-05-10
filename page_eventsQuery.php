<?php
 /**
 * Template Name: No Edit!: Events Query
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

 <div class="header-over-image">

 <figure class="featured-media">

 	<div class="featured-media-inner section-inner">

 		<img src=" <?php echo get_stylesheet_directory_uri(); ?>/images/belmontHome_featuredImg.jpg" width="1980" height="1000" alt="Home in Belmont, Dayton OH"/>

 	</div><!-- .featured-media-inner -->

 </figure><!-- .featured-media -->


 <header id="entry-header" class="has-text-align-center header-footer-group">



 <div class="entry-header-inner section-inner medium">

 	<h1 class="entry-title fade-in">Events</h1>
 	<p></p>


 	<!-- that was twentytwenty_the_post_meta -->

 </div><!-- .entry-header-inner -->



 </header><!-- .entry-header -->
 </div>

 <!-- ========================== -->



 	<div class="post-inner thin top-level">

 		<div class="entry-content">

 			<h2 class="intro-text">Helping you find your perfect home in Dayton.</h2>


 			<!--============//? >===============-->

 			<?php

 			// $the_query = new WP_Query( array( 'category_name' => 'city-living-essentials' ) );

 			$the_query = new WP_Query( array(
 									'category_name' => 'events',
 									'orderby' => 'title',
     							'order'   => 'ASC',
 								));

 			//if ( have_posts() ) {
 			if ( $the_query->have_posts() ) {
 				//query_posts('posts_per_page=3');

 				while ( $the_query->have_posts() ) {
 					$the_query->the_post();
					get_template_part( 'template-parts/content_event', get_post_type() );
				  //the_excerpt();
 					//the_excerpt();
 				}
 			}
 			?>


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
