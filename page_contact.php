<?php
 /**
 * Template Name: Contact
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

<div class="main-img contact">
	<h2 class="entry-title">Contact<h2>
</div>

<!-- ========================== -->



	<div class="post-inner thin top-level">

		<div class="entry-content">

			<!-- <h2 class="intro-text">Incentives subhead</h2> -->


			<!--============//? >===============-->

			<?php

			if ( have_posts() ) {

				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content-page-template', get_post_type() );
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
