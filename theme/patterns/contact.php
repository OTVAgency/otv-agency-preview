<?php
/**
 * Contact pattern partial.
 *
 * @package OTV_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="contact" class="section contact">
	<div class="container contact-grid">
		<div class="contact-copy">
			<p class="section-label"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></p>
			<h2><?php esc_html_e( 'Ready to grow bold and scale smart?', 'otv-agency' ); ?></h2>
			<p><?php esc_html_e( "Tell us about your project. We'll respond within one business day.", 'otv-agency' ); ?></p>
			<div class="contact-links">
				<a href="mailto:cory@otv.agency" class="contact-link">cory@otv.agency</a>
			</div>
		</div>
		<div class="contact-form-wrap">
			<div class="jotform-placeholder" id="jotform-embed">
				<p><strong><?php esc_html_e( 'Intake form', 'otv-agency' ); ?></strong></p>
				<p><?php esc_html_e( 'Replace this block with your JotForm embed code in WordPress (Custom HTML block or theme edit).', 'otv-agency' ); ?></p>
				<a href="mailto:cory@otv.agency?subject=OTV%20Agency%20Discovery%20Call" class="btn btn-primary"><?php esc_html_e( 'Email Cory Instead', 'otv-agency' ); ?></a>
			</div>
		</div>
	</div>
</section>
