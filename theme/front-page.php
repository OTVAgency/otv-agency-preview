<?php
/**
 * Front page template — OTV Agency relaunch landing page.
 *
 * @package OTV_Agency
 */

get_header();
?>

<main id="main">
	<?php
	$sections = array(
		'hero',
		'proof-strip',
		'services',
		'testimonial',
		'pricing',
		'about',
		'contact',
	);

	foreach ( $sections as $section ) {
		otv_agency_render_pattern( $section );
	}
	?>
</main>

<?php
get_footer();
