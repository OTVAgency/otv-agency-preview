<?php
/**
 * Portfolio pattern partial.
 *
 * @package OTV_Agency
 * @var string $uri Theme directory URI.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$portfolio_items = array(
	array(
		'slug'  => 'cmc',
		'name'  => 'Comfort Measures Consulting',
		'tag'   => 'Consulting',
		'class' => 'work-thumb--1',
		'url'   => 'https://comfortmeasuresconsulting.com/',
	),
	array(
		'slug'  => 'honey-sweet',
		'name'  => 'Honey Sweet LLC',
		'tag'   => 'E-commerce',
		'class' => 'work-thumb--2',
		'url'   => 'https://www.honeyssweetllc.com/',
	),
	array(
		'slug'  => 'jdprint',
		'name'  => 'JDPrint.Design',
		'tag'   => 'Print & Web',
		'class' => 'work-thumb--3',
		'url'   => 'https://jdprint.design/',
	),
	array(
		'slug'  => 'collins-market',
		'name'  => 'Collins Market',
		'tag'   => 'Retail',
		'class' => 'work-thumb--4',
		'url'   => 'https://collinsmarketva.com/',
	),
	array(
		'slug'  => 'friendly-city',
		'name'  => 'Friendly City Events',
		'tag'   => 'Events',
		'class' => 'work-thumb--5',
		'url'   => 'https://friendlycityevents.com/',
	),
	array(
		'slug'  => 'bomb-effect',
		'name'  => 'Bomb Effect Hair',
		'tag'   => 'Beauty',
		'class' => 'work-thumb--6',
		'url'   => 'https://bombeffecthair.com/',
	),
);
?>
<section id="work" class="section work">
	<div class="container">
		<div class="section-intro">
			<p class="section-label"><?php esc_html_e( 'Selected Work', 'otv-agency' ); ?></p>
			<h2><?php esc_html_e( "Brands we've helped build and grow.", 'otv-agency' ); ?></h2>
			<p><?php esc_html_e( 'Case studies and detailed project breakdowns launching with the full site.', 'otv-agency' ); ?></p>
		</div>
		<div class="work-grid">
			<?php foreach ( $portfolio_items as $item ) : ?>
				<?php $logo_url = otv_agency_portfolio_logo_url( $item['slug'] ); ?>
				<article class="work-card">
					<a href="<?php echo esc_url( $item['url'] ); ?>" class="work-link" target="_blank" rel="noopener noreferrer">
						<div class="work-thumb">
							<?php if ( $logo_url ) : ?>
								<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( sprintf( __( '%s logo', 'otv-agency' ), $item['name'] ) ); ?>" loading="lazy" decoding="async">
							<?php else : ?>
								<span class="work-thumb-fallback <?php echo esc_attr( $item['class'] ); ?>"></span>
							<?php endif; ?>
						</div>
						<div class="work-meta">
							<span class="work-tag"><?php echo esc_html( $item['tag'] ); ?></span>
							<h3><?php echo esc_html( $item['name'] ); ?></h3>
						</div>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
