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


	<div class="post-inner neighborhood-profile <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content" id="full-width-content">

	<!-- <div id="full-width-content"> -->

			<div class="container">

				<section class="walk-scores">
							<div class="box">
								<h4>Walk Score*</h4>
									<p><?php the_field('walk_score');?></p>
							</div>
								<div class="box">
								<h4>Bike Score*</h4>
									<p><?php the_field('bike_score');?></p>
							</div>
								<div class="box">
								<h4>Transit Score*</h4>
									<p><?php the_field('transit_score');?></p>
							</div>
				</section>

				<p class="footnote">* All scores from <a href="https://www.walkscore.com/OH/Dayton">Walk Score</a></p>


				<!-- FLEXBOX LAYOUT -->
				<section class="home-info">
							<div class="box">
								<h4>Average Home Value</h4>
									<p><?php the_field('avg_home_value');?></p>
							</div>
								<div class="box">
								<h4>Average House Size</h4>
									<p><?php the_field('avg_house_size');?></p>
							</div>
								<div class="box">
								<h4>Average Lot Size</h4>
									<p><?php the_field('avg_lot_size');?></p>
							</div>
				</section>



				<section class="description">
					<div class="row">
						<div class="col-sm">
						
					</div>
					</div>

					<div class="row"> <!--row for home info-->
						<div class="col-sm">
								<p><?php the_field('neighborhood_description');?></p>
					</div>
				</div>
			</section> <!-- end description -->




			<section class="quick-stats">

				<div class="row">
					<div class="col-sm">
					<h3>Quick Stats</h3>
				</div> <!--end col-->
				</div> <!--end row-->


				<div class="row"> <!--Row: Zip Codes-->

					<div class="col">
						<p>Zip Codes: <?php the_field('zip_codes');?></p>
					</div> <!--end col-->

				</div> <!--end row-->



				<div class="row"> <!--Row: Neighborhoods and Historic Districts-->

					<div class="col">
						<p>Neighborhoods: <?php the_field('neighborhoods');?></p>
					</div> <!--end col-->

					<div class="col">
						<p>Historic Districts: <?php the_field('historic_districts');?></p>
					</div> <!--end col-->

				</div> <!--end row-->


				<div class="row"> <!--Row: Housing Units per Acre, Known For -->

					<div class="col">
							<p>Housing Units Per Acre: <?php the_field('housing_units_acre');?></p>
					</div> <!--end col-->

					<div class="col">
						<p>Known For: <?php the_field('known_for');?></p>
					</div> <!--end col-->

				</div> <!--end row-->

			</section> <!-- end quick stats -->





		<section class="neighborhood-assoc-info">

			<div class="row">
				<div class="col">
					<h3>Neighborhood Association Info</h3>
				</div>
			</div>

			<div class="row"> <!--row for home info-->
				<div class="col">
							<p><?php the_field('neighborhood_association');?></p>
				</div>
			</div>

			<div class="row"> <!--row for home info-->
				<div class="col">
						<p><?php the_field('na_website');?></p>
				</div>
			</div>

			<div class="row"> <!--row for home info-->
				<div class="col">
							<p>Contact: <?php the_field('contact_name');?></p>
				</div>
			</div>

			<div class="row"> <!--row for home info-->
				<div class="col">
								<p><?php the_field('phone_number');?></p>
				</div>
			</div>

	</section> <!-- end neighborhood-assoc-info -->









	</div><!--end container -->


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
