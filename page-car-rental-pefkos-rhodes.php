<?php
/**
 * Pefkos car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$pefkos_benefits = array(
	__( 'Hotel Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$pefkos_places = array(
	array(
		'title' => __( 'Pefkos Beach', 'astra-child' ),
		'text'  => __( 'Enjoy clear water, sandy coves and a relaxed resort atmosphere close to your accommodation.', 'astra-child' ),
	),
	array(
		'title' => __( 'Lindos', 'astra-child' ),
		'text'  => __( 'Visit the whitewashed village, ancient Acropolis and traditional streets a short drive away.', 'astra-child' ),
	),
	array(
		'title' => __( 'St Paul\'s Bay', 'astra-child' ),
		'text'  => __( 'Discover one of Rhodes\' most beautiful bays beneath the dramatic landscape of Lindos.', 'astra-child' ),
	),
	array(
		'title' => __( 'South Rhodes', 'astra-child' ),
		'text'  => __( 'Travel towards Prasonisi, traditional villages and quieter beaches across the island\'s south.', 'astra-child' ),
	),
);

$pefkos_links = array(
	array(
		'title' => __( 'Rhodes Airport', 'astra-child' ),
		'text'  => __( 'Meet and greet car rental for arrivals at Rhodes Airport.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-rhodes-airport/' ),
	),
	array(
		'title' => __( 'Rhodes Town', 'astra-child' ),
		'text'  => __( 'Hotel and city delivery for stays in Rhodes Town.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-rhodes-town/' ),
	),
	array(
		'title' => __( 'Lindos', 'astra-child' ),
		'text'  => __( 'Car rental for Lindos, St Paul\'s Bay and southern Rhodes.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-lindos/' ),
	),
	array(
		'title' => __( 'All Locations', 'astra-child' ),
		'text'  => __( 'View every AutoClub Rhodes pickup and delivery area.', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
	),
);
?>

<main id="primary" class="autoclub-pefkos-page">
	<section class="autoclub-pefkos-hero" aria-labelledby="autoclub-pefkos-title">
		<div class="autoclub-pefkos-hero__inner">
			<p class="autoclub-pefkos-eyebrow"><?php esc_html_e( 'Pefkos Car Rental', 'astra-child' ); ?></p>
			<h1 id="autoclub-pefkos-title"><?php esc_html_e( 'Rent a Car in Pefkos', 'astra-child' ); ?></h1>
			<p class="autoclub-pefkos-hero__subtitle"><?php esc_html_e( 'Explore Pefkos, Lindos and southern Rhodes with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-pefkos-button autoclub-pefkos-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-pefkos-benefits" aria-label="<?php esc_attr_e( 'Pefkos car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-pefkos-inner">
			<ul class="autoclub-pefkos-benefits__grid">
				<?php foreach ( $pefkos_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-pefkos-content" aria-labelledby="autoclub-pefkos-content-title">
		<div class="autoclub-pefkos-content__inner">
			<p class="autoclub-pefkos-eyebrow"><?php esc_html_e( 'Local south-coast car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-pefkos-content-title"><?php esc_html_e( 'Pefkos Car Rental With AutoClub Rhodes', 'astra-child' ); ?></h2>

			<div class="autoclub-pefkos-content__copy">
				<p><?php esc_html_e( 'Pefkos is a welcoming holiday resort on the southeast coast of Rhodes, known for sandy beaches, clear water and a relaxed atmosphere. Located just south of Lindos, it offers a quieter base with restaurants, shops and accommodation close to the coast. Renting a car in Pefkos gives you the freedom to discover nearby bays, traditional villages and the wider south of Rhodes without depending on fixed transport schedules.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes can arrange delivery to selected hotels and accommodation in Pefkos according to your confirmed booking details. A local representative meets you at the agreed location, explains the vehicle, fuel policy, full insurance and return arrangements, and answers your questions before departure. Hotel delivery is convenient for guests arriving by transfer and for anyone who wants a rental car for only part of their holiday.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Pefkos Beach and the smaller surrounding coves are ideal for unhurried days by the sea. With your own car, you can carry towels, children\'s equipment and beach bags easily, visit different swimming spots and return to your hotel whenever it suits you. Families appreciate the flexibility to travel around nap times or meal plans, while couples can combine beach time with scenic evening drives and dinner in nearby villages.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Lindos is only a short drive from Pefkos. You can arrive early, park outside the pedestrian village and walk through its whitewashed streets towards the Acropolis. St Paul\'s Bay, Navarone Bay and Vlycha Beach are also nearby. Having a rental car makes it simple to visit these places at quieter times and explore more than one destination during the same day.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Pefkos is also a practical starting point for exploring South Rhodes. The coastal route leads towards Kiotari, Gennadi, Lachania and Prasonisi, with beaches and traditional villages along the way. These longer drives reveal a calmer side of the island beyond the busiest resorts. A compact or automatic car suits most routes, while a family car or SUV provides additional space for passengers, luggage and beach equipment.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Couples often choose Pefkos for its peaceful setting and proximity to Lindos, while families value its beaches and easy-going resort facilities. Cabrio cars can make coastal journeys especially enjoyable, and automatic models offer comfortable driving through resort areas and on day trips. Vehicle categories are subject to availability, so early booking is useful when you need a particular size or transmission during the busiest summer dates.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes provides Pefkos car rental with full insurance included, zero excess and no deposit required. Clear conditions let you understand the included coverage and rental cost before collection, without unexpected insurance upgrades or hidden fees at handover. This transparent approach helps couples and families organise their holiday budget and travel around Rhodes with greater confidence.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Local Rhodes support and road assistance are available during your rental if help is needed. Our team can provide practical information about hotel delivery, airport collection or return, vehicle categories and island routes. As a local family business serving visitors since 1982, AutoClub Rhodes aims to make car rental in Pefkos straightforward and personal from your initial booking request until the vehicle is returned.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-pefkos-places" aria-labelledby="autoclub-pefkos-places-title">
		<div class="autoclub-pefkos-inner">
			<div class="autoclub-pefkos-heading">
				<p class="autoclub-pefkos-eyebrow"><?php esc_html_e( 'Explore southern Rhodes', 'astra-child' ); ?></p>
				<h2 id="autoclub-pefkos-places-title"><?php esc_html_e( 'Popular Places Near Pefkos', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-pefkos-places__grid">
				<?php foreach ( $pefkos_places as $place ) : ?>
					<article class="autoclub-pefkos-place-card">
						<h3><?php echo esc_html( $place['title'] ); ?></h3>
						<p><?php echo esc_html( $place['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-pefkos-faq" aria-labelledby="autoclub-pefkos-faq-title">
		<div class="autoclub-pefkos-faq__inner">
			<div class="autoclub-pefkos-heading">
				<p class="autoclub-pefkos-eyebrow"><?php esc_html_e( 'Pefkos rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-pefkos-faq-title"><?php esc_html_e( 'Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-pefkos-faq__list">
				<details class="autoclub-pefkos-faq__item">
					<summary><?php esc_html_e( 'Can I collect the car at my hotel in Pefkos?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Hotel delivery can be arranged at selected Pefkos hotels and accommodation according to your confirmed booking details.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-pefkos-faq__item">
					<summary><?php esc_html_e( 'Do I need a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required and clear conditions before collection.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-pefkos-faq__item">
					<summary><?php esc_html_e( 'Is insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the rental conditions supplied before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-pefkos-faq__item">
					<summary><?php esc_html_e( 'Can I drive to Rhodes Town and the Airport?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. You can drive from Pefkos to Rhodes Town and Rhodes Airport using the island\'s main road network. Allow extra time during busy summer periods.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-pefkos-links" aria-labelledby="autoclub-pefkos-links-title">
		<div class="autoclub-pefkos-inner">
			<div class="autoclub-pefkos-heading">
				<p class="autoclub-pefkos-eyebrow"><?php esc_html_e( 'More Rhodes pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-pefkos-links-title"><?php esc_html_e( 'Explore Other Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-pefkos-links__grid">
				<?php foreach ( $pefkos_links as $location_link ) : ?>
					<article class="autoclub-pefkos-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-pefkos-final-cta" aria-labelledby="autoclub-pefkos-final-title">
		<div class="autoclub-pefkos-final-cta__inner">
			<h2 id="autoclub-pefkos-final-title"><?php esc_html_e( 'Ready To Explore Pefkos?', 'astra-child' ); ?></h2>
			<a class="autoclub-pefkos-button autoclub-pefkos-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
