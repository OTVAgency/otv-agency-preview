<?php
/**
 * Lightweight SEO output. Steps aside when an SEO plugin is active.
 *
 * @package OTV_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function otv_agency_seo_plugin_active() {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' );
}

function otv_agency_seo_home_title() {
	return 'OTV Agency | Web Design, Branding & Social Content Agency';
}

function otv_agency_seo_home_description() {
	return 'OTV Agency builds websites, brands, social content, and video that turn content into customers. See our work and start your project today.';
}

/**
 * Unique document title on the front page.
 */
add_filter(
	'pre_get_document_title',
	static function ( $title ) {
		if ( is_front_page() && ! otv_agency_seo_plugin_active() ) {
			return otv_agency_seo_home_title();
		}
		return $title;
	}
);

/**
 * Meta description, canonical, Open Graph, Twitter, JSON-LD.
 */
function otv_agency_seo_head() {
	if ( otv_agency_seo_plugin_active() ) {
		return;
	}

	$is_home = is_front_page();
	if ( $is_home ) {
		$title = otv_agency_seo_home_title();
		$desc  = otv_agency_seo_home_description();
		$url   = home_url( '/' );
	} elseif ( is_singular() ) {
		$post  = get_queried_object();
		$title = wp_get_document_title();
		$desc  = has_excerpt( $post ) ? get_the_excerpt( $post ) : wp_trim_words( wp_strip_all_tags( strip_shortcodes( $post->post_content ) ), 28, '…' );
		$url   = get_permalink( $post );
		if ( 'intake' === $post->post_name ) {
			$desc = 'Start a project with OTV Agency. Tell us about your business, goals, and timeline, and we will follow up with next steps.';
		}
	} else {
		$title = wp_get_document_title();
		$desc  = otv_agency_seo_home_description();
		$url   = '';
	}
	$desc  = trim( $desc ) ? $desc : otv_agency_seo_home_description();
	$image = get_template_directory_uri() . '/assets/images/og-image.jpg';

	echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
	if ( $url && ! is_singular() ) {
		echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n"; // Singular pages get core rel_canonical.
	}
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:site_name" content="OTV Agency">' . "\n";
	echo '<meta property="og:locale" content="en_US">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
	if ( $url ) {
		echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
	}
	echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
	echo '<meta property="og:image:width" content="1200"><meta property="og:image:height" content="630">' . "\n";
	echo '<meta property="og:image:alt" content="OTV Agency — Start. Brand. Grow.">' . "\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '">' . "\n";
	echo '<meta name="twitter:image" content="' . esc_url( $image ) . '">' . "\n";

	if ( $is_home ) {
		$home  = home_url( '/' );
		$graph = array(
			'@context' => 'https://schema.org',
			'@graph'   => array(
				array(
					'@type'       => 'Organization',
					'@id'         => $home . '#organization',
					'name'        => 'OTV Agency',
					'url'         => $home,
					'logo'        => get_template_directory_uri() . '/assets/images/logos/otv-header-logo.png',
					'email'       => 'info@otv.agency',
					'description' => $desc,
					'slogan'      => 'Start. Brand. Grow.',
					'address'     => array(
						'@type'           => 'PostalAddress',
						'addressLocality' => 'Hollywood',
						'addressRegion'   => 'FL',
						'addressCountry'  => 'US',
					),
					'contactPoint' => array(
						'@type'       => 'ContactPoint',
						'contactType' => 'sales',
						'email'       => 'info@otv.agency',
						'url'         => otv_agency_intake_url(),
					),
					'knowsAbout'  => array( 'Web design', 'E-commerce', 'Branding', 'Social media content', 'Video production', 'Podcast production' ),
				),
				array(
					'@type'     => 'WebSite',
					'@id'       => $home . '#website',
					'url'       => $home,
					'name'      => 'OTV Agency',
					'publisher' => array( '@id' => $home . '#organization' ),
					'inLanguage' => 'en-US',
				),
			),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $graph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'otv_agency_seo_head', 2 );
