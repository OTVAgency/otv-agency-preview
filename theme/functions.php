<?php
/**
 * OTV Agency theme functions.
 *
 * @package OTV_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'OTV_AGENCY_VERSION', '1.0.1' );
define( 'OTV_AGENCY_INTAKE_FORM', 'https://forms.clickup.com/9014644998/f/8cn1486-4294/ST5JF7V1I3S1JQK26L' );

/**
 * URL for the dedicated intake form page.
 *
 * @return string
 */
function otv_agency_intake_url() {
	$page = get_page_by_path( 'intake' );
	if ( $page instanceof WP_Post ) {
		return get_permalink( $page );
	}
	return home_url( '/intake/' );
}

/**
 * Anchor link to a homepage section.
 *
 * @param string $section Section id without hash.
 * @return string
 */
function otv_agency_section_url( $section ) {
	$section = ltrim( $section, '#' );
	if ( is_front_page() ) {
		return '#' . $section;
	}
	return home_url( '/#' . $section );
}

/**
 * Theme setup.
 */
function otv_agency_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'otv-agency' ),
		)
	);
}
add_action( 'after_setup_theme', 'otv_agency_setup' );

/**
 * Elementor compatibility when active.
 */
function otv_agency_elementor_support() {
	if ( did_action( 'elementor/loaded' ) ) {
		add_theme_support( 'elementor' );
	}
}
add_action( 'after_setup_theme', 'otv_agency_elementor_support' );

/**
 * Enqueue front-end assets.
 */
function otv_agency_enqueue_assets() {
	$theme_uri = get_template_directory_uri();

	wp_enqueue_style(
		'otv-agency-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Instrument+Serif:ital@0;1&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'otv-agency-main',
		$theme_uri . '/assets/css/main.css',
		array( 'otv-agency-fonts' ),
		OTV_AGENCY_VERSION
	);

	wp_enqueue_script(
		'otv-agency-main',
		$theme_uri . '/assets/js/main.js',
		array(),
		OTV_AGENCY_VERSION,
		true
	);

	wp_enqueue_script(
		'clickup-forms-embed',
		'https://app-cdn.clickup.com/assets/js/forms-embed/embed-form-v1.js',
		array(),
		null,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'otv_agency_enqueue_assets' );

/**
 * Output favicon link tags.
 */
function otv_agency_favicon() {
	$uri = get_template_directory_uri();
	echo '<link rel="icon" href="' . esc_url( $uri . '/assets/images/favicon.svg' ) . '" type="image/svg+xml">' . "\n";
	echo '<meta name="description" content="' . esc_attr__( 'OTV Agency — boutique creative and systems studio. Web, social, video, automation, and print for businesses ready to grow bold and scale smart.', 'otv-agency' ) . '">' . "\n";
}
add_action( 'wp_head', 'otv_agency_favicon', 1 );

/**
 * Resolve a portfolio logo URL if one exists for the slug.
 *
 * @param string $slug Portfolio item slug.
 * @return string
 */
function otv_agency_portfolio_logo_url( $slug ) {
	$dir = get_template_directory() . '/assets/images/portfolio/logos/';
	$uri = get_template_directory_uri() . '/assets/images/portfolio/logos/';

	foreach ( array( 'svg', 'png', 'jpg', 'jpeg', 'webp' ) as $ext ) {
		if ( file_exists( $dir . $slug . '.' . $ext ) ) {
			return $uri . $slug . '.' . $ext;
		}
	}

	return '';
}

/**
 * Resolve a portfolio screenshot URL if one exists for the slug.
 *
 * @param string $slug Portfolio item slug.
 * @return string
 */
function otv_agency_portfolio_image_url( $slug ) {
	$dir = get_template_directory() . '/assets/images/portfolio/';
	$uri = get_template_directory_uri() . '/assets/images/portfolio/';

	foreach ( array( 'png', 'jpg', 'jpeg', 'webp' ) as $ext ) {
		if ( file_exists( $dir . $slug . '.' . $ext ) ) {
			return $uri . $slug . '.' . $ext;
		}
	}

	return '';
}

/**
 * Render a theme pattern partial.
 *
 * @param string $name Pattern file name without extension.
 */
function otv_agency_render_pattern( $name ) {
	$path = get_template_directory() . '/patterns/' . $name . '.php';

	if ( ! file_exists( $path ) ) {
		return;
	}

	$uri = get_template_directory_uri();
	$home_url   = home_url( '/' );
	$intake_url = otv_agency_intake_url();
	include $path;
}

/**
 * Capture pattern HTML for block pattern registration.
 *
 * @param string $name Pattern file name without extension.
 * @return string
 */
function otv_agency_get_pattern_content( $name ) {
	ob_start();
	otv_agency_render_pattern( $name );
	return (string) ob_get_clean();
}

/**
 * Register block pattern category and patterns.
 */
function otv_agency_register_block_patterns() {
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	register_block_pattern_category(
		'otv-agency',
		array(
			'label' => __( 'OTV Agency', 'otv-agency' ),
		)
	);

	$patterns = array(
		'header'      => __( 'Site Header', 'otv-agency' ),
		'hero'        => __( 'Hero', 'otv-agency' ),
		'services'    => __( 'Services Grid', 'otv-agency' ),
		'pricing'     => __( 'Pricing Tiers', 'otv-agency' ),
		'portfolio'   => __( 'Portfolio Grid', 'otv-agency' ),
		'testimonial' => __( 'Testimonial', 'otv-agency' ),
		'about'       => __( 'About Section', 'otv-agency' ),
		'contact'     => __( 'Contact Section', 'otv-agency' ),
		'footer'      => __( 'Site Footer', 'otv-agency' ),
	);

	foreach ( $patterns as $slug => $title ) {
		register_block_pattern(
			'otv-agency/' . $slug,
			array(
				'title'       => $title,
				'categories'  => array( 'otv-agency' ),
				'content'     => otv_agency_get_pattern_content( $slug ),
				'viewportWidth' => 1400,
			)
		);
	}
}
add_action( 'init', 'otv_agency_register_block_patterns' );
