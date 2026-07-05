<?php
/**
 * Kolymbia car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$kolymbia_benefits = array(
	__( 'Hotel Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$kolymbia_places = array(
	array(
		'title' => __( 'Kolymbia Beach', 'astra-child' ),
		'text'  => __( 'Relax beside the clear water, organised beach areas and calm resort atmosphere of Kolymbia.', 'astra-child' ),
	),
	array(
		'title' => __( 'Tsambika Beach', 'astra-child' ),
		'text'  => __( 'Drive to one of the best-known sandy beaches on the east coast, ideal for couples and families.', 'astra-child' ),
	),
	array(
		'title' => __( 'Seven Springs', 'astra-child' ),
		'text'  => __( 'Explore a peaceful woodland setting with shaded paths, natural springs and a historic tunnel.', 'astra-child' ),
	),
	array(
		'title' => __( 'Afandou', 'astra-child' ),
		'text'  => __( 'Visit the traditional village, long beach and nearby Traganou Bay just north of Kolymbia.', 'astra-child' ),
	),
);

$kolymbia_links = array(
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

<main id="primary" class="autoclub-kolymbia-page">
	<section class="autoclub-kolymbia-hero" aria-labelledby="autoclub-kolymbia-title">
		<div class="autoclub-kolymbia-hero__inner">
			<p class="autoclub-kolymbia-eyebrow"><?php esc_html_e( 'Kolymbia Car Rental', 'astra-child' ); ?></p>
			<h1 id="autoclub-kolymbia-title"><?php esc_html_e( 'Rent a Car in Kolymbia', 'astra-child' ); ?></h1>
			<p class="autoclub-kolymbia-hero__subtitle"><?php esc_html_e( 'Discover Kolymbia, Tsambika Beach and the east coast of Rhodes with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-kolymbia-button autoclub-kolymbia-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-kolymbia-benefits" aria-label="<?php esc_attr_e( 'Kolymbia car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-kolymbia-inner">
			<ul class="autoclub-kolymbia-benefits__grid">
				<?php foreach ( $kolymbia_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-kolymbia-content" aria-labelledby="autoclub-kolymbia-content-title">
		<div class="autoclub-kolymbia-content__inner">
			<p class="autoclub-kolymbia-eyebrow"><?php esc_html_e( 'Local east-coast car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-kolymbia-content-title"><?php esc_html_e( 'Kolymbia Car Rental With AutoClub Rhodes', 'astra-child' ); ?></h2>

			<div class="autoclub-kolymbia-content__copy">
				<p><?php esc_html_e( 'Kolymbia is a relaxed resort on the east coast of Rhodes, positioned between Faliraki and Lindos. Its long eucalyptus-lined avenue, peaceful beaches and wide choice of hotels make it a popular base for couples and families. Renting a car in Kolymbia gives you the freedom to explore the island beyond your resort, travel at your own pace and reach beaches or villages that are less convenient by public transport.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes can arrange delivery to selected Kolymbia hotels according to your confirmed booking. A local representative meets you at the agreed place, explains the vehicle, insurance, fuel policy and return arrangements, and answers any practical questions. Hotel delivery helps you start driving without travelling to a rental office and is especially convenient for families arriving with luggage or guests who have already reached their accommodation by transfer.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Tsambika Beach is one of the most popular destinations near Kolymbia. The broad sandy beach, shallow water and organised facilities suit family days by the sea, while the surrounding landscape makes the short drive especially enjoyable. You can also visit the Tsambika Monastery viewpoint, allowing suitable time for the climb, or continue south towards Stegna, Haraki and Lindos for a longer east-coast day trip.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Seven Springs is another easy excursion from Kolymbia. This wooded area offers shaded walking paths, natural springs and a historic tunnel in a cooler inland setting. A rental car lets you arrive earlier, avoid the busiest periods and combine the visit with nearby villages or beaches. Afandou, Traganou Bay and Anthony Quinn Bay are also within comfortable driving distance for varied days around northern and central Rhodes.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Kolymbia is well placed for exploring the main east-coast route. Rhodes Town and its medieval Old Town lie to the north, while Lindos, Pefkos and southern Rhodes are reached by driving south. This central position means you can plan short local outings or full island days without changing accommodation. Compact cars are useful for village streets, while automatic models make busy routes and hotel areas simple to navigate.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Families often choose Kolymbia for its quieter atmosphere, family-friendly hotels and access to beaches with useful facilities. A family car or SUV provides additional room for passengers, suitcases, pushchairs and beach equipment. Couples may prefer a compact car or cabrio for scenic coastal drives. Vehicle availability varies, so booking early is recommended when you need a particular category during the busiest holiday months.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes offers Kolymbia car rental with full insurance included, zero excess and no deposit required. Clear rental conditions help you understand the cost and included coverage before collection, without unexpected insurance upgrades or hidden fees at handover. This straightforward approach makes it easier to plan your holiday budget and enjoy your journeys around Rhodes with confidence from the first day.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Local Rhodes support and road assistance are available during your rental if you need help. Our team can provide useful information about hotel delivery, airport arrangements, vehicle categories and routes across the island. As a local family business serving visitors since 1982, AutoClub Rhodes aims to make every stage of renting a car in Kolymbia clear, convenient and personal, from the booking request to the final return.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-kolymbia-places" aria-labelledby="autoclub-kolymbia-places-title">
		<div class="autoclub-kolymbia-inner">
			<div class="autoclub-kolymbia-heading">
				<p class="autoclub-kolymbia-eyebrow"><?php esc_html_e( 'Explore the east coast', 'astra-child' ); ?></p>
				<h2 id="autoclub-kolymbia-places-title"><?php esc_html_e( 'Popular Places Near Kolymbia', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-kolymbia-places__grid">
				<?php foreach ( $kolymbia_places as $place ) : ?>
					<article class="autoclub-kolymbia-place-card">
						<h3><?php echo esc_html( $place['title'] ); ?></h3>
						<p><?php echo esc_html( $place['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-kolymbia-faq" aria-labelledby="autoclub-kolymbia-faq-title">
		<div class="autoclub-kolymbia-faq__inner">
			<div class="autoclub-kolymbia-heading">
				<p class="autoclub-kolymbia-eyebrow"><?php esc_html_e( 'Kolymbia rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-kolymbia-faq-title"><?php esc_html_e( 'Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-kolymbia-faq__list">
				<details class="autoclub-kolymbia-faq__item">
					<summary><?php esc_html_e( 'Can I collect the car at my hotel in Kolymbia?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Hotel delivery can be arranged at selected Kolymbia hotels according to your confirmed booking details.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-kolymbia-faq__item">
					<summary><?php esc_html_e( 'Do I need a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required and clear conditions before collection.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-kolymbia-faq__item">
					<summary><?php esc_html_e( 'Is insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the rental conditions supplied before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-kolymbia-faq__item">
					<summary><?php esc_html_e( 'Can I drive to Lindos or Rhodes Town?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Kolymbia has convenient road access to both Lindos and Rhodes Town, making either destination suitable for a day trip.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-kolymbia-links" aria-labelledby="autoclub-kolymbia-links-title">
		<div class="autoclub-kolymbia-inner">
			<div class="autoclub-kolymbia-heading">
				<p class="autoclub-kolymbia-eyebrow"><?php esc_html_e( 'More Rhodes pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-kolymbia-links-title"><?php esc_html_e( 'Explore Other Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-kolymbia-links__grid">
				<?php foreach ( $kolymbia_links as $location_link ) : ?>
					<article class="autoclub-kolymbia-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-kolymbia-final-cta" aria-labelledby="autoclub-kolymbia-final-title">
		<div class="autoclub-kolymbia-final-cta__inner">
			<h2 id="autoclub-kolymbia-final-title"><?php esc_html_e( 'Ready To Explore Kolymbia?', 'astra-child' ); ?></h2>
			<a class="autoclub-kolymbia-button autoclub-kolymbia-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
