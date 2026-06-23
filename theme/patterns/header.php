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
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/logos/OTV.Agency_Horiztonal_Logo_V3.svg" alt="OTV Agency" class="brand-logo brand-logo--light" width="160" height="68">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/logos/OTV.Agency_Horizontal_Logo_Dark.svg" alt="" class="brand-logo brand-logo--dark" width="160" height="68" aria-hidden="true">
		</a>
		<button class="nav-toggle" aria-expanded="false" aria-controls="site-nav" aria-label="<?php esc_attr_e( 'Open menu', 'otv-agency' ); ?>">
			<span></span><span></span><span></span>
		</button>
		<nav id="site-nav" class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'otv-agency' ); ?>">
			<a href="<?php echo esc_url( otv_agency_section_url( 'services' ) ); ?>"><?php esc_html_e( 'Services', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( otv_agency_section_url( 'pricing' ) ); ?>"><?php esc_html_e( 'Pricing', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( otv_agency_section_url( 'work' ) ); ?>"><?php esc_html_e( 'Work', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( otv_agency_section_url( 'about' ) ); ?>"><?php esc_html_e( 'About', 'otv-agency' ); ?></a>
			<a href="<?php echo esc_url( $intake_url ); ?>" class="nav-cta"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></a>
		</nav>
	</div>
</header>
