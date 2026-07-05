<?php
/**
 * Lindos car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$lindos_benefits = array(
	__( 'Hotel Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$lindos_places = array(
	array(
		'title' => __( 'Lindos Acropolis', 'astra-child' ),
		'text'  => __( 'Visit the ancient hilltop site and enjoy panoramic views over Lindos village and the coast.', 'astra-child' ),
	),
	array(
		'title' => __( 'St Paul’s Bay', 'astra-child' ),
		'text'  => __( 'Swim in the sheltered bay beneath Lindos and enjoy one of southern Rhodes’ most scenic settings.', 'astra-child' ),
	),
	array(
		'title' => __( 'Pefkos', 'astra-child' ),
		'text'  => __( 'Drive to nearby Pefkos for sandy beaches, relaxed restaurants and a quieter resort atmosphere.', 'astra-child' ),
	),
	array(
		'title' => __( 'South Rhodes', 'astra-child' ),
		'text'  => __( 'Continue towards traditional villages, open landscapes and beaches across the south of the island.', 'astra-child' ),
	),
);

$lindos_links = array(
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
		'title' => __( 'Faliraki', 'astra-child' ),
		'text'  => __( 'Car rental for Faliraki beaches, hotels and resorts.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-faliraki/' ),
	),
	array(
		'title' => __( 'All Locations', 'astra-child' ),
		'text'  => __( 'View every AutoClub Rhodes pickup and delivery area.', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
	),
);
?>

<main id="primary" class="autoclub-lindos-page">
	<section class="autoclub-lindos-hero" aria-labelledby="autoclub-lindos-title">
		<div class="autoclub-lindos-hero__inner">
			<p class="autoclub-lindos-eyebrow"><?php esc_html_e( 'Lindos Car Rental', 'astra-child' ); ?></p>
			<h1 id="autoclub-lindos-title"><?php esc_html_e( 'Rent a Car in Lindos', 'astra-child' ); ?></h1>
			<p class="autoclub-lindos-hero__subtitle"><?php esc_html_e( 'Explore Lindos, St Paul’s Bay and southern Rhodes with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-lindos-button autoclub-lindos-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-lindos-benefits" aria-label="<?php esc_attr_e( 'Lindos car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-lindos-inner">
			<ul class="autoclub-lindos-benefits__grid">
				<?php foreach ( $lindos_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-lindos-content" aria-labelledby="autoclub-lindos-content-title">
		<div class="autoclub-lindos-content__inner">
			<p class="autoclub-lindos-eyebrow"><?php esc_html_e( 'Local south Rhodes car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-lindos-content-title"><?php esc_html_e( 'Lindos Car Rental With AutoClub Rhodes', 'astra-child' ); ?></h2>

			<div class="autoclub-lindos-content__copy">
				<p><?php esc_html_e( 'Lindos is one of the most memorable destinations in Rhodes, known for its whitewashed village, narrow pedestrian streets, ancient Acropolis and dramatic coastal scenery. The village is located on the east coast, roughly halfway between Rhodes Town and the southern end of the island. Renting a car in Lindos gives you the freedom to explore the surrounding beaches, villages and landscapes without planning every day around organised excursions or limited transport schedules.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes can arrange convenient hotel delivery in Lindos and nearby accommodation areas according to your confirmed booking details. Our representative meets you at the agreed location, explains the vehicle, fuel policy, insurance and return process, and answers questions before you drive away. Because the central village is pedestrianised and vehicle access is restricted, the meeting point may be arranged near an accessible hotel entrance or parking area.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'The Lindos Acropolis rises above the village and is the area’s main historic attraction. Visitors can walk through the village and climb towards the archaeological site for wide views across the coast. A rental car is especially useful for reaching Lindos from surrounding hotels and then continuing to other destinations after your visit. Arriving earlier in the day can also make parking and summer temperatures easier to manage.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'St Paul’s Bay sits just south of Lindos and is known for its sheltered water and distinctive landscape. With your own car, you can visit the bay for swimming, continue to nearby beaches or return to the village for dinner without relying on transfers. Pefkos is another easy drive from Lindos, offering sandy beaches, restaurants and a more relaxed resort atmosphere that works well for families and couples.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Lindos is also a practical starting point for discovering South Rhodes. The main road continues towards Lardos, Kiotari, Gennadi and villages further south, while side routes lead to quieter beaches and inland scenery. A family car or SUV provides useful space for passengers, luggage and beach equipment on longer day trips. Compact automatic cars remain a comfortable option for couples who want simple driving and easier parking.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Cabrio cars are particularly popular for scenic drives around Lindos. An open-top car can make the coastal route part of the holiday, especially during morning or late-afternoon journeys when temperatures are more comfortable. Convertible availability is limited during busy summer periods, so early booking is recommended if a cabrio is important to your plans. Always follow local parking guidance and protect yourself from the strong midday sun.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes offers Lindos car rental with full insurance included, zero excess and no deposit required. We focus on transparent pricing and clear rental conditions, without hidden fees or unexpected insurance upgrades at collection. Knowing the included coverage and agreed cost before the handover makes it easier to plan your holiday budget and concentrate on enjoying the island.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Local Rhodes support and road assistance are available during the rental if you need help while travelling. Our team can provide practical information about hotel delivery, vehicle categories and routes between Lindos, Rhodes Town and the airport. AutoClub Rhodes is a local family business serving visitors since 1982, with the aim of making car rental straightforward from booking through return.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-lindos-places" aria-labelledby="autoclub-lindos-places-title">
		<div class="autoclub-lindos-inner">
			<div class="autoclub-lindos-heading">
				<p class="autoclub-lindos-eyebrow"><?php esc_html_e( 'Scenic drives from Lindos', 'astra-child' ); ?></p>
				<h2 id="autoclub-lindos-places-title"><?php esc_html_e( 'Popular Places Near Lindos', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-lindos-places__grid">
				<?php foreach ( $lindos_places as $place ) : ?>
					<article class="autoclub-lindos-place-card">
						<h3><?php echo esc_html( $place['title'] ); ?></h3>
						<p><?php echo esc_html( $place['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-lindos-faq" aria-labelledby="autoclub-lindos-faq-title">
		<div class="autoclub-lindos-faq__inner">
			<div class="autoclub-lindos-heading">
				<p class="autoclub-lindos-eyebrow"><?php esc_html_e( 'Lindos rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-lindos-faq-title"><?php esc_html_e( 'Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-lindos-faq__list">
				<details class="autoclub-lindos-faq__item">
					<summary><?php esc_html_e( 'Can I collect the car at my hotel in Lindos?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Hotel delivery can be arranged at selected Lindos properties or an accessible nearby meeting point according to your booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-lindos-faq__item">
					<summary><?php esc_html_e( 'Do I need a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required and clear conditions before collection.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-lindos-faq__item">
					<summary><?php esc_html_e( 'Is full insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the rental conditions supplied before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-lindos-faq__item">
					<summary><?php esc_html_e( 'Can I drive from Lindos to Rhodes Airport?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Rhodes Airport is accessible by road from Lindos, and an airport return can be arranged when confirmed in your booking.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-lindos-links" aria-labelledby="autoclub-lindos-links-title">
		<div class="autoclub-lindos-inner">
			<div class="autoclub-lindos-heading">
				<p class="autoclub-lindos-eyebrow"><?php esc_html_e( 'More Rhodes pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-lindos-links-title"><?php esc_html_e( 'Explore Other Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-lindos-links__grid">
				<?php foreach ( $lindos_links as $location_link ) : ?>
					<article class="autoclub-lindos-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-lindos-final-cta" aria-labelledby="autoclub-lindos-final-title">
		<div class="autoclub-lindos-final-cta__inner">
			<h2 id="autoclub-lindos-final-title"><?php esc_html_e( 'Ready To Explore Lindos?', 'astra-child' ); ?></h2>
			<a class="autoclub-lindos-button autoclub-lindos-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
