<?php
/**
 * About pattern partial.
 *
 * @package OTV_Agency
 * @var string $uri Theme directory URI.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="about" class="section about">
	<div class="container about-grid">
		<div class="about-media">
			<img src="<?php echo esc_url( $uri ); ?>/assets/images/about-studio.jpg" alt="<?php esc_attr_e( 'Creative workspace at OTV Agency', 'otv-agency' ); ?>">
		</div>
		<div class="about-copy">
			<p class="section-label"><?php esc_html_e( 'About OTV', 'otv-agency' ); ?></p>
			<h2><?php esc_html_e( 'Strategy, assets, systems, and results.', 'otv-agency' ); ?></h2>
			<p><?php esc_html_e( 'OTV Agency is the creative and systems studio of On The Verge LLC, founded by Cory Crawford in Staunton, Virginia and now based in Hollywood, Florida. We partner with local businesses, service providers, and creators who need more than pretty assets — they need content that converts and automations that keep customers coming back.', 'otv-agency' ); ?></p>
			<p><?php esc_html_e( 'Remote-friendly and nationwide, we bring boutique attention with big-agency capability: web, social, video, automation, and print — end to end.', 'otv-agency' ); ?></p>
		</div>
	</div>
</section>
