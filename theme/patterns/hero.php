<?php
/**
 * Hero pattern partial.
 *
 * @package OTV_Agency
 * @var string $uri Theme directory URI.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="hero">
	<div class="hero-media" aria-hidden="true">
		<img src="<?php echo esc_url( $uri ); ?>/assets/images/hero-bg.jpg" alt="">
	</div>
	<div class="hero-overlay" aria-hidden="true"></div>
	<div class="hero-grain" aria-hidden="true"></div>
	<div class="container hero-inner">
		<div class="hero-grid">
			<div class="hero-copy">
				<h1><?php esc_html_e( 'Small-town heart, big-agency vision.', 'otv-agency' ); ?></h1>
				<p class="hero-lede"><?php esc_html_e( 'We turn your content into customers — and install the systems that keep them coming back.', 'otv-agency' ); ?></p>
				<div class="hero-actions">
					<a href="#contact" class="btn btn-primary"><?php esc_html_e( 'Book a Discovery Call', 'otv-agency' ); ?></a>
					<a href="#work" class="btn btn-ghost"><?php esc_html_e( 'See Our Work', 'otv-agency' ); ?></a>
				</div>
				<p class="hero-badge"><?php esc_html_e( 'Relaunching 2026 — full portfolio coming soon', 'otv-agency' ); ?></p>
			</div>
			<aside class="hero-offer" aria-label="<?php esc_attr_e( 'Special offer', 'otv-agency' ); ?>">
				<p class="hero-offer-label"><?php esc_html_e( 'Relaunch special', 'otv-agency' ); ?></p>
				<p class="hero-offer-headline"><?php esc_html_e( 'Logo + 3-page site bundle', 'otv-agency' ); ?></p>
				<p class="hero-offer-copy"><?php esc_html_e( 'Book your discovery call during our 2026 relaunch and save $500 on your first project.', 'otv-agency' ); ?></p>
				<a href="#contact" class="btn btn-primary hero-offer-cta"><?php esc_html_e( 'Claim this offer', 'otv-agency' ); ?></a>
			</aside>
		</div>
	</div>
</section>
