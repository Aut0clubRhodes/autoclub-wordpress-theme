<?php
/**
 * Ixia car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$ixia_benefits = array(
	__( 'Hotel Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$ixia_places = array(
	array(
		'title' => __( 'Ixia Beach', 'astra-child' ),
		'text'  => __( 'Enjoy the west-coast beach, sea views and reliable conditions for windsurfing and water sports.', 'astra-child' ),
	),
	array(
		'title' => __( 'Rhodes Town', 'astra-child' ),
		'text'  => __( 'Reach the medieval Old Town, Mandraki Harbour and northern Rhodes attractions in a short drive.', 'astra-child' ),
	),
	array(
		'title' => __( 'Monte Smith', 'astra-child' ),
		'text'  => __( 'Visit the hilltop viewpoint, ancient stadium and archaeological remains above Rhodes Town.', 'astra-child' ),
	),
	array(
		'title' => __( 'Palace of the Grand Master', 'astra-child' ),
		'text'  => __( 'Explore one of the Old Town’s most important landmarks and the historic Street of the Knights.', 'astra-child' ),
	),
);

$ixia_links = array(
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

<main id="primary" class="autoclub-ixia-page">
	<section class="autoclub-ixia-hero" aria-labelledby="autoclub-ixia-title">
		<div class="autoclub-ixia-hero__inner">
			<p class="autoclub-ixia-eyebrow"><?php esc_html_e( 'Ixia Car Rental', 'astra-child' ); ?></p>
			<h1 id="autoclub-ixia-title"><?php esc_html_e( 'Rent a Car in Ixia', 'astra-child' ); ?></h1>
			<p class="autoclub-ixia-hero__subtitle"><?php esc_html_e( 'Explore Rhodes Island from Ixia with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-ixia-button autoclub-ixia-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-ixia-benefits" aria-label="<?php esc_attr_e( 'Ixia car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-ixia-inner">
			<ul class="autoclub-ixia-benefits__grid">
				<?php foreach ( $ixia_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-ixia-content" aria-labelledby="autoclub-ixia-content-title">
		<div class="autoclub-ixia-content__inner">
			<p class="autoclub-ixia-eyebrow"><?php esc_html_e( 'Local west-coast car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-ixia-content-title"><?php esc_html_e( 'Ixia Car Rental With AutoClub Rhodes', 'astra-child' ); ?></h2>

			<div class="autoclub-ixia-content__copy">
				<p><?php esc_html_e( 'Ixia is a popular hotel and resort area on the west coast of Rhodes, located between Rhodes Town and Ialyssos. The area is known for large beachfront hotels, sea views, restaurants and easy access to both the island’s capital and Rhodes Airport. Renting a car in Ixia gives couples and families the freedom to explore beyond the hotel zone while keeping everyday journeys simple and flexible.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes can arrange convenient hotel delivery in Ixia according to your confirmed booking details. Our local representative meets you at the agreed location, explains the vehicle, fuel policy, insurance and return process, and answers questions before you drive away. Hotel delivery is useful if you arrive by transfer, want time to settle in or only need a rental car for part of your stay.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Ixia Beach follows the main coastal road and is especially well known for windsurfing. The west coast often has stronger breezes and waves than the east, attracting experienced windsurfers and visitors who enjoy active beach holidays. With a rental car, you can carry beach equipment more easily, move between different sections of the coast and combine time by the sea with sightseeing elsewhere on the island.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Rhodes Town is only a short drive from Ixia. You can park outside the medieval walls and explore the Old Town on foot, visit the Palace of the Grand Master or continue towards Mandraki Harbour and Elli Beach. Monte Smith is another nearby destination, offering elevated views over the city and west coast together with the ancient stadium and archaeological remains of the Acropolis of Rhodes.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Ixia is also conveniently positioned for Rhodes Airport. The airport lies west of the resort and can be reached without travelling through the centre of Rhodes Town. This proximity makes Ixia practical for shorter holidays, families with children and travellers who want straightforward arrival or departure arrangements. Airport pickup or return can be confirmed as part of your booking when required.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Families often choose Ixia because many hotels provide pools, organised facilities and direct access to the coast. A family car or SUV offers extra space for passengers, luggage, pushchairs and beach equipment. Compact automatic cars are comfortable for couples and make city traffic or parking easier. Your rental car also opens up day trips to Faliraki, Kallithea, Lindos and beaches across the east coast.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes provides Ixia car rental with full insurance included, zero excess and no deposit required. We focus on clear rental conditions and transparent pricing without hidden fees or unexpected insurance upgrades at collection. Understanding the included coverage and total cost before the handover helps you plan your holiday budget and travel around Rhodes with greater confidence.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Local Rhodes support and road assistance are available throughout your rental if you need help. Our team can provide practical information about hotel delivery, airport arrangements, vehicle categories and island routes. AutoClub Rhodes is a local family business serving visitors since 1982, with the aim of making car rental in Ixia straightforward from the first booking request through the final return.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-ixia-places" aria-labelledby="autoclub-ixia-places-title">
		<div class="autoclub-ixia-inner">
			<div class="autoclub-ixia-heading">
				<p class="autoclub-ixia-eyebrow"><?php esc_html_e( 'Explore northern Rhodes', 'astra-child' ); ?></p>
				<h2 id="autoclub-ixia-places-title"><?php esc_html_e( 'Popular Places Near Ixia', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-ixia-places__grid">
				<?php foreach ( $ixia_places as $place ) : ?>
					<article class="autoclub-ixia-place-card">
						<h3><?php echo esc_html( $place['title'] ); ?></h3>
						<p><?php echo esc_html( $place['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-ixia-faq" aria-labelledby="autoclub-ixia-faq-title">
		<div class="autoclub-ixia-faq__inner">
			<div class="autoclub-ixia-heading">
				<p class="autoclub-ixia-eyebrow"><?php esc_html_e( 'Ixia rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-ixia-faq-title"><?php esc_html_e( 'Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-ixia-faq__list">
				<details class="autoclub-ixia-faq__item">
					<summary><?php esc_html_e( 'Can I collect the car at my hotel in Ixia?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Hotel delivery can be arranged at selected Ixia hotels according to your confirmed booking details.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-ixia-faq__item">
					<summary><?php esc_html_e( 'Do I need a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required and clear conditions before collection.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-ixia-faq__item">
					<summary><?php esc_html_e( 'Is insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the rental conditions supplied before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-ixia-faq__item">
					<summary><?php esc_html_e( 'How far is Rhodes Airport from Ixia?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Rhodes Airport is approximately 9 to 12 kilometres from Ixia, depending on your hotel and the selected route.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-ixia-links" aria-labelledby="autoclub-ixia-links-title">
		<div class="autoclub-ixia-inner">
			<div class="autoclub-ixia-heading">
				<p class="autoclub-ixia-eyebrow"><?php esc_html_e( 'More Rhodes pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-ixia-links-title"><?php esc_html_e( 'Explore Other Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-ixia-links__grid">
				<?php foreach ( $ixia_links as $location_link ) : ?>
					<article class="autoclub-ixia-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-ixia-final-cta" aria-labelledby="autoclub-ixia-final-title">
		<div class="autoclub-ixia-final-cta__inner">
			<h2 id="autoclub-ixia-final-title"><?php esc_html_e( 'Ready To Explore Ixia?', 'astra-child' ); ?></h2>
			<a class="autoclub-ixia-button autoclub-ixia-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
