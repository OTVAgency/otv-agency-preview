<?php
/**
 * Contact pattern partial — homepage lead capture.
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
		<p class="contact-actions">
			<a href="mailto:info@otv.agency" class="contact-link">info@otv.agency</a>
		</p>
		<?php if ( shortcode_exists( 'wpforms' ) ) : ?>
			<div class="contact-form" id="lead-form">
				<?php echo do_shortcode( '[wpforms id="1503" title="false"]' ); ?>
			</div>
		<?php else : ?>
			<p><a href="<?php echo esc_url( otv_agency_intake_url() ); ?>" class="btn btn-primary"><?php esc_html_e( 'Book a Discovery Call', 'otv-agency' ); ?></a></p>
		<?php endif; ?>
	</div>
</section>
