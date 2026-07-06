<?php
/**
 * About AutoClub Rhodes page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$about_trust_items = array(
	__( 'Family Business Since 1982', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Zero Excess', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$about_reasons = array(
	array(
		'title' => __( 'Clear Prices', 'astra-child' ),
		'text'  => __( 'Straightforward rental terms and transparent costs without unexpected charges at collection.', 'astra-child' ),
	),
	array(
		'title' => __( 'Airport & Hotel Delivery', 'astra-child' ),
		'text'  => __( 'Convenient meet and greet at Rhodes Airport and delivery to selected hotels across the island.', 'astra-child' ),
	),
	array(
		'title' => __( 'Full Insurance', 'astra-child' ),
		'text'  => __( 'Full insurance is included with zero excess, so the rental conditions are clear before you drive.', 'astra-child' ),
	),
	array(
		'title' => __( 'Friendly Local Team', 'astra-child' ),
		'text'  => __( 'Personal assistance from people who know Rhodes and remain available throughout your rental.', 'astra-child' ),
	),
);

$about_links = array(
	array(
		'title' => __( 'Fleet', 'astra-child' ),
		'text'  => __( 'Explore compact cars, automatic models, cabrios and family SUVs.', 'astra-child' ),
		'url'   => home_url( '/car-rental-fleet-rhodes/' ),
	),
	array(
		'title' => __( 'Locations', 'astra-child' ),
		'text'  => __( 'View our airport, town, resort and hotel delivery areas across Rhodes.', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
	),
	array(
		'title' => __( 'Rhodes Airport Car Rental', 'astra-child' ),
		'text'  => __( 'Learn about our meet and greet service for arrivals at Rhodes Airport.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-rhodes-airport/' ),
	),
	array(
		'title' => __( 'FAQ', 'astra-child' ),
		'text'  => __( 'Find helpful answers about deposits, insurance, delivery and booking.', 'astra-child' ),
		'url'   => home_url( '/car-rental-in-rhodes-faq/' ),
	),
);
?>

<main id="primary" class="autoclub-about-page">
	<section class="autoclub-about-hero" aria-labelledby="autoclub-about-title">
		<div class="autoclub-about-hero__inner">
			<p class="autoclub-about-eyebrow"><?php esc_html_e( 'About AutoClub Rhodes', 'astra-child' ); ?></p>
			<h1 id="autoclub-about-title"><?php esc_html_e( 'Local Car Rental Company in Rhodes', 'astra-child' ); ?></h1>
			<p class="autoclub-about-hero__subtitle"><?php esc_html_e( 'AutoClub Rhodes is a local family car rental company offering full insurance, zero excess, no deposit and personal support across Rhodes.', 'astra-child' ); ?></p>
			<a class="autoclub-about-button autoclub-about-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-about-trust" aria-label="<?php esc_attr_e( 'AutoClub Rhodes trust benefits', 'astra-child' ); ?>">
		<div class="autoclub-about-inner">
			<ul class="autoclub-about-trust__grid">
				<?php foreach ( $about_trust_items as $trust_item ) : ?>
					<li><?php echo esc_html( $trust_item ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-about-story" aria-labelledby="autoclub-about-story-title">
		<div class="autoclub-about-story__inner">
			<p class="autoclub-about-eyebrow"><?php esc_html_e( 'Our local story', 'astra-child' ); ?></p>
			<h2 id="autoclub-about-story-title"><?php esc_html_e( 'Car Rental in Rhodes With Local Support', 'astra-child' ); ?></h2>

			<div class="autoclub-about-story__copy">
				<p><?php esc_html_e( 'AutoClub Rhodes is a local family car rental company based in Afandou, Rhodes. Our experience began in 1982, and for more than four decades we have helped visitors travel around the island with practical vehicles, clear rental conditions and personal assistance. Being based locally means we understand the roads, resorts, beaches and seasonal travel needs of Rhodes, and we can offer useful support before, during and after each rental.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'We believe renting a car should feel simple from the first enquiry. Our team provides clear information about the selected vehicle category, included insurance, collection arrangements, fuel policy and return process. Transparent pricing is central to our service, so customers can understand the expected rental cost before collection rather than facing unexpected upgrades or hidden charges when their holiday has already started.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes offers full insurance included with zero excess and no deposit required, subject to the rental conditions supplied with the booking. These straightforward terms help couples, families and independent travellers plan their holiday budget with greater confidence. We take time to explain the vehicle and agreement at handover, and our local team is available if a question or practical issue arises while you are driving around Rhodes.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Convenient delivery is available for confirmed bookings at Rhodes Airport and selected hotels across the island. Airport meet and greet allows arriving travellers to connect with our representative and begin their journey without searching for an off-site rental desk. Hotel delivery is useful for guests who arrive by transfer, want a car for only part of their stay or prefer to collect the vehicle close to their accommodation.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Our service covers popular areas including Rhodes Town, Faliraki, Lindos, Ixia, Kolymbia, Pefkos and Afandou, together with selected hotels and resorts. A rental car makes it easier to combine famous sights with quieter places: visit the medieval Old Town, drive to Lindos and St Paul\'s Bay, explore the beaches of the east coast or continue south towards traditional villages and Prasonisi.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Different holidays need different vehicles. Compact cars are practical for couples and town parking, automatic cars provide relaxed island driving, cabrios suit scenic coastal journeys, and family cars or SUVs offer additional room for passengers and luggage. Our team can help explain the available categories so you can choose a vehicle that fits your group, route and travel plans without unnecessary extras.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Personal service remains important to us because every arrival and itinerary is different. We coordinate collection details carefully, provide local contact and road assistance during the rental, and aim to resolve questions promptly. Our knowledge of Rhodes also helps travellers make sensible plans for journey times, airport returns and routes between the island\'s main holiday areas.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'After more than 40 years, our purpose is still straightforward: help visitors explore Rhodes safely and comfortably with honest information and dependable local support. Whether you are visiting for a short break, a family holiday or a longer island stay, AutoClub Rhodes offers a direct and personal car rental experience from a registered local company that understands the destination.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-about-reasons" aria-labelledby="autoclub-about-reasons-title">
		<div class="autoclub-about-inner">
			<div class="autoclub-about-heading">
				<p class="autoclub-about-eyebrow"><?php esc_html_e( 'Simple, local and transparent', 'astra-child' ); ?></p>
				<h2 id="autoclub-about-reasons-title"><?php esc_html_e( 'Why Choose AutoClub Rhodes?', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-about-reasons__grid">
				<?php foreach ( $about_reasons as $reason ) : ?>
					<article class="autoclub-about-card">
						<h3><?php echo esc_html( $reason['title'] ); ?></h3>
						<p><?php echo esc_html( $reason['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-about-company" aria-labelledby="autoclub-about-company-title">
		<div class="autoclub-about-company__inner">
			<div class="autoclub-about-heading">
				<p class="autoclub-about-eyebrow"><?php esc_html_e( 'Registered local business', 'astra-child' ); ?></p>
				<h2 id="autoclub-about-company-title"><?php esc_html_e( 'Company Details', 'astra-child' ); ?></h2>
			</div>
			<dl class="autoclub-about-company__list">
				<div>
					<dt><?php esc_html_e( 'Trade Name', 'astra-child' ); ?></dt>
					<dd><?php esc_html_e( 'AUTO CLUB', 'astra-child' ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Registration', 'astra-child' ); ?></dt>
					<dd><?php esc_html_e( 'Licensed Car Rental Company – Registered in Greece', 'astra-child' ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Location', 'astra-child' ); ?></dt>
					<dd><?php esc_html_e( 'Afandou, Rhodes, Greece', 'astra-child' ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Phone', 'astra-child' ); ?></dt>
					<dd><a href="tel:+306948202397">+30 6948202397</a></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Email', 'astra-child' ); ?></dt>
					<dd><a href="mailto:info@autoclub-rhodes.com">info@autoclub-rhodes.com</a></dd>
				</div>
			</dl>
		</div>
	</section>

	<section class="autoclub-about-links" aria-labelledby="autoclub-about-links-title">
		<div class="autoclub-about-inner">
			<div class="autoclub-about-heading">
				<p class="autoclub-about-eyebrow"><?php esc_html_e( 'Plan your rental', 'astra-child' ); ?></p>
				<h2 id="autoclub-about-links-title"><?php esc_html_e( 'Explore AutoClub Rhodes', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-about-links__grid">
				<?php foreach ( $about_links as $about_link ) : ?>
					<article class="autoclub-about-link-card">
						<h3><?php echo esc_html( $about_link['title'] ); ?></h3>
						<p><?php echo esc_html( $about_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $about_link['url'] ); ?>"><?php esc_html_e( 'Learn More', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-about-final-cta" aria-labelledby="autoclub-about-final-title">
		<div class="autoclub-about-final-cta__inner">
			<h2 id="autoclub-about-final-title"><?php esc_html_e( 'Ready To Rent a Car in Rhodes?', 'astra-child' ); ?></h2>
			<a class="autoclub-about-button autoclub-about-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Start Your Booking', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
