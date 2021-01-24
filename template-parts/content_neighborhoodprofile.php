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

	<div class="post-inner neighborhood-profile <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content" id="full-width-content">

			<?php

			if ( ! is_search() ) {

				if ( has_post_thumbnail() ){
					get_template_part( 'template-parts/featured-image' );
				}

				else{
					?>

					<figure class="featured-media">
							<div class="featured-media-inner ">
									<img width="1200" height="500" src="<?php echo get_stylesheet_directory_uri();?>/images/logo_1980x1000_alt.gif" class="attachment-featured size-featured wp-post-image" alt="Dayton Neighborhoods logo">
							</div><!-- .featured-media-inner -->
					</figure>

					<?php
				}

			}
				get_template_part( 'template-parts/entry-header' );

			?>

	<!-- <div id="full-width-content"> -->

			<div class="container">

				<!-- FLEXBOX LAYOUT: WALK SCORES -->
				<section class="walk-scores">

					<!-- WALK SCORE -->
					<?php
						$walk_score =  get_field('walk_score');
						if($walk_score != "" ){?>
							<!-- SHOW THE WALK SCORE IF IT EXISTS -->
							<div class="box"><!-- ============== -->
								<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_pedestrian.svg" alt="walk score icon">
								<h4>Walk Score *</h4>
									<p class="icon-stat"><?php the_field('walk_score');?> / 100</p>
							</div><!-- ============== -->
						<?php } ?>

						<!-- BIKE SCORE -->
						<?php
							$bike_score =  get_field('bike_score');
							if($bike_score != "" ){?>
								<!-- SHOW THE BIKE SCORE IF IT EXISTS -->
								<div class="box"><!-- ============== -->
									<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_bicycle.svg" alt="bike score icon">
									<h4>Bike Score *</h4>
										<p class="icon-stat"><?php the_field('bike_score');?> / 100</p>
								</div><!-- ============== -->
							<?php } ?>


							<!-- TRANSIT SCORE -->
							<?php
								$transit_score =  get_field('transit_score');
								if($transit_score != "" ){?>
									<!-- SHOW THE TRANSIT SCORE IF IT EXISTS -->
									<div class="box"><!-- ============== -->
										<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_transit.svg" alt="transit score icon">
										<h4>Transit Score *</h4>
											<p class="icon-stat"><?php the_field('transit_score');?> / 100</p>
									</div><!-- ============== -->
								<?php } ?>

				</section>



				<!-- FLEXBOX LAYOUT: HOME INFO -->
				<section class="home-info">

					<!-- AVG HOME VALUES -->
					<?php
						$home_value =  get_field('avg_home_value');
						if($home_value != "" ){?>
							<!-- SHOW THE HOME VALUES IF THEY EXISTS -->
							<div class="box"><!-- ============== -->
								<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_money.svg" alt="House value icon">
								<h4>Average Home Value</h4>
								<p class="icon-stat">$<?php the_field('avg_home_value');?></p>
							</div><!-- ============== -->
						<?php } ?>


						<!-- AVG HOUSE SIZE -->
						<?php
							$house_size =  get_field('avg_house_size');
							if($house_size != "" ){?>
								<!-- SHOW THE HOME SIZE IF THEY EXISTS -->
								<div class="box"><!-- ============== -->
									<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_house.svg" alt="House size icon">
									<h4>Average House Size</h4>
								<p class="icon-stat"><?php the_field('avg_house_size');?> sq. ft.</p>
								</div><!-- ============== -->
							<?php } ?>


							<!-- AVG LOT SIZE -->
							<?php
								$lot_size =  get_field('avg_lot_size');
								if($lot_size != "" ){?>
									<!-- SHOW THE LOT SIZE IF IT EXISTS -->
									<div class="box"><!-- ============== -->
										<img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/np_icon_tree.svg" alt="Lot size icon">
										<h4>Average Lot Size</h4>
									<p class="icon-stat"><?php the_field('avg_lot_size');?> sq. ft.</p>
									</div><!-- ============== -->
								<?php } ?>



				</section>




				<!--pics row 1-->
				<div class="row pictures">

					<!--show first column/photo if exists-->
					<?php
							$photo_01 =  get_field('photo_01');
							if($photo_01 != "" ){ ?>
								<div class="col-sm">
										<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_01');?>" class="img-fluid" alt="<?php the_field('photo_01_description');?>">
								</div>
					<?php } ?>


					<!--show second column/photo if exists-->
					<?php
							$photo_02 =  get_field('photo_02');
							if($photo_02 != "" ){ ?>
								<div class="col-sm">
										<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_02');?>" class="img-fluid" alt="<?php the_field('photo_02_description');?>">
								</div>
					<?php } ?>


					<!--show third column/photo if exists-->
					<?php
							$photo_03 =  get_field('photo_03');
							if($photo_03 != "" ){ ?>
								<div class="col-sm">
										<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_03');?>" class="img-fluid" alt="<?php the_field('photo_03_description');?>">
								</div>
					<?php } ?>
				</div>


				<!-- ======= -->

				<?php
						//only show the Description & Quick Stats section if a Description has been filled out
						$neighborhood_description = get_field('neighborhood_description');
						//$neighborhood_description = the_content();
						if($neighborhood_description != "" ){ ?>


				<section class="container description-quick-stats">

						<div class="row">

								<div class="col-lg-8 description">
										<!-- <p><strong>Success!</strong></p>  --> 
											<?php 
											//the_field('neighborhood_description');
											//$neighborhood_description;
											the_content();
											?>
											
										
								</div>

								<div class="col-lg-4 quick-stats">

											<h4 class="q-stats">Quick Stats</h4>

											<div class="content">

												<h4 class="neighborhood"><?php the_field('neighborhood');?></h4>

												<!--Show Zip Code(s) if exists-->
												<?php
														$zip_codes =  get_field('zip_codes');
														if($zip_codes != "" ){?>
																<p><span class="label">Zip Code(s)</span>
																	<?php the_field('zip_codes');?></p>
												<?php } ?>


											<!--Show Neighborhood(s) if exists-->
											<?php
													$neighborhoods =  get_field('neighborhoods');
													if($neighborhoods != "" ){?>
															<p><span class="label">Neighborhood(s)</span>
															<?php the_field('neighborhoods');?></p>
											<?php } ?>


											<!--Show Historic District(s) if exists-->
											<?php
													$historic_districts =  get_field('historic_districts');
													if($historic_districts != "" ){?>
															<p><span class="label">Historic District(s)</span>
															<?php the_field('historic_districts');?></p>
											<?php } ?>


											<!--Show Housing Units Per Acre if exists-->
											<?php
													$units_per_acre =  get_field('housing_units_acre');
													if($units_per_acre != "" ){?>
														<p><span class="label">Housing Units/Acre</span>
														<?php the_field('housing_units_acre');?></p>
											<?php } ?>


											<!--Show Known For if exists-->
											<?php
													$known_for =  get_field('known_for');
													if($known_for != "" ){?>
														<p><span class="label">Known For</span>
														<?php the_field('known_for');?></p>
											<?php } ?>

										</div> <!-- end content -->

							</div><!-- end col -->

						</div> <!--end row-->

				</section>

					<?php } ?>

				<!-- ======= -->





					<!--pics row 2-->
					<div class="row pictures">

						<!--show first column/photo if exists-->
						<?php
								$photo_04 =  get_field('photo_04');
								if($photo_04 != "" ){ ?>
									<div class="col-sm">
											<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_04');?>" class="img-fluid" alt="<?php the_field('photo_04_description');?>">
									</div>
						<?php } ?>


						<?php
								$photo_05 =  get_field('photo_05');
								if($photo_05 != "" ){ ?>
									<div class="col-sm">
											<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_05');?>" class="img-fluid" alt="<?php the_field('photo_05_description');?>">
									</div>
						<?php } ?>


						<?php
								$photo_06 =  get_field('photo_06');
								if($photo_06 != "" ){ ?>
									<div class="col-sm">
											<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('photo_06');?>" class="img-fluid" alt="<?php the_field('photo_06_description');?>">
									</div>
						<?php } ?>


					</div>


					<div class="row map">
							<div class="col-sm">
						<?php
								$map =  get_field('map');
								if($map != "" ){ ?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('map');?>" class="img-fluid" alt="<?php the_field('map_description');?>">
								<?php } ?>
							</div>
					</div><!--end map row-->


								<section class="neighborhood-assoc-info">

									<!-- Check if Neighborhood Association exists -->
									<?php
											$neighborhood_assoc =  get_field('neighborhood_association');
											if($neighborhood_assoc != "" ){?>

											<!-- <h4>Neighborhood Association</h4> -->
											<h4><?php the_field('neighborhood_association');?></h4>

												<!--show Website if exists-->
												<?php
														$website =  get_field('na_website');
														if($website != "" ){ ?>
															<span class="hyperlink"><?php the_field('na_website');?></span><br/>
												<?php } ?>

												<!--show Contact if exists-->
												<?php
														$the_contact =  get_field('contact_name');
														if($the_contact != "" ){ ?>
														Contact: <?php the_field('contact_name');?><br/>
												<?php } ?>


												<!--show Phone Number if exists-->
												<?php
														$phone_number =  get_field('phone_number');
														if($phone_number != "" ){ ?>
														<?php the_field('phone_number');?><br/>
												<?php } ?>

												<!--show Phone Number if exists-->
												<?php
														$contact_email =  get_field('contact_email');
														if($contact_email != "" ){ ?>
														<?php the_field('contact_email');?><br/>
												<?php } ?>

											</p>

											<?php }

											else { ?>
													<p>Contact the City of Dayton for more neighborhood information, or for help starting a neighborhood association.<p>
											<?php } ?>


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

 	//ALL neighborhood links used to be here... now moved to homepage and bits.php


	?>

</article><!-- .post -->
