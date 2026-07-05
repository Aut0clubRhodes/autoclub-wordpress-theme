<?php
/**
 * Locations page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$locations = array(
	array(
		'title'       => __( 'Rhodes Airport Car Rental', 'astra-child' ),
		'description' => __( 'Start your holiday with straightforward car rental at Rhodes Airport, including clear pricing, full insurance and free airport delivery.', 'astra-child' ),
		'image'       => 'AIRPORT.jfif',
		'alt'         => __( 'Rhodes Airport car rental location', 'astra-child' ),
		'url'         => home_url( '/locations-car-rental-rhodes-airport/' ),
	),
	array(
		'title'       => __( 'Rhodes Town Car Rental', 'astra-child' ),
		'description' => __( 'Collect your rental car in Rhodes Town, near the Old Town and selected hotels, with local support and no hidden fees.', 'astra-child' ),
		'image'       => 'RODOS CITY.jfif',
		'alt'         => __( 'Rhodes Town car rental location', 'astra-child' ),
		'url'         => home_url( '/locations-car-rental-rhodes-town/' ),
	),
	array(
		'title'       => __( 'Faliraki Car Rental', 'astra-child' ),
		'description' => __( 'Flexible Faliraki car rental for beach days, resort stays and family holidays, supported by a local Rhodes team.', 'astra-child' ),
		'image'       => 'FALIRAKI.jfif',
		'alt'         => __( 'Faliraki car rental location', 'astra-child' ),
		'url'         => home_url( '/locations-car-rental-faliraki/' ),
	),
	array(
		'title'       => __( 'Lindos Car Rental', 'astra-child' ),
		'description' => __( 'Explore Lindos and southern Rhodes with a comfortable rental car, zero excess, no deposit and transparent rental conditions.', 'astra-child' ),
		'image'       => 'LINDOS.jfif',
		'alt'         => __( 'Lindos car rental location', 'astra-child' ),
		'url'         => home_url( '/locations-car-rental-lindos/' ),
	),
	array(
		'title'       => __( 'Ixia Car Rental', 'astra-child' ),
		'description' => __( 'Rent a car in Ixia and explore Rhodes Town, the west coast and nearby beaches with full insurance, zero excess and no deposit.', 'astra-child' ),
		'image'       => 'ixia.png.png',
		'alt'         => __( 'Ixia car rental location', 'astra-child' ),
		'url'         => home_url( '/car-rental-ixia-rhodes/' ),
	),
	array(
		'title'       => __( 'Afandou Car Rental', 'astra-child' ),
		'description' => __( 'Explore Afandou, Traganou Beach and the east coast of Rhodes with reliable local car rental, full insurance and free hotel delivery.', 'astra-child' ),
		'image'       => 'afandou.png.png',
		'alt'         => __( 'Afandou car rental location', 'astra-child' ),
		'url'         => home_url( '/car-rental-afandou-rhodes/' ),
	),
	array(
		'title'       => __( 'Kolymbia Car Rental', 'astra-child' ),
		'description' => __( 'Enjoy car rental in Kolymbia with easy hotel delivery, full insurance, zero excess and quick access to the best beaches of Rhodes.', 'astra-child' ),
		'image'       => 'kolimpia.png.png',
		'alt'         => __( 'Kolymbia car rental location', 'astra-child' ),
		'url'         => home_url( '/car-rental-kolymbia-rhodes/' ),
	),
	array(
		'title'       => __( 'Pefkos Car Rental', 'astra-child' ),
		'description' => __( 'Discover Pefkos, Lindos and southern Rhodes with a comfortable rental car, transparent pricing, zero excess and no deposit.', 'astra-child' ),
		'image'       => 'pefkos.png.png',
		'alt'         => __( 'Pefkos car rental location', 'astra-child' ),
		'url'         => home_url( '/car-rental-pefkos-rhodes/' ),
	),
);
?>

<main id="primary" class="autoclub-locations-page">
	<section class="autoclub-locations-hero" aria-labelledby="autoclub-locations-page-title">
		<div class="autoclub-locations-hero__inner">
			<p class="autoclub-locations-page__eyebrow"><?php esc_html_e( 'Car rental across Rhodes', 'astra-child' ); ?></p>
			<h1 id="autoclub-locations-page-title"><?php esc_html_e( 'Car Rental Locations in Rhodes', 'astra-child' ); ?></h1>
			<p class="autoclub-locations-hero__intro">
				<?php esc_html_e( 'Choose convenient car rental at Rhodes Airport, Rhodes Town, Faliraki, Lindos and selected hotels across the island. AutoClub Rhodes provides full insurance, zero excess, no deposit and free airport delivery with clear local support.', 'astra-child' ); ?>
			</p>
			<a class="autoclub-locations-button autoclub-locations-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Start Your Booking', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-locations-list" aria-labelledby="autoclub-locations-list-title">
		<div class="autoclub-locations-page__inner">
			<div class="autoclub-locations-page__heading">
				<p class="autoclub-locations-page__eyebrow"><?php esc_html_e( 'Pickup and delivery areas', 'astra-child' ); ?></p>
				<h2 id="autoclub-locations-list-title"><?php esc_html_e( 'Find Your Car Rental Location', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'Select the area that best matches your arrival point, accommodation or Rhodes travel plans.', 'astra-child' ); ?></p>
			</div>

			<div class="autoclub-locations-page__grid">
				<?php foreach ( $locations as $location ) : ?>
					<article class="autoclub-locations-page__card">
						<div class="autoclub-locations-page__media">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/locations/' . $location['image'] ); ?>" alt="<?php echo esc_attr( $location['alt'] ); ?>" loading="lazy" decoding="async">
						</div>
						<div class="autoclub-locations-page__card-body">
							<h3><?php echo esc_html( $location['title'] ); ?></h3>
							<p><?php echo esc_html( $location['description'] ); ?></p>
							<a class="autoclub-locations-button" href="<?php echo esc_url( $location['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-locations-benefits" aria-labelledby="autoclub-locations-benefits-title">
		<div class="autoclub-locations-page__inner">
			<div class="autoclub-locations-page__heading autoclub-locations-page__heading--centered">
				<p class="autoclub-locations-page__eyebrow"><?php esc_html_e( 'Simple local service', 'astra-child' ); ?></p>
				<h2 id="autoclub-locations-benefits-title"><?php esc_html_e( 'One Clear Rental Experience Across Rhodes', 'astra-child' ); ?></h2>
			</div>

			<ul class="autoclub-locations-benefits__grid" aria-label="<?php esc_attr_e( 'AutoClub Rhodes rental benefits', 'astra-child' ); ?>">
				<li><?php esc_html_e( 'No Deposit', 'astra-child' ); ?></li>
				<li><?php esc_html_e( 'Zero Excess', 'astra-child' ); ?></li>
				<li><?php esc_html_e( 'Full Insurance Included', 'astra-child' ); ?></li>
				<li><?php esc_html_e( 'Free Airport Delivery', 'astra-child' ); ?></li>
				<li><?php esc_html_e( 'Local Rhodes Support', 'astra-child' ); ?></li>
			</ul>
		</div>
	</section>

	<section class="autoclub-locations-cta" aria-labelledby="autoclub-locations-cta-title">
		<div class="autoclub-locations-cta__inner">
			<p class="autoclub-locations-page__eyebrow"><?php esc_html_e( 'Ready to explore Rhodes?', 'astra-child' ); ?></p>
			<h2 id="autoclub-locations-cta-title"><?php esc_html_e( 'Book Your Rental Car Direct', 'astra-child' ); ?></h2>
			<p><?php esc_html_e( 'Choose your dates and pickup location to start a simple, transparent booking with AutoClub Rhodes.', 'astra-child' ); ?></p>
			<a class="autoclub-locations-button autoclub-locations-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Start Your Booking', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
