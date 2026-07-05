<?php
/**
 * Afandou car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$afandou_benefits = array(
	__( 'Hotel Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$afandou_places = array(
	array(
		'title' => __( 'Traganou Beach', 'astra-child' ),
		'text'  => __( 'Swim beside clear water, smooth pebbles and distinctive sea caves on the east coast.', 'astra-child' ),
	),
	array(
		'title' => __( 'Afandou Beach', 'astra-child' ),
		'text'  => __( 'Enjoy a long, spacious shoreline with organised areas and quieter places to relax.', 'astra-child' ),
	),
	array(
		'title' => __( 'Afandou Golf', 'astra-child' ),
		'text'  => __( 'Reach the island\'s established golf course conveniently from Afandou village and nearby hotels.', 'astra-child' ),
	),
	array(
		'title' => __( 'Kolymbia', 'astra-child' ),
		'text'  => __( 'Visit the relaxed resort, eucalyptus avenue and nearby beaches a short drive to the south.', 'astra-child' ),
	),
);

$afandou_links = array(
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

<main id="primary" class="autoclub-afandou-page">
	<section class="autoclub-afandou-hero" aria-labelledby="autoclub-afandou-title">
		<div class="autoclub-afandou-hero__inner">
			<p class="autoclub-afandou-eyebrow"><?php esc_html_e( 'Afandou Car Rental', 'astra-child' ); ?></p>
			<h1 id="autoclub-afandou-title"><?php esc_html_e( 'Rent a Car in Afandou', 'astra-child' ); ?></h1>
			<p class="autoclub-afandou-hero__subtitle"><?php esc_html_e( 'Explore Afandou, Traganou Beach and the east coast of Rhodes with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-afandou-button autoclub-afandou-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-afandou-benefits" aria-label="<?php esc_attr_e( 'Afandou car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-afandou-inner">
			<ul class="autoclub-afandou-benefits__grid">
				<?php foreach ( $afandou_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-afandou-content" aria-labelledby="autoclub-afandou-content-title">
		<div class="autoclub-afandou-content__inner">
			<p class="autoclub-afandou-eyebrow"><?php esc_html_e( 'Local east-coast car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-afandou-content-title"><?php esc_html_e( 'Afandou Car Rental With AutoClub Rhodes', 'astra-child' ); ?></h2>

			<div class="autoclub-afandou-content__copy">
				<p><?php esc_html_e( 'Afandou is one of the largest traditional villages in Rhodes, located close to the east coast between Faliraki and Kolymbia. It combines everyday local life with convenient access to beaches, hotels, restaurants and the island\'s main coastal road. Renting a car in Afandou gives you the flexibility to explore nearby attractions, reach different parts of the shoreline and plan day trips without relying on fixed bus timetables.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes can arrange delivery to selected hotels and accommodation in Afandou according to your confirmed booking. A local representative meets you at the agreed location, explains the vehicle, fuel policy, insurance and return process, and answers practical questions before you leave. Hotel delivery is particularly useful for families travelling with luggage and visitors who arrive at their accommodation by airport transfer.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Afandou Beach stretches along a broad section of the east coast and offers plenty of space even during the busy summer season. Some areas provide sunbeds, tavernas and water activities, while other sections feel quieter and more open. With your own rental car, you can carry beach equipment easily, choose the part of the coast that suits your plans and leave whenever the family is ready.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Traganou Beach is a short drive away and is known for clear water, a pebbled shore and natural caves at one end of the bay. It is a rewarding stop for swimming and snorkelling, and it can be combined with Anthony Quinn Bay or Ladiko on the same outing. A car makes these coastal visits straightforward and lets you arrive earlier, before the most popular parking areas become busy.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'The Afandou Golf Course is another local landmark, positioned close to the beach and the main road. Golfers can transport their equipment comfortably and travel between the course, hotel and village without arranging separate transfers. Non-golfing companions can use the same day to explore nearby beaches, visit Afandou village or continue south towards Kolymbia and Tsambika.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Afandou is well placed for exploring the east coast of Rhodes. Rhodes Town lies to the north, while Kolymbia, Lindos and southern Rhodes are reached by driving south. Families can choose shorter journeys to Faliraki, Kallithea or Seven Springs, and couples can enjoy scenic coastal drives or evening visits to Lindos. Compact, automatic and family vehicles are available subject to the selected dates and category availability.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes provides Afandou car rental with full insurance included, zero excess and no deposit required. Clear rental conditions help you understand the included coverage and total cost before collection, without unexpected insurance upgrades or hidden fees at handover. This transparent approach makes holiday budgeting easier and gives families and couples greater confidence while driving around the island.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Local Rhodes support and road assistance are available throughout your rental if help is needed. Our team can provide useful information about hotel delivery, airport arrangements, vehicle categories and routes across Rhodes. As a local family business serving visitors since 1982, AutoClub Rhodes aims to make renting a car in Afandou simple and personal from the initial booking request until the final return.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-afandou-places" aria-labelledby="autoclub-afandou-places-title">
		<div class="autoclub-afandou-inner">
			<div class="autoclub-afandou-heading">
				<p class="autoclub-afandou-eyebrow"><?php esc_html_e( 'Explore the east coast', 'astra-child' ); ?></p>
				<h2 id="autoclub-afandou-places-title"><?php esc_html_e( 'Popular Places Near Afandou', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-afandou-places__grid">
				<?php foreach ( $afandou_places as $place ) : ?>
					<article class="autoclub-afandou-place-card">
						<h3><?php echo esc_html( $place['title'] ); ?></h3>
						<p><?php echo esc_html( $place['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-afandou-faq" aria-labelledby="autoclub-afandou-faq-title">
		<div class="autoclub-afandou-faq__inner">
			<div class="autoclub-afandou-heading">
				<p class="autoclub-afandou-eyebrow"><?php esc_html_e( 'Afandou rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-afandou-faq-title"><?php esc_html_e( 'Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-afandou-faq__list">
				<details class="autoclub-afandou-faq__item">
					<summary><?php esc_html_e( 'Can I collect the car at my hotel in Afandou?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Hotel delivery can be arranged at selected Afandou hotels and accommodation according to your confirmed booking details.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-afandou-faq__item">
					<summary><?php esc_html_e( 'Do I need a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required and clear conditions before collection.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-afandou-faq__item">
					<summary><?php esc_html_e( 'Is insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the rental conditions supplied before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-afandou-faq__item">
					<summary><?php esc_html_e( 'Can I drive to Lindos and Rhodes Town?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Afandou has convenient access to the main east-coast road, making both Lindos and Rhodes Town suitable for day trips.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-afandou-links" aria-labelledby="autoclub-afandou-links-title">
		<div class="autoclub-afandou-inner">
			<div class="autoclub-afandou-heading">
				<p class="autoclub-afandou-eyebrow"><?php esc_html_e( 'More Rhodes pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-afandou-links-title"><?php esc_html_e( 'Explore Other Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-afandou-links__grid">
				<?php foreach ( $afandou_links as $location_link ) : ?>
					<article class="autoclub-afandou-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-afandou-final-cta" aria-labelledby="autoclub-afandou-final-title">
		<div class="autoclub-afandou-final-cta__inner">
			<h2 id="autoclub-afandou-final-title"><?php esc_html_e( 'Ready To Explore Afandou?', 'astra-child' ); ?></h2>
			<a class="autoclub-afandou-button autoclub-afandou-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
