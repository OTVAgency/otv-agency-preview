<?php
/**
 * Header pattern partial.
 *
 * @package OTV_Agency
 * @var string $uri Theme directory URI.
 * @var string $home_url Site home URL.
 * @var string $intake_url Intake form page URL.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'otv-agency' ); ?></a>
<header class="site-header<?php echo is_front_page() ? '' : ' is-scrolled'; ?>" id="top">
	<div class="container header-inner">
		<a class="brand" href="<?php echo esc_url( is_front_page() ? '#top' : $home_url ); ?>" aria-label="<?php esc_attr_e( 'OTV Agency home', 'otv-agency' ); ?>">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/logos/OTV-Agency-Horizontal.png" alt="OTV Agency" class="brand-logo brand-logo--light" width="180" height="70">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/logos/OTV-Agency-HorizontalWHT.png" alt="" class="brand-logo brand-logo--dark" width="180" height="70" aria-hidden="true">
		</a>
		<button class="nav-toggle" aria-expanded="false" aria-controls="site-nav" aria-label="<?php esc_attr_e( 'Open menu', 'otv-agency' ); ?>">
			<span></span><span></span><span></span>
		</button>
		<nav id="site-nav" class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'otv-agency' ); ?>">
			<a href="<?php echo esc_url( otv_agency_section_url( 'work' ) ); ?>"><?php esc_html_e( 'Work', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( otv_agency_section_url( 'services' ) ); ?>"><?php esc_html_e( 'Services', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( otv_agency_section_url( 'pricing' ) ); ?>"><?php esc_html_e( 'Pricing', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( otv_agency_section_url( 'about' ) ); ?>"><?php esc_html_e( 'About', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( $intake_url ); ?>" class="nav-cta"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></a>
		</nav>
		<button type="button" class="theme-toggle" data-theme-toggle aria-pressed="false" aria-label="<?php esc_attr_e( 'Switch to dark theme', 'otv-agency' ); ?>">
			<svg class="icon-moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 14.3A8.5 8.5 0 0 1 9.7 3 7 7 0 1 0 21 14.3z"/></svg>
			<svg class="icon-sun" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm0-16v2m0 16v2M4.2 4.2l1.4 1.4m12.8 12.8 1.4 1.4M2 12h2m16 0h2M4.2 19.8l1.4-1.4m12.8-12.8 1.4-1.4"/></svg>
		</button>
	</div>
</header>
