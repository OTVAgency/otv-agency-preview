<?php
/**
 * Proof strip pattern partial — client logos and early social proof.
 *
 * @package OTV_Agency
 * @var string $uri Theme directory URI.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="proof-strip" aria-label="<?php esc_attr_e( 'Trusted by', 'otv-agency' ); ?>">
	<div class="container proof-strip-inner">
		<p class="proof-strip-label"><?php esc_html_e( 'Trusted by growing brands', 'otv-agency' ); ?></p>
		<div class="proof-logos">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/portfolio/logos/cmc.png" alt="<?php esc_attr_e( 'Comfort Measures Consulting', 'otv-agency' ); ?>" loading="lazy">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/portfolio/logos/staunton-storm.png" alt="<?php esc_attr_e( 'Staunton Storm', 'otv-agency' ); ?>" loading="lazy">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/portfolio/logos/1188.png" alt="<?php esc_attr_e( '1188', 'otv-agency' ); ?>" loading="lazy">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/portfolio/logos/collins-market.png" alt="<?php esc_attr_e( 'Collins Market', 'otv-agency' ); ?>" loading="lazy">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/portfolio/logos/friendly-city.png" alt="<?php esc_attr_e( 'Friendly City Events', 'otv-agency' ); ?>" loading="lazy">
		</div>
		<blockquote class="proof-quote">
			<p>&ldquo;<?php esc_html_e( 'OTV Agency is the way to go — a marketing and communication powerhouse built for businesses ready to scale.', 'otv-agency' ); ?>&rdquo;</p>
			<cite><?php esc_html_e( 'Norman Harris, Comfort Measures Consulting', 'otv-agency' ); ?></cite>
		</blockquote>
	</div>
</section>
