<?php
/**
 * Services pattern partial.
 *
 * @package OTV_Agency
 * @var string $intake_url Intake page URL.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="services" class="section services">
	<div class="container">
		<div class="section-intro">
			<p class="section-label"><?php esc_html_e( 'What We Do', 'otv-agency' ); ?></p>
			<h2><?php esc_html_e( 'Creative work and systems, under one roof.', 'otv-agency' ); ?></h2>
			<p><?php esc_html_e( 'From first impression to follow-up automation — we help you grow bold and scale smart.', 'otv-agency' ); ?></p>
		</div>
		<div class="services-grid">
			<article class="service-card">
				<h3><?php esc_html_e( 'Web & E-commerce', 'otv-agency' ); ?></h3>
				<p><?php esc_html_e( 'WordPress and WooCommerce sites built to convert, plus ongoing care plans to keep you running.', 'otv-agency' ); ?></p>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="service-cta"><?php esc_html_e( 'Start a project →', 'otv-agency' ); ?></a>
			</article>
			<article class="service-card">
				<h3><?php esc_html_e( 'Social & Content', 'otv-agency' ); ?></h3>
				<p><?php esc_html_e( 'Retainers, reels, stories, and analytics that turn attention into leads.', 'otv-agency' ); ?></p>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="service-cta"><?php esc_html_e( 'Start a project →', 'otv-agency' ); ?></a>
			</article>
			<article class="service-card">
				<h3><?php esc_html_e( 'Video & Podcast', 'otv-agency' ); ?></h3>
				<p><?php esc_html_e( 'Clipping packages, thumbnails, captions, and production support for your show.', 'otv-agency' ); ?></p>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="service-cta"><?php esc_html_e( 'Start a project →', 'otv-agency' ); ?></a>
			</article>
			<article class="service-card">
				<h3><?php esc_html_e( 'Automation & Ops', 'otv-agency' ); ?></h3>
				<p><?php esc_html_e( 'HoneyBook, JotForm, ClickUp, and Google Workspace setups that save you hours.', 'otv-agency' ); ?></p>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="service-cta"><?php esc_html_e( 'Start a project →', 'otv-agency' ); ?></a>
			</article>
			<article class="service-card">
				<h3><?php esc_html_e( 'Creative & Brand', 'otv-agency' ); ?></h3>
				<p><?php esc_html_e( 'Logos, brand boards, and visual identity that look as good as they perform.', 'otv-agency' ); ?></p>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="service-cta"><?php esc_html_e( 'Start a project →', 'otv-agency' ); ?></a>
			</article>
			<article class="service-card">
				<h3><?php esc_html_e( 'Print & Merch', 'otv-agency' ); ?></h3>
				<p><?php esc_html_e( 'Apparel, print production, and fulfillment for brands that show up offline too.', 'otv-agency' ); ?></p>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="service-cta"><?php esc_html_e( 'Start a project →', 'otv-agency' ); ?></a>
			</article>
		</div>
	</div>
</section>
