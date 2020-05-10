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

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content" id="full-width-content">

			<?php
				get_template_part( 'template-parts/entry-header' );
			?>

	<!-- <div id="full-width-content"> -->


			<div class="container">

				<!-- SECTION -->
				<section>

					<!-- EVENT TYPE -->
					<?php
						$event_type =  get_field('event_type');
						if($event_type != "" ){?>
							<!-- SHOW THE EVENT TYPE IF IT EXISTS -->
							<div class="box"><!-- ============== -->
									<p><?php the_field('event_type');?></p>
							</div><!-- ============== -->
						<?php } ?>

						<!-- SPONSOR -->
						<?php
							$sponsor =  get_field('sponsor');
							if($event_type != "" ){?>
								<!-- SHOW THE EVENT TYPE IF IT EXISTS -->
								<div class="box"><!-- ============== -->
										<p>Sponsored by <?php the_field('sponsor');?></p>
								</div><!-- ============== -->
							<?php } ?>

						<!-- EVENT DESCRIPTION -->
						<?php
							$description =  get_field('description');
							if($event_type != "" ){?>
								<!-- SHOW THE EVENT TYPE IF IT EXISTS -->
								<div class="box"><!-- ============== -->
										<p><?php the_field('description');?></p>
								</div><!-- ============== -->
							<?php } ?>


							<!-- DATE -->
							<?php
								$date =  get_field('date');
								if($date != "" ){?>
									<!-- SHOW IT IF IT EXISTS -->
									<div class="box"><!-- ============== -->
											<p><?php the_field('date');?></p>
									</div><!-- ============== -->
								<?php } ?>

								<!-- START TIME -->
								<?php
									$start_time =  get_field('start_time');
									if($start_time != "" ){?>
										<!-- SHOW IT IF IT EXISTS -->
										<div class="box"><!-- ============== -->
												<p>Starts: <?php the_field('start_time');?></p>
										</div><!-- ============== -->
									<?php } ?>

									<!-- END TIME -->
									<?php
										$end_time =  get_field('end_time');
										if($end_time != "" ){?>
											<!-- SHOW IT IF IT EXISTS -->
											<div class="box"><!-- ============== -->
													<p>Ends: <?php the_field('end_time');?></p>
											</div><!-- ============== -->
										<?php } ?>


										<!-- WEBSITE -->
										<?php
											$website =  get_field('website');
											if($website != "" ){?>
												<!-- SHOW IT IF IT EXISTS -->
												<div class="box"><!-- ============== -->
														<p><span class="hyperlink"><?php the_field('website');?></span></p>
												</div><!-- ============== -->
											<?php } ?>

				</section>



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

			// get_template_part( 'template-parts/navigation' );
		//get_template_part( 'template-parts/navigation-neighborhoodProfile' );
		//get_template_part( 'template-parts/navigation-neighborhoodProfile', get_post_type() );

		//<?php

		// $the_query = new WP_Query( array( 'category_name' => 'city-living-essentials' ) );

		$the_query = new WP_Query( array(
								'category_name' => 'neighborhood-profile',
								'orderby' => 'title',
								'order'   => 'ASC',
							));

		//if ( have_posts() ) {
		if ( $the_query->have_posts() ) {
			//query_posts('posts_per_page=3');

			?>

			<h3 class="explore">Explore Dayton's Neighborhoods</h3>
			<ul class="neighborhood-profile-links"><?php

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				//get_template_part( 'template-parts/content', get_post_type() );
				//the_excerpt();
				//get_template_part('template-parts/post-name-link');
				//get_template_part( 'template-parts/post-name-link' );
				//the_title( '<h4 class="entry-title">', '</h4>' );
				the_title( '<li class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></li>' );
			}//end while

				?></ul><?php

		}//end if
		//? >



	}//end is_single


	?>

</article><!-- .post -->
