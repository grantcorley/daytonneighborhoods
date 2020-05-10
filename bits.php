<!-- bits and pices... use as needed ... -->


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
