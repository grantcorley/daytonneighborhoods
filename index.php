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


<!-- SLIDESHOW -->

<div class="slideshow-holder">

	<div class="message-holder">
		<h1>Home, Sweet Home.</h1>
	</div>

	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/WestwoodMural_1980x1000.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/onThePorch.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
      </div>
    </div>
    <div class="carousel-item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/belmontHome_featuredImg.jpg" class="d-block w-100" alt="...">
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
				<!-- <h2>Home, Sweet Home</h2> -->
				<p>Affordable. Convenient. Friendly.<br/>
				<span class="line-2">You'll be proud to come home to Dayton.</span>
				</p>
			</div>
	<!-- </div> -->




	<!-- FEATURED POST: NEIGHBORHOOD PROFILE -->
	<article class="neighborhood_profile">
		<?php

		$args = array(
			'orderby'        => 'rand',
			'posts_per_page' => '1',
			'category_name' => 'neighborhood-profile',
		);

		$query = new WP_Query( $args );
		$query->the_post();
		// get_template_part( 'template-parts/content', get_post_type() );
		get_template_part( 'template-parts/content_neighborhoodprofile', get_post_type() );

		?>
	</article>



<!-- FEATURES SECTION -> Fall below the Featured Neighborhood -->
<!-- 2-up at large screen sizes -->

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
	get_template_part( 'template-parts/content', get_post_type() );

	?>

</div><!--end features-->

</main><!-- #site-content -->

<!-- remove footer widgets for now
< ? php ////get_template_part( 'template-parts/footer-menus-widgets' ); ? >
-->

<?php
get_footer();
