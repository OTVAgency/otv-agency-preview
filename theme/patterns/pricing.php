<?php
/**
 * Pricing pattern partial.
 *
 * @package OTV_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="pricing" class="section pricing">
	<div class="container">
		<div class="section-intro">
			<p class="section-label"><?php esc_html_e( 'Packages', 'otv-agency' ); ?></p>
			<h2><?php esc_html_e( 'Clear starting points. Custom scopes welcome.', 'otv-agency' ); ?></h2>
			<p><?php esc_html_e( 'Every project begins with a free discovery call.', 'otv-agency' ); ?></p>
		</div>
		<div class="pricing-grid">
			<article class="pricing-card">
				<p class="pricing-tier"><?php esc_html_e( 'Starter', 'otv-agency' ); ?></p>
				<h3><?php esc_html_e( 'Web & Logo', 'otv-agency' ); ?></h3>
				<p class="pricing-amount"><?php esc_html_e( 'From $1,500', 'otv-agency' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Brand-ready logo', 'otv-agency' ); ?></li>
					<li><?php esc_html_e( 'Launch-ready web presence', 'otv-agency' ); ?></li>
					<li><?php esc_html_e( 'Mobile-first design', 'otv-agency' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></a>
			</article>
			<article class="pricing-card pricing-card--featured">
				<p class="pricing-badge"><?php esc_html_e( 'Most popular', 'otv-agency' ); ?></p>
				<p class="pricing-tier"><?php esc_html_e( 'Growth', 'otv-agency' ); ?></p>
				<h3><?php esc_html_e( '5-Page Site', 'otv-agency' ); ?></h3>
				<p class="pricing-amount"><?php esc_html_e( 'From $3,000', 'otv-agency' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Full site architecture', 'otv-agency' ); ?></li>
					<li><?php esc_html_e( 'Conversion-focused copy structure', 'otv-agency' ); ?></li>
					<li><?php esc_html_e( 'CMS you can update yourself', 'otv-agency' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="btn btn-primary"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></a>
			</article>
			<article class="pricing-card">
				<p class="pricing-tier"><?php esc_html_e( 'Scale', 'otv-agency' ); ?></p>
				<h3><?php esc_html_e( 'Social Retainer', 'otv-agency' ); ?></h3>
				<p class="pricing-amount"><?php esc_html_e( 'From $600/mo', 'otv-agency' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Content planning & posting', 'otv-agency' ); ?></li>
					<li><?php esc_html_e( 'Reels and stories support', 'otv-agency' ); ?></li>
					<li><?php esc_html_e( 'Monthly performance review', 'otv-agency' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( $intake_url ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></a>
			</article>
		</div>
		<p class="pricing-note"><?php esc_html_e( 'Custom scopes available for e-commerce, automation, video, and multi-phase projects.', 'otv-agency' ); ?></p>
	</div>
</section>
