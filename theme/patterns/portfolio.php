<?php
/**
 * Selected Work — merged from OTVAgency/otv-portfolio-preview (featured case studies)
 * and the original theme portfolio (additional client brands).
 *
 * @package OTV_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$pp  = get_template_directory_uri() . '/assets/portfolio-preview/assets/';
$img = static function ( $file, $alt, $w, $h, $extra = '' ) use ( $pp ) {
	return sprintf(
		'<img src="%s" alt="%s" width="%d" height="%d" loading="lazy" decoding="async"%s>',
		esc_url( $pp . $file ),
		esc_attr( $alt ),
		(int) $w,
		(int) $h,
		$extra
	);
};

$intake = function_exists( 'otv_agency_intake_url' ) ? otv_agency_intake_url() : home_url( '/intake/' );

$more_brands = array(
	array( 'slug' => 'staunton-storm', 'name' => 'Staunton Storm', 'tag' => 'E-commerce', 'url' => 'https://stauntonstorm.com/' ),
	array( 'slug' => '1188', 'name' => '1188', 'tag' => 'Coaching', 'url' => 'https://teamee88.com/' ),
	array( 'slug' => 'honey-sweet', 'name' => 'Honey Sweet', 'tag' => 'Brand & web', 'url' => '' ),
	array( 'slug' => 'jdprint', 'name' => 'JD Print', 'tag' => 'Print & e-commerce', 'url' => '' ),
	array( 'slug' => 'cay-custom', 'name' => 'Cay Custom', 'tag' => 'Custom goods', 'url' => '' ),
	array( 'slug' => 'bomb-effect', 'name' => 'Bomb Effect', 'tag' => 'E-commerce', 'url' => '' ),
);
?>
<!-- wp:html -->
<section id="work" class="otvp otvp-embed" aria-labelledby="work-title">
<div class="wrap">
	<header class="otvp-intro">
		<div>
			<p class="eyebrow">Selected work</p>
			<h2 id="work-title" class="otvp-h1">Real stories.<br><em>Thoughtfully built.</em></h2>
		</div>
		<div class="otvp-intro-copy">
			<p>Websites, social content, and brand creative that help small businesses, nonprofits, and personal brands show up as themselves — and turn attention into customers.</p>
			<p class="location"><span class="dot" aria-hidden="true"></span>Hollywood, Florida · Serving clients nationwide</p>
		</div>
	</header>

	<ul class="service-line" aria-label="Featured services"><li>Web &amp; e-commerce</li><li>Social &amp; content</li><li>Video &amp; podcast</li><li>Creative &amp; brand</li></ul>

	<div class="work">
		<div class="work-title"><h3 class="otvp-sub">Featured case studies</h3><span>Six recent projects</span></div>
		<div class="grid">

<article class="project"><div class="visual web love"><span class="project-number" aria-hidden="true">01 / WEB</span><?php echo $img( 'love-forward.webp', 'Love Forward Foundation website homepage designed by OTV Agency, headline “Love that moves families forward”', 1200, 833 ); // phpcs:ignore ?></div><div class="project-content"><p class="project-kicker">Web design · Digital presence</p><h3>Love Forward Foundation</h3><p class="project-description">A mission-led nonprofit website for Keisha Nicholson’s foundation, bringing its mission, current initiatives, and ways to connect into one place.</p><div class="project-bottom"><span>Nonprofit &amp; community</span><a class="text-link" href="https://loveforwardfoundation.org/landing/" target="_blank" rel="noopener">Visit Love Forward Foundation <b aria-hidden="true">↗</b></a></div></div></article>

<article class="project"><div class="visual social"><span class="project-number" aria-hidden="true">02 / CONTENT</span><?php echo $img( 'collins-01.webp', 'Collins Market “Midweek snack run?” Instagram carousel cover by OTV Agency', 720, 900 ); echo $img( 'collins-04.webp', 'Collins Market carousel slide featuring the downtown Staunton storefront', 720, 900 ); // phpcs:ignore ?></div><div class="project-content"><p class="project-kicker">Social content · Creative direction</p><h3>Collins Market</h3><p class="project-description">Neighborhood character, made for the feed: a social carousel pairing real product photography with a distinctly downtown Staunton, Virginia voice.</p><div class="project-bottom"><span>Local retail</span><button class="text-link" type="button" data-open="otvp-collins" aria-haspopup="dialog">View carousel <b aria-hidden="true">↗</b></button></div></div></article>

<article class="project"><div class="visual clc"><span class="project-number" aria-hidden="true">03 / BRAND &amp; WEB</span><?php echo $img( 'call-light-cover.webp', 'The Call Light Collective podcast cover art hosted by Jennifer Eddings', 720, 720, ' class="cover"' ); echo $img( 'call-light-wordmark.webp', 'The Call Light Collective wordmark logo', 400, 371, ' class="wordmark"' ); // phpcs:ignore ?></div><div class="project-content"><p class="project-kicker">Brand presentation · Web design</p><h3>The Call Light Collective</h3><p class="project-description">A personal brand website bringing Jennifer Eddings’ nursing leadership, speaking, and The Call Light Collective podcast together in one expressive home.</p><a class="text-link website-link" href="https://jennifereddings.com/" target="_blank" rel="noopener">Visit Jennifer Eddings’ website <b aria-hidden="true">↗</b></a><div class="project-bottom"><span>Personal brand &amp; podcast</span><button class="text-link" type="button" data-open="otvp-calllight" aria-haspopup="dialog">View creative <b aria-hidden="true">↗</b></button></div></div></article>

<article class="project"><div class="visual web lkb"><span class="project-number" aria-hidden="true">04 / WEB</span><?php echo $img( 'lkb-counseling.webp', 'LKB Counseling therapy practice website with plum and cream palette and “Find calm in the chaos” headline', 1200, 833 ); // phpcs:ignore ?></div><div class="project-content"><p class="project-kicker">Web design · Digital presence</p><h3>LKB Counseling</h3><p class="project-description">A calm, welcoming website for Lori Kier-Benson’s counseling practice, with a clear introduction to her approach and a simple path to book a consultation.</p><div class="project-bottom"><span>Professional services</span><a class="text-link" href="https://lkbcounseling.com/" target="_blank" rel="noopener">Visit LKB Counseling <b aria-hidden="true">↗</b></a></div></div></article>

<article class="project"><div class="visual web fce"><span class="project-number" aria-hidden="true">05 / WEB &amp; LOGO</span><?php echo $img( 'friendly-city.webp', 'Friendly City Events venue website in Harrisonburg, Virginia, designed by OTV Agency', 1200, 833 ); echo $img( 'friendly-city-logo.webp', 'Friendly City Events disco-ball logo designed by OTV Agency', 900, 609, ' class="project-logo"' ); // phpcs:ignore ?></div><div class="project-content"><p class="project-kicker">Web design · Logo design</p><h3>Friendly City Events</h3><p class="project-description">A welcoming website and distinctive logo for a Harrisonburg event venue, connecting the space’s personality with clear paths to explore and book.</p><div class="project-bottom"><span>Events &amp; hospitality</span><a class="text-link" href="https://friendlycityevents.com/" target="_blank" rel="noopener">Visit site <b aria-hidden="true">↗</b></a> <button class="text-link" type="button" data-open="otvp-friendly" aria-haspopup="dialog">View work <b aria-hidden="true">↗</b></button></div></div></article>

<article class="project"><div class="visual web cmc"><span class="project-number" aria-hidden="true">06 / WEB</span><?php echo $img( 'comfort-measures.webp', 'Comfort Measures Consulting healthcare consulting website homepage with services navigation', 1200, 833 ); // phpcs:ignore ?></div><div class="project-content"><p class="project-kicker">Web design · Digital presence</p><h3>Comfort Measures Consulting</h3><p class="project-description">A website connecting healthcare consulting, educational resources, and the Let’s Get Comfy podcast, with clear paths to services and media.</p><div class="project-bottom"><span>Consulting &amp; education</span><a class="text-link" href="https://comfortmeasuresconsulting.com/" target="_blank" rel="noopener">Visit Comfort Measures <b aria-hidden="true">↗</b></a></div></div></article>

		</div>
	</div>

	<div class="otvp-more" aria-labelledby="more-brands-title">
		<h3 id="more-brands-title" class="otvp-sub">More brands we’ve built and grown</h3>
		<ul class="otvp-brands">
			<?php foreach ( $more_brands as $b ) :
				$logo = function_exists( 'otv_agency_portfolio_logo_url' ) ? otv_agency_portfolio_logo_url( $b['slug'] ) : '';
				$open  = $b['url'] ? '<a href="' . esc_url( $b['url'] ) . '" target="_blank" rel="noopener">' : '<span>';
				$close = $b['url'] ? '</a>' : '</span>';
				?>
				<li><?php echo $open; // phpcs:ignore ?>
					<?php if ( $logo ) : ?><img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( $b['name'] . ' logo — ' . $b['tag'] . ' client of OTV Agency' ); ?>" width="160" height="80" loading="lazy" decoding="async"><?php endif; ?>
					<strong><?php echo esc_html( $b['name'] ); ?></strong><small><?php echo esc_html( $b['tag'] ); ?></small>
				<?php echo $close; // phpcs:ignore ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

	<p class="otvp-cta-row"><a class="button" href="<?php echo esc_url( $intake ); ?>">Start your project <span aria-hidden="true">↗</span></a> <a class="text-link" href="mailto:info@otv.agency">info@otv.agency</a></p>
</div>

<dialog id="otvp-collins" aria-labelledby="otvp-collins-title"><div class="dialog-top"><h3 id="otvp-collins-title">Collins Market / Midweek Snack Run</h3><button type="button" class="close" data-close aria-label="Close carousel">×</button></div><p class="dialog-copy">Selected social creative · Four original carousel graphics.</p><div class="gallery"><?php
echo $img( 'collins-01.webp', 'Slide 1 of 4: Midweek snack run?', 720, 900 );
echo $img( 'collins-02.webp', 'Slide 2 of 4: Something sweet — Milka chocolate product photo', 720, 900 );
echo $img( 'collins-03.webp', 'Slide 3 of 4: Something salty — wrap, chips, and drink photo', 720, 900 );
echo $img( 'collins-04.webp', 'Slide 4 of 4: Swing by Collins Market — downtown storefront photo', 720, 900 ); // phpcs:ignore
?></div></dialog>
<dialog id="otvp-calllight" aria-labelledby="otvp-calllight-title"><div class="dialog-top"><h3 id="otvp-calllight-title">The Call Light Collective</h3><button type="button" class="close" data-close aria-label="Close creative gallery">×</button></div><p class="dialog-copy">Jennifer Eddings’ personal brand website and podcast artwork. <a href="https://jennifereddings.com/" target="_blank" rel="noopener">Visit Jennifer’s website ↗</a></p><div class="gallery brand"><?php
echo $img( 'jennifer-eddings-website.webp', 'Jennifer Eddings “Nurse Leader and Storyteller” personal brand website', 1200, 833, ' class="website-preview"' );
echo $img( 'call-light-cover.webp', 'The Call Light Collective podcast artwork', 720, 720 );
echo $img( 'call-light-wordmark.webp', 'The Call Light Collective wordmark', 400, 371 ); // phpcs:ignore
?></div></dialog>
<dialog id="otvp-friendly" aria-labelledby="otvp-friendly-title"><div class="dialog-top"><h3 id="otvp-friendly-title">Friendly City Events / Website &amp; logo</h3><button type="button" class="close" data-close aria-label="Close gallery">×</button></div><p class="dialog-copy">Website and logo for the Harrisonburg event venue. <a href="https://friendlycityevents.com/" target="_blank" rel="noopener">Visit the website ↗</a></p><div class="gallery brand logo-work"><?php
echo $img( 'friendly-city.webp', 'Friendly City Events website homepage', 1200, 833 );
echo $img( 'friendly-city-logo.webp', 'Friendly City Events logo with disco ball and colorful accents', 900, 609 ); // phpcs:ignore
?></div></dialog>
</section>
<!-- /wp:html -->
