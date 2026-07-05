<?php
/**
 * Rhodes Airport car rental page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$airport_benefits = array(
	__( 'Free Airport Delivery', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Zero Excess', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$airport_steps = array(
	array(
		'number' => '01',
		'title'  => __( 'Book Online', 'astra-child' ),
		'text'   => __( 'Choose your dates, vehicle type and flight details through our simple booking process.', 'astra-child' ),
	),
	array(
		'number' => '02',
		'title'  => __( 'Land at Rhodes Airport', 'astra-child' ),
		'text'   => __( 'Arrive at Rhodes International Airport knowing your local rental team is ready to help.', 'astra-child' ),
	),
	array(
		'number' => '03',
		'title'  => __( 'Meet Our Representative And Drive Away', 'astra-child' ),
		'text'   => __( 'Complete the handover, receive the keys and begin your holiday without an off-site shuttle.', 'astra-child' ),
	),
);

$airport_vehicles = array(
	array(
		'title' => __( 'Automatic Cars', 'astra-child' ),
		'text'  => __( 'Comfortable automatic cars for easy airport pickup, Rhodes Town traffic and relaxed island driving.', 'astra-child' ),
		'image' => 'automatic-cars.webp.png',
		'alt'   => __( 'Automatic rental cars at Rhodes Airport', 'astra-child' ),
	),
	array(
		'title' => __( 'Family SUVs', 'astra-child' ),
		'text'  => __( 'Extra room for families, luggage, beach equipment and longer journeys around Rhodes.', 'astra-child' ),
		'image' => 'family-suv.webp.png',
		'alt'   => __( 'Family SUV rental at Rhodes Airport', 'astra-child' ),
	),
	array(
		'title' => __( 'Convertible Cars', 'astra-child' ),
		'text'  => __( 'Open-top cars for couples planning coastal drives between Rhodes Town, Faliraki and Lindos.', 'astra-child' ),
		'image' => 'convertible-cars.webp.png',
		'alt'   => __( 'Convertible rental cars at Rhodes Airport', 'astra-child' ),
	),
);

$airport_links = array(
	array(
		'title' => __( 'Rhodes Town', 'astra-child' ),
		'text'  => __( 'Car rental for Rhodes Town, the Old Town and nearby hotels.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-rhodes-town/' ),
	),
	array(
		'title' => __( 'Faliraki', 'astra-child' ),
		'text'  => __( 'Flexible local car rental for Faliraki beaches and resorts.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-faliraki/' ),
	),
	array(
		'title' => __( 'Lindos', 'astra-child' ),
		'text'  => __( 'Explore Lindos and southern Rhodes with your own rental car.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-lindos/' ),
	),
	array(
		'title' => __( 'All Locations', 'astra-child' ),
		'text'  => __( 'See every AutoClub Rhodes pickup and delivery area.', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
	),
);
?>

<main id="primary" class="autoclub-airport-page">
	<section class="autoclub-airport-hero" aria-labelledby="autoclub-airport-title">
		<div class="autoclub-airport-hero__inner">
			<p class="autoclub-airport-eyebrow"><?php esc_html_e( 'Rhodes Airport Car Rental', 'astra-child' ); ?></p>
			<h1 id="autoclub-airport-title"><?php esc_html_e( 'Rent a Car at Rhodes Airport', 'astra-child' ); ?></h1>
			<p class="autoclub-airport-hero__subtitle"><?php esc_html_e( 'Meet & Greet service directly at Rhodes Airport with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-airport-button autoclub-airport-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-airport-benefits" aria-label="<?php esc_attr_e( 'Rhodes Airport car rental benefits', 'astra-child' ); ?>">
		<div class="autoclub-airport-inner">
			<ul class="autoclub-airport-benefits__grid">
				<?php foreach ( $airport_benefits as $benefit ) : ?>
					<li><?php echo esc_html( $benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-airport-steps" aria-labelledby="autoclub-airport-steps-title">
		<div class="autoclub-airport-inner">
			<div class="autoclub-airport-heading">
				<p class="autoclub-airport-eyebrow"><?php esc_html_e( 'Simple airport handover', 'astra-child' ); ?></p>
				<h2 id="autoclub-airport-steps-title"><?php esc_html_e( 'How Airport Pickup Works', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-airport-steps__grid">
				<?php foreach ( $airport_steps as $step ) : ?>
					<article class="autoclub-airport-step-card">
						<span><?php echo esc_html( $step['number'] ); ?></span>
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-airport-content" aria-labelledby="autoclub-airport-content-title">
		<div class="autoclub-airport-content__inner">
			<p class="autoclub-airport-eyebrow"><?php esc_html_e( 'Local airport car hire', 'astra-child' ); ?></p>
			<h2 id="autoclub-airport-content-title"><?php esc_html_e( 'Rhodes Airport Car Rental With AutoClub Rhodes', 'astra-child' ); ?></h2>

			<div class="autoclub-airport-content__copy">
				<p><?php esc_html_e( 'Rhodes International Airport, also known as Diagoras Airport or RHO, is the main arrival point for visitors travelling to the island. Located on the west coast near Paradisi, the airport is approximately 14 kilometres from Rhodes Town and provides convenient access to resorts across Rhodes. Renting a car at Rhodes Airport gives you the freedom to begin your holiday immediately, without waiting for scheduled transfers or planning every journey around public transport.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'AutoClub Rhodes offers a practical meet and greet service for customers arriving by air. After you provide your flight details, our local team can prepare for your arrival and arrange the vehicle handover at Rhodes Airport. There is no need to search for a remote rental office or take an unfamiliar shuttle after your flight. You meet our representative, review the rental details, receive the keys and can continue directly to your hotel, villa or first destination.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'The airport pickup process is designed to be clear and straightforward. When booking, select Rhodes Airport as your pickup location and enter accurate arrival information. Flight details help us follow your expected landing time and manage reasonable schedule changes. At the arranged meeting point, our representative explains the vehicle, fuel policy and return procedure. You can ask questions before leaving, so you understand the rental conditions and know how to contact the local team during your stay.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Clear pricing matters when you rent a car in Rhodes. AutoClub Rhodes focuses on rentals with full insurance included, zero excess, no deposit and no hidden fees. These terms make it easier to understand the cost before confirming your booking. Instead of arriving at the airport and discovering unexpected insurance upgrades or a large deposit requirement, you receive the agreed rental conditions in advance. The aim is a transparent experience from your first enquiry through the final vehicle return.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Full insurance and zero excess provide additional confidence while exploring the island. Rhodes includes busy town roads, mountain routes, resort areas and narrow village streets, so choosing a suitable vehicle and understanding the rental coverage are important. Our team can explain the applicable conditions and help you select a car that matches your holiday plans. Local road assistance and Rhodes support are also available if you need help during the rental period.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Different holidays require different types of rental cars. Compact and automatic cars are popular with couples and travellers who want easy driving between Rhodes Airport, Rhodes Town and nearby resorts. An automatic car can make unfamiliar roads and stop-start traffic more comfortable, while a compact model is convenient for parking and shorter island trips. These vehicles are also a practical choice for hotel delivery and everyday beach visits.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Families and groups often need more passenger room and luggage capacity after landing at Rhodes Airport. Family cars and SUVs provide additional comfort for suitcases, pushchairs and beach equipment, especially when travelling to Faliraki, Kolymbia, Lindos, Pefkos or accommodation in southern Rhodes. If your plans include longer drives across the island, the added space can make each journey more relaxed. Let us know how many passengers and bags you expect so we can help identify an appropriate category.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'For couples who want the journey to become part of the holiday, cabrio cars offer an enjoyable way to experience the coast. A convertible rental car is ideal for scenic drives towards Rhodes Town, Anthony Quinn Bay, Tsambika, Lindos and the east coast. Availability can be limited during the busiest travel periods, so advance booking is recommended for specific automatic, SUV or cabrio categories.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Returning your rental car at Rhodes Airport can be arranged as part of the booking. We provide clear instructions about the meeting time, location and vehicle return so you can plan around your departure flight. Allow enough time for the handover and airport check-in, particularly during the summer season. If your flight schedule changes, contact the local team as early as possible so the return arrangements can be reviewed.', 'astra-child' ); ?></p>

				<p><?php esc_html_e( 'Choosing AutoClub Rhodes means booking with a local family business that has served visitors to Rhodes since 1982. Our goal is not simply to provide a vehicle, but to make airport pickup, island driving and return as uncomplicated as possible. Whether you need an automatic car for two people, a spacious family SUV or a cabrio for coastal drives, you can arrange Rhodes Airport car rental with clear conditions, local support and a simple direct booking process.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>

	<section class="autoclub-airport-vehicles" aria-labelledby="autoclub-airport-vehicles-title">
		<div class="autoclub-airport-inner">
			<div class="autoclub-airport-heading">
				<p class="autoclub-airport-eyebrow"><?php esc_html_e( 'Cars for every Rhodes holiday', 'astra-child' ); ?></p>
				<h2 id="autoclub-airport-vehicles-title"><?php esc_html_e( 'Popular Vehicle Types', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-airport-vehicles__grid">
				<?php foreach ( $airport_vehicles as $vehicle ) : ?>
					<article class="autoclub-airport-vehicle-card">
						<div class="autoclub-airport-vehicle-card__media">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/cars/' . $vehicle['image'] ); ?>" alt="<?php echo esc_attr( $vehicle['alt'] ); ?>" loading="lazy" decoding="async">
						</div>
						<div class="autoclub-airport-vehicle-card__body">
							<h3><?php echo esc_html( $vehicle['title'] ); ?></h3>
							<p><?php echo esc_html( $vehicle['text'] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
			<a class="autoclub-airport-button autoclub-airport-section-button" href="<?php echo esc_url( home_url( '/car-rental-fleet-rhodes/' ) ); ?>"><?php esc_html_e( 'View Fleet', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-airport-faq" aria-labelledby="autoclub-airport-faq-title">
		<div class="autoclub-airport-faq__inner">
			<div class="autoclub-airport-heading">
				<p class="autoclub-airport-eyebrow"><?php esc_html_e( 'Rhodes Airport rental FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-airport-faq-title"><?php esc_html_e( 'Airport Car Rental Questions', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-airport-faq__list">
				<details class="autoclub-airport-faq__item">
					<summary><?php esc_html_e( 'Can I collect my car at Rhodes Airport?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Arrange Rhodes Airport as your pickup location and provide your flight details so our local team can prepare the meet and greet handover.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-airport-faq__item">
					<summary><?php esc_html_e( 'Do I need a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers car rental with no deposit required, helping you begin your holiday without a large card hold.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-airport-faq__item">
					<summary><?php esc_html_e( 'Is full insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, subject to the clear rental conditions provided before booking.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-airport-faq__item">
					<summary><?php esc_html_e( 'Can I return the car at the airport?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Airport return can be arranged with clear meeting instructions and timing based on your departure flight.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-airport-faq__item">
					<summary><?php esc_html_e( 'Are automatic cars available?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Compact automatic cars and other automatic categories are available, although advance booking is recommended during busy periods.', 'astra-child' ); ?></p>
				</details>
				<details class="autoclub-airport-faq__item">
					<summary><?php esc_html_e( 'Is road assistance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Local Rhodes support and road assistance are available during your rental if you need help while travelling around the island.', 'astra-child' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="autoclub-airport-links" aria-labelledby="autoclub-airport-links-title">
		<div class="autoclub-airport-inner">
			<div class="autoclub-airport-heading">
				<p class="autoclub-airport-eyebrow"><?php esc_html_e( 'Explore more pickup areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-airport-links-title"><?php esc_html_e( 'Car Rental Locations Around Rhodes', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-airport-links__grid">
				<?php foreach ( $airport_links as $location_link ) : ?>
					<article class="autoclub-airport-link-card">
						<h3><?php echo esc_html( $location_link['title'] ); ?></h3>
						<p><?php echo esc_html( $location_link['text'] ); ?></p>
						<a href="<?php echo esc_url( $location_link['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-airport-final-cta" aria-labelledby="autoclub-airport-final-title">
		<div class="autoclub-airport-final-cta__inner">
			<p class="autoclub-airport-eyebrow"><?php esc_html_e( 'Book direct with a local team', 'astra-child' ); ?></p>
			<h2 id="autoclub-airport-final-title"><?php esc_html_e( 'Ready To Explore Rhodes?', 'astra-child' ); ?></h2>
			<a class="autoclub-airport-button autoclub-airport-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car Now', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
