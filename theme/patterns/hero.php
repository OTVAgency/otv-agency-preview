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
				<p class="hero-eyebrow"><?php esc_html_e( 'For local businesses, service providers & creators', 'otv-agency' ); ?></p>
				<h1><?php esc_html_e( 'Creative work and systems that turn content into customers.', 'otv-agency' ); ?></h1>
				<p class="hero-lede"><?php esc_html_e( 'OTV Agency builds your web, social, video, and automation — so you grow bold and scale smart.', 'otv-agency' ); ?></p>
				<div class="hero-actions">
					<a href="<?php echo esc_url( $intake_url ); ?>" class="btn btn-primary"><?php esc_html_e( 'Book a Discovery Call', 'otv-agency' ); ?></a>
					<a href="mailto:info@otv.agency" class="btn btn-ghost"><?php esc_html_e( 'info@otv.agency', 'otv-agency' ); ?></a>
				</div>
				<p class="hero-badge"><?php esc_html_e( 'Remote-friendly · Nationwide', 'otv-agency' ); ?></p>
			</div>
			<aside class="hero-offer" aria-label="<?php esc_attr_e( 'Special offer', 'otv-agency' ); ?>">
				<p class="hero-offer-label"><?php esc_html_e( 'New client offer', 'otv-agency' ); ?></p>
				<p class="hero-offer-headline"><?php esc_html_e( 'Logo + 3-page site bundle', 'otv-agency' ); ?></p>
				<p class="hero-offer-copy"><?php esc_html_e( 'Book your discovery call and save $500 on your first project.', 'otv-agency' ); ?></p>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="btn btn-primary hero-offer-cta"><?php esc_html_e( 'Claim this offer', 'otv-agency' ); ?></a>
			</aside>
		</div>
	</div>
</section>
