<?php
/**
 * The default template for displaying neighborhood profiles
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

	//if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	//}

	get_template_part( 'template-parts/entry-header' );

	?>


	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

<h2>Neighborhood Profile Content</h2>

				<p><?php the_field('neighborhood');?></p>
				<p><?php the_field('walk_score');?></p>
				<p><?php the_field('bike_score');?></p>
				<p><?php the_field('transit_score');?></p>
				<p><?php the_field('avg_home_value');?></p>
				<p><?php the_field('avg_house_size');?></p>
				<p><?php the_field('avg_lot_size');?></p>
				<p><?php the_field('zip_codes');?></p>
				<p><?php the_field('neighborhoods');?></p>
				<p><?php the_field('historic_districts');?></p>
				<p><?php the_field('housing_units_acre');?></p>
				<p><?php the_field('known_for');?></p>
				<p><?php the_field('neighborhood_tagline');?></p>
				<p><?php the_field('neighborhood_association');?></p>
				<p><?php the_field('na_website');?></p>
				<p><?php the_field('contact_name');?></p>
				<p><?php the_field('phone_number');?></p>


<!--
			< ?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

-->

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
