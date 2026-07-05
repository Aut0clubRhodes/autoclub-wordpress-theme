<?php
/**
 * Rhodes Town car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$town_benefits = array(
	__( 'Hotel Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$nearby_places = array(
	array(
		'title' => __( 'Old Town', 'astra-child' ),
		'text'  => __( 'Visit the medieval streets, city gates and historic landmarks of the UNESCO-listed Old Town.', 'astra-child' ),
	),
	array(
		'title' => __( 'Mandraki Harbour', 'astra-child' ),
		'text'  => __( 'Explore the harbour, waterfront cafés, windmills and central Rhodes Town attractions.', 'astra-child' ),
	),
	array(
		'title' => __( 'Rhodes Port', 'astra-child' ),
		'text'  => __( 'Convenient local delivery for ferry passengers and visitors arriving near the commercial port.', 'astra-child' ),
	),
	array(
		'title' => __( 'Elli Beach', 'astra-child' ),
		'text'  => __( 'Combine city sightseeing with one of the most popular beaches in northern Rhodes.', 'astra-child' ),
	),
);

$town_links = array(
	array(
		'title' => __( 'Rhodes Airport', 'astra-child' ),
		'text'  => __( 'Meet and greet car rental for arrivals at Rhodes Airport.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-rhodes-airport/' ),
	),
	array(
		'title' => __( 'Faliraki', 'astra-child' ),
		'text'  => __( 'Car rental for Faliraki beaches, hotels and resorts.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-faliraki/' ),
	),
	array(
		'title' => __( 'Lindos', 'astra-child' ),
		'text'  => __( 'Explore Lindos and southern Rhodes with your own car.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-lindos/' ),
	),
	array(
		'title' => __( 'All Locations', 'astra-child' ),
		'text'  => __( 'View every AutoClub Rhodes pickup and delivery area.', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
	),
);
?>

<main id="primary" class="autoclub-town-page">
	<section class="autoclub-town-hero" aria-labelledby="autoclub-town-title">
		<div class="autoclub-town-hero__inner">
			<p class="autoclub-town-eyebrow"><?php esc_html_e( 'Car rental in the heart of Rhodes', 'astra-child' ); ?></p>
			<h1 id="autoclub-town-title"><?php esc_html_e( 'Rhodes Town Car Rental', 'astra-child' ); ?></h1>
			<p class="autoclub-town-hero__subtitle"><?php esc_html_e( 'Rent a car in Rhodes Town with full insurance, zero excess, no deposit and convenient hotel or city delivery.', 'astra-child' ); ?></p>
			<a class="autoclub-town-button autoclub-town-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-town-benefits" aria-label="<?php esc_attr_e( 'Rhodes Town car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-town-inner">
			<ul class="autoclub-town-benefits__grid">
				<?php foreach ( $town_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-town-content" aria-labelledby="autoclub-town-content-title">
		<div class="autoclub-town-content__inner">
			<p class="autoclub-town-eyebrow"><?php esc_html_e( 'Local city car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-town-content-title"><?php esc_html_e( 'Car Rental in Rhodes Town', 'astra-child' ); ?></h2>

			<div class="autoclub-town-content__copy">
				<p><?php esc_html_e( 'Rhodes Town is the island’s capital and one of the most convenient bases for exploring northern Rhodes. The city combines the medieval Old Town, Mandraki Harbour, modern shopping streets, beaches and busy ferry connections in a compact area. Renting a car in Rhodes Town gives you the flexibility to enjoy the city at your own pace and travel beyond it whenever you choose.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes provides practical city and hotel delivery for visitors staying in Rhodes Town. Depending on your accommodation and booking details, the vehicle handover can be arranged near your hotel or at an agreed city location. Our local team explains the car, rental conditions, fuel policy and return process before you drive away. Clear meeting instructions help make the handover straightforward, especially if this is your first visit to Rhodes.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Transparent rental conditions are particularly important when planning a holiday. Our Rhodes Town car rental service includes full insurance and zero excess, with no deposit required. We focus on clear pricing without hidden fees or unexpected upgrades at collection. You receive the relevant conditions before booking, allowing you to understand the rental cost and plan the rest of your trip with confidence.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'A compact or automatic car is a useful choice for city driving, parking and short journeys around northern Rhodes. From Rhodes Town, you can reach Ixia and Ialyssos on the west coast or drive east towards Kallithea, Faliraki and Anthony Quinn Bay. A rental car also makes it easier to visit beaches, restaurants and viewpoints that are less convenient to reach by scheduled transport.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Families and groups may prefer a larger car or SUV for extra passenger comfort and luggage space. These vehicles are well suited to day trips towards Tsambika, Kolymbia, Lindos or the villages of southern Rhodes. Couples can also choose automatic or convertible cars for relaxed coastal drives. Availability varies by season, so booking early is recommended if you need a particular vehicle category.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Driving inside the historic Old Town is restricted, but there are parking areas around its walls and entrances. Your rental car is most valuable for journeys outside the pedestrian centre, while Rhodes Town itself remains easy to explore on foot. Central parking can be busier during summer evenings and cruise arrivals. Our local team can provide practical guidance about collection, delivery and routes based on your hotel and travel plans.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes is a local family business serving island visitors since 1982. Along with clear rental terms, customers have access to local Rhodes support and road assistance during their rental. Whether you need a car delivered to a city hotel, want to continue from Rhodes Port or plan a longer island itinerary, we aim to make the experience simple from booking to return.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-town-places" aria-labelledby="autoclub-town-places-title">
		<div class="autoclub-town-inner">
			<div class="autoclub-town-heading">
				<p class="autoclub-town-eyebrow"><?php esc_html_e( 'Close to your city pickup', 'astra-child' ); ?></p>
				<h2 id="autoclub-town-places-title"><?php esc_html_e( 'Popular Nearby Places', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-town-places__grid">
				<?php foreach ( $nearby_places as $place ) : ?>
					<article class="autoclub-town-place-card">
						<h3><?php echo esc_html( $place['title'] ); ?></h3>
						<p><?php echo esc_html( $place['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-town-faq" aria-labelledby="autoclub-town-faq-title">
		<div class="autoclub-town-faq__inner">
			<div class="autoclub-town-heading">
				<p class="autoclub-town-eyebrow"><?php esc_html_e( 'Rhodes Town rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-town-faq-title"><?php esc_html_e( 'Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-town-faq__list">
				<details class="autoclub-town-faq__item">
					<summary><?php esc_html_e( 'Can you deliver the car to my Rhodes Town hotel?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Hotel or city delivery can be arranged at selected locations in Rhodes Town according to your booking details.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-town-faq__item">
					<summary><?php esc_html_e( 'Do I need to pay a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required and clear conditions before collection.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-town-faq__item">
					<summary><?php esc_html_e( 'Is full insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the rental conditions supplied before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-town-faq__item">
					<summary><?php esc_html_e( 'Can I return the car at Rhodes Airport?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. A different return location, including Rhodes Airport, can be arranged when confirmed as part of your booking.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-town-links" aria-labelledby="autoclub-town-links-title">
		<div class="autoclub-town-inner">
			<div class="autoclub-town-heading">
				<p class="autoclub-town-eyebrow"><?php esc_html_e( 'More Rhodes pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-town-links-title"><?php esc_html_e( 'Explore Other Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-town-links__grid">
				<?php foreach ( $town_links as $location_link ) : ?>
					<article class="autoclub-town-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-town-final-cta" aria-labelledby="autoclub-town-final-title">
		<div class="autoclub-town-final-cta__inner">
			<h2 id="autoclub-town-final-title"><?php esc_html_e( 'Ready to explore Rhodes Town?', 'astra-child' ); ?></h2>
			<a class="autoclub-town-button autoclub-town-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
