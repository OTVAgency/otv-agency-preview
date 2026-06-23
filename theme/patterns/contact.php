<?php
/**
 * Contact pattern partial — homepage CTA (form lives on /intake/).
 *
 * @package OTV_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="contact" class="section contact contact--cta">
	<div class="container contact-cta-inner">
		<p class="section-label"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></p>
		<h2><?php esc_html_e( 'Ready to grow bold and scale smart?', 'otv-agency' ); ?></h2>
		<p><?php esc_html_e( "Tell us about your project. We'll respond within one business day.", 'otv-agency' ); ?></p>
		<div class="contact-actions">
			<a href="<?php echo esc_url( $intake_url ); ?>" class="btn btn-primary"><?php esc_html_e( 'Start intake form', 'otv-agency' ); ?></a>
			<a href="mailto:cory@otv.agency" class="contact-link"><?php esc_html_e( 'cory@otv.agency', 'otv-agency' ); ?></a>
		</div>
	</div>
</section>
