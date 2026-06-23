<?php
/**
 * Intake form page content.
 *
 * @package OTV_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="section intake">
	<div class="container intake-intro">
		<p class="section-label"><?php esc_html_e( 'Get Started', 'otv-agency' ); ?></p>
		<h1><?php esc_html_e( 'Project intake form', 'otv-agency' ); ?></h1>
		<p><?php esc_html_e( "Tell us about your project. We'll respond within one business day.", 'otv-agency' ); ?></p>
		<p class="intake-alt">
			<?php esc_html_e( 'Prefer email?', 'otv-agency' ); ?>
			<a href="mailto:cory@otv.agency" class="contact-link">cory@otv.agency</a>
		</p>
	</div>
	<div class="container">
		<div class="intake-form-embed" id="intake-form">
			<iframe
				class="clickup-embed clickup-dynamic-height"
				src="<?php echo esc_url( OTV_AGENCY_INTAKE_FORM ); ?>"
				title="<?php esc_attr_e( 'OTV Agency intake form', 'otv-agency' ); ?>"
				width="100%"
				height="900"
				style="background: transparent; border: 0;"
				loading="lazy"
			></iframe>
		</div>
	</div>
</section>
