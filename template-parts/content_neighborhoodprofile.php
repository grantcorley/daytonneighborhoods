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

				<!-- FLEXBOX LAYOUT: WALK SCORES -->
				<section class="walk-scores">
							<div class="box">

								<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_pedestrian.svg" alt="walk score icon">

								<h4>Walk Score*</h4>
									<p class="icon-stat"><?php the_field('walk_score');?>/100</p>
							</div>
								<div class="box">
									<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_bicycle.svg" alt="bike score icon">
								<h4>Bike Score*</h4>
									<p class="icon-stat"><?php the_field('bike_score');?>/100</p>
							</div>
								<div class="box">
										<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_transit.svg" alt="transit score icon">
								<h4>Transit Score*</h4>
									<p class="icon-stat"><?php the_field('transit_score');?>/100</p>
							</div>
				</section>


				<!-- FLEXBOX LAYOUT: HOME INFO -->
				<section class="home-info">
							<div class="box">
									<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_money.svg" alt="House value icon">
								<h4>Average Home Value</h4>
									<p class="icon-stat">$<?php the_field('avg_home_value');?></p>
							</div>
								<div class="box">
										<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_house.svg" alt="House size icon">
								<h4>Average House Size</h4>
									<p class="icon-stat"><?php the_field('avg_house_size');?> sq. ft.</p>
							</div>
								<div class="box">
										<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_tree.svg" alt="Lot size icon">
								<h4>Average Lot Size</h4>
									<p class="icon-stat"><?php the_field('avg_lot_size');?> sq. ft.</p>
							</div>
				</section>





				<!--pics row 1-->
				<div class="row pictures">
					<div class="col-sm">
							<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_01');?>" class="img-fluid" alt="<?php the_field('photo_01_description');?>">
					</div>
					<div class="col-sm">
						<!--flag-->
							<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_02');?>" class="img-fluid" alt="<?php the_field('photo_02_description');?>">
					</div>
					<div class="col-sm">
						<!--donuts-->
							<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_03');?>" class="img-fluid" alt="<?php the_field('photo_03_description');?>">
					</div>
				</div>


				<section class="description-quick-stats">

						<div class="description">
								<p><?php the_field('neighborhood_description');?></p>
						</div>

						<div class="quick-stats">
							<h4><span class="q-stats">Quick Stats:</span> <br/> <?php the_field('neighborhood');?></h4>

							<p><span class="label">Zip Code(s):</span>
								<?php the_field('zip_codes');?></p>

							<p><span class="label">Neighborhoods(s):</span>
								<?php the_field('neighborhoods');?></p>

							<p><span class="label">Historic District(s):</span>
							<?php the_field('historic_districts');?></p>

							<p><span class="label">Housing Units Per Acre:</span>
							<?php the_field('housing_units_acre');?></p>

							<p><span class="label">Known For:</span>
							<?php the_field('known_for');?></p>
						</div>

				</section> <!-- end description-quick-stats -->



					<!--pics row 2-->
					<div class="row pictures">
						<div class="col-sm">
							<!-- <img src="< ?php echo get_stylesheet_directory_uri(); ?>/images/OND_library.jpg" class="img-fluid" alt="Kayak shop"> -->
								<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_04');?>" class="img-fluid" alt="<?php the_field('photo_04_description');?>">
						</div>
						<div class="col-sm">
							<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_05');?>" class="img-fluid" alt="<?php the_field('photo_05_description');?>">
						</div>
						<div class="col-sm">
							<!--church-->
						<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_06');?>" class="img-fluid" alt="<?php the_field('photo_06_description');?>">
						</div>
					</div>


		<section class="neighborhood-assoc-info">

					<h4>Neighborhood Association</h4>
					<p><strong><?php the_field('neighborhood_association');?></strong><br/>
					<?php the_field('na_website');?><br/>
					Contact: <?php the_field('contact_name');?><br/>
					<?php the_field('phone_number');?></p>

	</section> <!-- end neighborhood-assoc-info -->


	<p class="footnote">* All scores with asterisk are from <a href="https://www.walkscore.com/OH/Dayton">Walk Score</a></p>




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
