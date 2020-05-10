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


	<?php

	// if ( ! is_search() ) {
	// 	get_template_part( 'template-parts/featured-image' );
	// }
	// get_template_part( 'template-parts/entry-header' );

	?>


	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<!-- <p>content_neighborhoodProfileQuery.php</p> -->

			<?php
			if ( ! is_search() ) {

				if ( has_post_thumbnail() ){
					?><a class="img-link" href="<?php echo esc_url( get_permalink( ) ); ?>"><?php
					get_template_part( 'template-parts/featured-image' );
					?></a><?php
				}

				else{
					?><a class="img-link" href="<?php echo esc_url( get_permalink( ) ); ?>">
						<figure class="featured-media">
								<div class="featured-media-inner ">
										<img width="1200" height="500" src="<?php echo get_stylesheet_directory_uri();?>/images/logo_1980x1000_alt.gif" class="attachment-featured size-featured wp-post-image" alt="Dayton Neighborhoods logo">
								</div><!-- .featured-media-inner -->
						</figure>
					</a>
					<?php
				}

			}//end if !is_search

			?>
			<div class="article-name-description">

			<?php
				get_template_part( 'template-parts/entry-header' );
			?>

			<!-- HERE -->
			<!--is the below part even necessary??-->
		<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>


		</div><!--end article-name-description-->

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

		the_content(); //pulls in the main content in the post
		//the_post();

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
