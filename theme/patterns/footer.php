<?php
/**
 * Footer pattern partial.
 *
 * @package OTV_Agency
 * @var string $uri Theme directory URI.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="site-footer">
	<div class="container footer-inner">
		<div class="footer-brand">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/logos/OTV.Agency_Stacked_Logo_V4.svg" alt="OTV Agency" width="120" height="120">
			<p class="footer-tagline"><?php esc_html_e( 'Small-town heart, big-agency vision.', 'otv-agency' ); ?></p>
		</div>
		<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer', 'otv-agency' ); ?>">
			<a href="#services"><?php esc_html_e( 'Services', 'otv-agency' ); ?></a>
			<a href="#pricing"><?php esc_html_e( 'Pricing', 'otv-agency' ); ?></a>
			<a href="#work"><?php esc_html_e( 'Work', 'otv-agency' ); ?></a>
			<a href="#about"><?php esc_html_e( 'About', 'otv-agency' ); ?></a>
			<a href="#contact"><?php esc_html_e( 'Contact', 'otv-agency' ); ?></a>
		</nav>
		<div class="footer-meta">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'On The Verge LLC d/b/a OTV Agency. All rights reserved.', 'otv-agency' ); ?></p>
			<p class="footer-note"><?php esc_html_e( 'Full portfolio and case studies launching soon.', 'otv-agency' ); ?></p>
		</div>
	</div>
</footer>
