<?php
/**
 * Faliraki car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$faliraki_benefits = array(
	__( 'Hotel Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$faliraki_places = array(
	array(
		'title' => __( 'Anthony Quinn Bay', 'astra-child' ),
		'text'  => __( 'Visit the famous sheltered bay for swimming, snorkelling and a scenic coastal stop.', 'astra-child' ),
	),
	array(
		'title' => __( 'Faliraki Beach', 'astra-child' ),
		'text'  => __( 'Enjoy the long sandy beach, water activities, restaurants and family-friendly facilities.', 'astra-child' ),
	),
	array(
		'title' => __( 'Water Park', 'astra-child' ),
		'text'  => __( 'Plan an easy family day at the large Faliraki water park and nearby resort area.', 'astra-child' ),
	),
	array(
		'title' => __( 'Kallithea Springs', 'astra-child' ),
		'text'  => __( 'Explore historic architecture, gardens and clear water a short drive north of Faliraki.', 'astra-child' ),
	),
);

$faliraki_links = array(
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
		'text'  => __( 'Car rental for Lindos and journeys through southern Rhodes.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-lindos/' ),
	),
	array(
		'title' => __( 'All Locations', 'astra-child' ),
		'text'  => __( 'View every AutoClub Rhodes pickup and delivery area.', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
	),
);
?>

<main id="primary" class="autoclub-faliraki-page">
	<section class="autoclub-faliraki-hero" aria-labelledby="autoclub-faliraki-title">
		<div class="autoclub-faliraki-hero__inner">
			<p class="autoclub-faliraki-eyebrow"><?php esc_html_e( 'Faliraki Car Rental', 'astra-child' ); ?></p>
			<h1 id="autoclub-faliraki-title"><?php esc_html_e( 'Rent a Car in Faliraki', 'astra-child' ); ?></h1>
			<p class="autoclub-faliraki-hero__subtitle"><?php esc_html_e( 'Discover Faliraki beaches, resorts and Rhodes attractions with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-faliraki-button autoclub-faliraki-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-faliraki-benefits" aria-label="<?php esc_attr_e( 'Faliraki car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-faliraki-inner">
			<ul class="autoclub-faliraki-benefits__grid">
				<?php foreach ( $faliraki_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-faliraki-content" aria-labelledby="autoclub-faliraki-content-title">
		<div class="autoclub-faliraki-content__inner">
			<p class="autoclub-faliraki-eyebrow"><?php esc_html_e( 'Local resort car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-faliraki-content-title"><?php esc_html_e( 'Faliraki Car Rental With AutoClub Rhodes', 'astra-child' ); ?></h2>

			<div class="autoclub-faliraki-content__copy">
				<p><?php esc_html_e( 'Faliraki is one of the best-known holiday areas in Rhodes, combining a long sandy beach, family attractions, restaurants, nightlife and a wide choice of hotels and resorts. Located on the east coast, it is a practical base for visitors who want relaxing beach days while remaining close to Rhodes Town and the island’s major sights. Renting a car in Faliraki gives you the freedom to explore beyond your resort without depending on fixed transfer or bus schedules.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes can arrange convenient hotel delivery in Faliraki according to your booking details. Our local representative meets you at the agreed location, explains the vehicle, fuel policy and rental conditions, and answers questions before you begin driving. This simple handover is useful for families and couples who prefer to settle into their accommodation before collecting a car, as well as travellers who only need a vehicle for part of their holiday.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Faliraki Beach stretches along the resort and offers organised areas, water sports, restaurants and quieter sections for swimming. A rental car makes it easier to move between your hotel, the beach and nearby attractions, especially when travelling with children, beach equipment or shopping. Families can also reach the Faliraki Water Park and other east-coast activities without arranging separate transfers for every day out.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'One of the most popular drives from Faliraki is to Anthony Quinn Bay. The small bay is known for clear water, rocky scenery and snorkelling, but parking and access are more convenient when you have your own vehicle. Ladiko Bay is nearby, while Kallithea Springs lies a short drive to the north. Having a car allows you to visit these places early, stay as long as you like and combine several coastal stops in one day.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Faliraki also offers easy road connections to the rest of Rhodes. Rhodes Town is approximately a short drive north, making it possible to visit the medieval Old Town, Mandraki Harbour and Elli Beach. Travelling south, you can reach Tsambika, Kolymbia and Lindos for a full-day island trip. A compact or automatic car is practical for couples, while families may prefer a larger car or SUV for passengers, luggage and beach equipment.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Clear rental terms are important when planning your holiday budget. AutoClub Rhodes provides Faliraki car rental with full insurance included, zero excess and no deposit required. We focus on transparent prices without hidden fees or unexpected insurance upgrades at collection. The rental conditions are supplied before booking so you understand the agreement, the included coverage and the return process.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Local Rhodes support and road assistance are available during your rental if you need help while travelling around the island. Our team can also offer practical guidance about vehicle categories, hotel delivery and routes based on your holiday plans. If you want an automatic, family SUV or convertible car during the busy summer season, booking early gives you the best opportunity to secure the right category.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes is a local family business serving Rhodes visitors since 1982. Whether you are staying in a large beachfront resort, a family hotel or private accommodation, our goal is to make car rental in Faliraki clear and convenient. With flexible local delivery, full insurance, no deposit and direct support, you can spend less time organising transport and more time discovering Rhodes.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-faliraki-places" aria-labelledby="autoclub-faliraki-places-title">
		<div class="autoclub-faliraki-inner">
			<div class="autoclub-faliraki-heading">
				<p class="autoclub-faliraki-eyebrow"><?php esc_html_e( 'Easy east-coast day trips', 'astra-child' ); ?></p>
				<h2 id="autoclub-faliraki-places-title"><?php esc_html_e( 'Popular Places Near Faliraki', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-faliraki-places__grid">
				<?php foreach ( $faliraki_places as $place ) : ?>
					<article class="autoclub-faliraki-place-card">
						<h3><?php echo esc_html( $place['title'] ); ?></h3>
						<p><?php echo esc_html( $place['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-faliraki-faq" aria-labelledby="autoclub-faliraki-faq-title">
		<div class="autoclub-faliraki-faq__inner">
			<div class="autoclub-faliraki-heading">
				<p class="autoclub-faliraki-eyebrow"><?php esc_html_e( 'Faliraki rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-faliraki-faq-title"><?php esc_html_e( 'Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-faliraki-faq__list">
				<details class="autoclub-faliraki-faq__item">
					<summary><?php esc_html_e( 'Can I collect the car at my hotel?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Hotel delivery can be arranged at selected Faliraki hotels and resorts according to your confirmed booking details.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-faliraki-faq__item">
					<summary><?php esc_html_e( 'Do I need a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required and clear conditions before the handover.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-faliraki-faq__item">
					<summary><?php esc_html_e( 'Is insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the rental conditions provided before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-faliraki-faq__item">
					<summary><?php esc_html_e( 'Can I drive to Lindos?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Lindos is an easy day trip from Faliraki, with direct access along the main east-coast road.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-faliraki-links" aria-labelledby="autoclub-faliraki-links-title">
		<div class="autoclub-faliraki-inner">
			<div class="autoclub-faliraki-heading">
				<p class="autoclub-faliraki-eyebrow"><?php esc_html_e( 'More Rhodes pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-faliraki-links-title"><?php esc_html_e( 'Explore Other Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-faliraki-links__grid">
				<?php foreach ( $faliraki_links as $location_link ) : ?>
					<article class="autoclub-faliraki-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-faliraki-final-cta" aria-labelledby="autoclub-faliraki-final-title">
		<div class="autoclub-faliraki-final-cta__inner">
			<h2 id="autoclub-faliraki-final-title"><?php esc_html_e( 'Ready To Explore Faliraki?', 'astra-child' ); ?></h2>
			<a class="autoclub-faliraki-button autoclub-faliraki-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
