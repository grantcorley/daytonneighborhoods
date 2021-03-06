<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>



<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<!-- <p>content.php</p> -->

	<?php

	// if ( ! is_search() ) {
	// 	get_template_part( 'template-parts/featured-image' );
	// }
	// get_template_part( 'template-parts/entry-header' );

	?>


	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( ! is_search() ) {

				//get_template_part( 'template-parts/featured-image' );


				if ( has_post_thumbnail() ){
				get_template_part( 'template-parts/featured-image' );
				}



			}//end if !is_search
			get_template_part( 'template-parts/entry-header' );
				?>

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
				?><?php
			} else {
				//the_content( __( 'Continue reading', 'twentytwenty' ) );
				//get_the_content();
				the_content();
				?>

				<?php
			}
?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( is_single() ) {
			get_template_part( 'template-parts/entry-author-bio' );
		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {
		get_template_part( 'template-parts/navigation' );
	}


	?>

</article><!-- .post -->
