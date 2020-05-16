<!-- bits and pices... use as needed ... -->


<!-- here's the original NP Description/Stats scaffolding -->

<section class="description-quick-stats">

		<div class="description">
				<p><?php the_field('neighborhood_description');?></p>
		</div>


		<div class="quick-stats">
			<h4 class="q-stats">Quick Stats</h4>

			<div class="content">

				<h4><?php the_field('neighborhood');?></h4>

				<!--Show Zip Code(s) if exists-->
				<?php
						$zip_codes =  get_field('zip_codes');
						if($zip_codes != "" ){?>
								<p><span class="label">Zip Code(s):</span>
									<?php the_field('zip_codes');?></p>
				<?php } ?>


			<!--Show Neighborhood(s) if exists-->
			<?php
					$neighborhoods =  get_field('neighborhoods');
					if($neighborhoods != "" ){?>
							<p><span class="label">Neighborhoods(s):</span>
							<?php the_field('neighborhoods');?></p>
			<?php } ?>


			<!--Show Historic District(s) if exists-->
			<?php
					$historic_districts =  get_field('historic_districts');
					if($historic_districts != "" ){?>
							<p><span class="label">Historic District(s):</span>
							<?php the_field('historic_districts');?></p>
			<?php } ?>



			<!--Show Housing Units Per Acre if exists-->
			<?php
					$units_per_acre =  get_field('housing_units_acre');
					if($units_per_acre != "" ){?>
						<p><span class="label">Housing Units Per Acre:</span>
						<?php the_field('housing_units_acre');?></p>
			<?php } ?>


			<!--Show Known For if exists-->
			<?php
					$known_for =  get_field('known_for');
					if($known_for != "" ){?>
						<p><span class="label">Known For:</span>
						<?php the_field('known_for');?></p>
			<?php } ?>

		</div> <!-- end content -->

	</div><!--end quick stats-->

</section> <!-- end description-quick-stats -->

<!-- end -->

<div class="features">
<!-- FEATURED POST: NEWS ITEM -->

<?php

$args = array(
	'orderby'        => 'date',
	'posts_per_page' => '1',
	'category_name' => 'news',
);

$query = new WP_Query( $args );

$query->the_post();
get_template_part( 'template-parts/content', get_post_type() );
//get_template_part( 'template-parts/content_neighborhoodprofile', get_post_type() );

?>


<!-- FEATURED POST: EVENTS ITEM -->
<?php


$args = array(
	'orderby'        => 'date',
	'posts_per_page' => '1',
	'category_name' => 'events',
);

$query = new WP_Query( $args );

$query->the_post();
get_template_part( 'template-parts/content_event', get_post_type() );

?>

</div><!--end features-->
