<?php
/**
 * Header pattern partial.
 *
 * @package OTV_Agency
 * @var string $uri Theme directory URI.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'otv-agency' ); ?></a>
<header class="site-header" id="top">
	<div class="container header-inner">
		<a class="brand" href="#top" aria-label="<?php esc_attr_e( 'OTV Agency home', 'otv-agency' ); ?>">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/logos/OTV.Agency_Horiztonal_Logo_V3.svg" alt="OTV Agency" class="brand-logo brand-logo--light" width="160" height="68">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/logos/OTV.Agency_Horizontal_Logo_Dark.svg" alt="" class="brand-logo brand-logo--dark" width="160" height="68" aria-hidden="true">
		</a>
		<button class="nav-toggle" aria-expanded="false" aria-controls="site-nav" aria-label="<?php esc_attr_e( 'Open menu', 'otv-agency' ); ?>">
			<span></span><span></span><span></span>
		</button>
		<nav id="site-nav" class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'otv-agency' ); ?>">
			<a href="#services"><?php esc_html_e( 'Services', 'otv-agency' ); ?></a>
			<a href="#pricing"><?php esc_html_e( 'Pricing', 'otv-agency' ); ?></a>
			<a href="#work"><?php esc_html_e( 'Work', 'otv-agency' ); ?></a>
			<a href="#about"><?php esc_html_e( 'About', 'otv-agency' ); ?></a>
			<a href="#contact" class="nav-cta"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></a>
		</nav>
	</div>
</header>
