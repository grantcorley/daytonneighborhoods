<?php
 /**
 * Template Name: Events Page
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

<div class="main-img events">
	<h2 class="entry-title">Events<h2>
</div>


<!-- ========================== -->


<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_type() );
	}
}

?>




</article>

<!-- <h2>Posts go here</h2> -->







</main><!-- #site-content -->



<?php get_footer(); ?>
