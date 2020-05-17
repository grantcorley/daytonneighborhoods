<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" class="homepage" role="main">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {

		global $wp_query;

		// $args = array(
	  //   'orderby' => 'title',
	  //   'order'   => 'ASC',
		// );

	//global $wp_query = new WP_Query($args);

		//$the_query = new WP_Query($args);

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts &&  !is_home()  ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( is_search() ) {
		?>



		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php

// 	$args = array(
// 	  'orderby' => 'title',
// 	  'order'   => 'ASC',
// 	);
//
// $cat_query = new WP_Query($args);

	if ( have_posts() && !is_home() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			//here's the post
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<!-- ======= NEW HOMEPAGE CODE ========== -->
	<?php
	if ( is_home() ) {
		?>

<!-- SLIDESHOW -->

<div class="slideshow-holder">

<div class="message-holder">
	<h1 class="fade-in">Home, Sweet <span class="home">Home.</span></h1>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
	<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/WestwoodMural_1980x1000.jpg" class="d-block w-100" alt="Artists painting mural in Dayton, OH">
		<div class="carousel-caption d-none d-md-block">
			<!-- <h5>First slide label</h5>
			<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
		</div>
	</div>
	<div class="carousel-item">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/donuts_slideshow.jpg" class="d-block w-100" alt="Bakery in Old North Dayton, OH">
		<div class="carousel-caption d-none d-md-block">
			<!-- <h5>Second slide label</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
		</div>
	</div>
	<div class="carousel-item">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/belmontHome_featuredImg.jpg" class="d-block w-100" alt="Charming house in Dayton, OH">
		<div class="carousel-caption d-none d-md-block">
			<!-- <h5>Third slide label</h5>
			<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
		</div>
	</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>
</div>

</div> <!--end slideshow-holder-->


<!-- END SLIDESHOW -->

<!-- <div class="container"> -->
		<div class="welcome-message">
			<p>Affordable. Convenient. Friendly.<br/>
			<span class="line-2">You'll be glad to come home to Dayton.</span>
			</p>
		</div>
<!-- </div> -->


<!-- callouts -->

<div class="container homepage-callouts">
  <div class="row">
			<div class="callout col-sm box-1">
      <h2><a href="<?php echo esc_url( home_url( '/buying-renting/' ) ); ?>">Buy & Rent</a></h2>
			<p>Find your perfect home</p>
			<a href="<?php echo esc_url( home_url( '/buying-renting/' ) ); ?>"><div class="callout-button">Start Here</div></a>
    </div>
	</a>
    <div class="callout col-sm box-2">
      <h2><a href="<?php echo esc_url( home_url( '/city-living-essentials/' ) ); ?>">City Living</a></h2>
			<p>Resources for living in Dayton</p>
			<a href="<?php echo esc_url( home_url( '/city-living-essentials/' ) ); ?>"><div class="callout-button">Start Here</div></a>
    </div>
    <div class="callout col-sm box-3">
      <h2><a href="<?php echo esc_url( home_url( '/financial-incentives/' ) ); ?>">Financial Incentives</a></h2>
			<p>For buyers and renters</p>
			<a href="<?php echo esc_url( home_url( '/financial-incentives/' ) ); ?>"><div class="callout-button">Start Here</div></a>
    </div>
  </div>

	<div class="row">
		<div class="callout col-sm box-4">
		<h2><a href="<?php echo esc_url( home_url( '/neighborhood-profiles/' ) ); ?>">Neighborhood Profiles</a></h2>
		<p>Explore Dayton's diverse neighborhoods</p>
		<a href="<?php echo esc_url( home_url( '/neighborhood-profiles/' ) ); ?>"><div class="callout-button">Start Here</div></a>
	</div>
	</div><!-- end row	 -->

</div>


<!-- FEATURED POST: NEIGHBORHOOD PROFILE -->
<article class="neighborhood_profile">
	<?php
				$args = array(
					'orderby' => 'rand',
					'category_name' => 'neighborhood-profile',
					'posts_per_page' => '1',
				);

				$query = new WP_Query( $args );
				$query->the_post();
				get_template_part( 'template-parts/content_neighborhoodprofile', get_post_type() );
				set_transient( 'temp_cached_data', $query, 12 * HOUR_IN_SECONDS );
				wp_reset_postdata();
	?>
</article>


<!-- FEATURES SECTION -> Fall below the Featured Neighborhood -->
<!-- 2-up at large screen sizes -->


<?php
	}//end if( is_home() )
	?>

	<!-- < ?php get_template_part( 'template-parts/pagination' ); ?> -->

</main><!-- #site-content -->



<?php
get_footer();
