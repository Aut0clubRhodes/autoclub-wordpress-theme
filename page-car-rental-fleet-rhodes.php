<?php
/**
 * AutoClub Rhodes fleet page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$fleet_cars = array(
	array(
		'name'         => 'Peugeot 108',
		'slug'         => 'peugeot-108',
		'categories'   => array( 'economy' ),
		'category'     => __( 'Economy', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 4,
		'luggage'      => 1,
		'description'  => __( 'Compact and easy to park for couples exploring Rhodes Town and nearby beaches.', 'astra-child' ),
	),
	array(
		'name'         => 'Fiat 500',
		'slug'         => 'fiat-500',
		'categories'   => array( 'economy' ),
		'category'     => __( 'Economy', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 4,
		'luggage'      => 1,
		'description'  => __( 'Stylish compact car for couples, village streets and relaxed coastal journeys.', 'astra-child' ),
	),
	array(
		'name'         => 'Kia Picanto',
		'slug'         => 'kia-picanto',
		'categories'   => array( 'economy', 'automatic' ),
		'category'     => __( 'Economy', 'astra-child' ),
		'transmission' => __( 'Manual / Automatic', 'astra-child' ),
		'seats'        => 4,
		'luggage'      => 1,
		'description'  => __( 'Small car with manual or automatic options for short trips and easy parking.', 'astra-child' ),
	),
	array(
		'name'         => 'Fiat Panda',
		'slug'         => 'fiat-panda',
		'categories'   => array( 'economy' ),
		'category'     => __( 'Economy', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 2,
		'description'  => __( 'Practical compact car with useful cabin space for everyday island travel.', 'astra-child' ),
		'images'       => array( 'fiat-panda.webp', 'fiat-panda.webp.png', 'PANDA.png' ),
	),
	array(
		'name'         => 'Toyota Yaris',
		'slug'         => 'toyota-yaris',
		'categories'   => array( 'economy' ),
		'category'     => __( 'Economy', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 2,
		'description'  => __( 'Comfortable hatchback for airport pickup and longer Rhodes drives.', 'astra-child' ),
	),
	array(
		'name'         => 'Dacia Sandero',
		'slug'         => 'dacia-sandero',
		'categories'   => array( 'economy', 'automatic' ),
		'category'     => __( 'Economy', 'astra-child' ),
		'transmission' => __( 'Manual / Automatic', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 2,
		'description'  => __( 'Spacious economy option for couples or small families with holiday luggage.', 'astra-child' ),
	),
	array(
		'name'         => 'Citroen C3',
		'slug'         => 'citroen-c3',
		'categories'   => array( 'economy' ),
		'category'     => __( 'Economy', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 2,
		'description'  => __( 'Comfortable compact car with a smooth ride for island sightseeing.', 'astra-child' ),
	),
	array(
		'name'         => 'Peugeot 208',
		'slug'         => 'peugeot-208',
		'categories'   => array( 'economy', 'automatic' ),
		'category'     => __( 'Automatic', 'astra-child' ),
		'transmission' => __( 'Automatic', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 2,
		'description'  => __( 'Modern automatic hatchback ideal for easy airport, town and resort driving.', 'astra-child' ),
	),
	array(
		'name'         => 'Peugeot 308',
		'slug'         => 'peugeot-308',
		'categories'   => array( 'family' ),
		'category'     => __( 'Family', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 3,
		'description'  => __( 'Refined family hatchback with extra comfort and useful luggage capacity.', 'astra-child' ),
	),
	array(
		'name'         => 'VW T-Cross',
		'slug'         => 'vw-tcross',
		'categories'   => array( 'suv' ),
		'category'     => __( 'SUV', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 3,
		'description'  => __( 'Compact SUV with elevated seating and flexible space for Rhodes holidays.', 'astra-child' ),
	),
	array(
		'name'         => 'MG ZS',
		'slug'         => 'mg-zs',
		'categories'   => array( 'suv' ),
		'category'     => __( 'SUV', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 3,
		'description'  => __( 'Comfortable SUV for families, luggage and longer island routes.', 'astra-child' ),
	),
	array(
		'name'         => 'Toyota C-HR',
		'slug'         => 'toyota-chr',
		'categories'   => array( 'automatic', 'suv' ),
		'category'     => __( 'SUV', 'astra-child' ),
		'transmission' => __( 'Automatic / Hybrid', 'astra-child' ),
		'seats'        => 5,
		'luggage'      => 3,
		'description'  => __( 'Distinctive automatic crossover for comfortable coastal and island touring.', 'astra-child' ),
	),
	array(
		'name'         => 'Mini Cooper Cabrio',
		'slug'         => 'mini-cooper-cabrio',
		'categories'   => array( 'automatic', 'cabrio' ),
		'category'     => __( 'Cabrio', 'astra-child' ),
		'transmission' => __( 'Automatic', 'astra-child' ),
		'seats'        => 4,
		'luggage'      => 1,
		'description'  => __( 'Premium open-top driving for couples exploring Lindos and the east coast.', 'astra-child' ),
	),
	array(
		'name'         => 'Fiat 500 Cabrio',
		'slug'         => 'fiat-500-cabrio',
		'categories'   => array( 'automatic', 'cabrio' ),
		'category'     => __( 'Cabrio', 'astra-child' ),
		'transmission' => __( 'Manual / Automatic', 'astra-child' ),
		'seats'        => 4,
		'luggage'      => 1,
		'description'  => __( 'Compact open-roof car for relaxed sunshine drives around Rhodes.', 'astra-child' ),
	),
	array(
		'name'         => 'Audi A3 Cabrio',
		'slug'         => 'audi-a3-cabrio',
		'categories'   => array( 'automatic', 'cabrio' ),
		'category'     => __( 'Cabrio', 'astra-child' ),
		'transmission' => __( 'Automatic', 'astra-child' ),
		'seats'        => 4,
		'luggage'      => 2,
		'description'  => __( 'Premium automatic cabrio for scenic drives and comfortable island touring.', 'astra-child' ),
	),
	array(
		'name'         => 'VW T-Roc Cabrio',
		'slug'         => 'vw-troc-cabrio',
		'categories'   => array( 'cabrio', 'suv' ),
		'category'     => __( 'Cabrio SUV', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 4,
		'luggage'      => 2,
		'description'  => __( 'Open-top crossover combining a higher driving position with holiday style.', 'astra-child' ),
	),
	array(
		'name'         => 'Peugeot Rifter',
		'slug'         => 'peugeot-rifter',
		'categories'   => array( 'family' ),
		'category'     => __( 'Family / 7 Seater', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 7,
		'luggage'      => 4,
		'description'  => __( 'Flexible seven-seat vehicle for families, groups and additional luggage.', 'astra-child' ),
	),
	array(
		'name'         => 'Dacia Jogger',
		'slug'         => 'dacia-jogger',
		'categories'   => array( 'family' ),
		'category'     => __( 'Family / 7 Seater', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 7,
		'luggage'      => 4,
		'description'  => __( 'Versatile seven-seat family car for passengers, luggage and island trips.', 'astra-child' ),
	),
	array(
		'name'         => 'Hyundai Staria',
		'slug'         => 'hyundai-staria',
		'categories'   => array( 'family' ),
		'category'     => __( 'Family / Minibus', 'astra-child' ),
		'transmission' => __( 'Manual', 'astra-child' ),
		'seats'        => 9,
		'luggage'      => 5,
		'description'  => __( 'Spacious people carrier for larger families and travel groups.', 'astra-child' ),
	),
);

$fleet_image_directory = get_stylesheet_directory() . '/assets/images/cars/';
$fleet_image_uri       = get_stylesheet_directory_uri() . '/assets/images/cars/';
?>

<main id="primary" class="autoclub-fleet-page">
	<section class="autoclub-fleet-hero" aria-labelledby="autoclub-fleet-title">
		<div class="autoclub-fleet-hero__inner">
			<p class="autoclub-fleet-eyebrow"><?php esc_html_e( 'AutoClub Rhodes Fleet', 'astra-child' ); ?></p>
			<h1 id="autoclub-fleet-title"><?php esc_html_e( 'Choose Your Rental Car in Rhodes', 'astra-child' ); ?></h1>
			<p class="autoclub-fleet-hero__subtitle"><?php esc_html_e( 'Economy cars, automatic cars, cabrio cars, SUVs and family vehicles with full insurance, zero excess and no deposit.', 'astra-child' ); ?></p>
			<a class="autoclub-fleet-button autoclub-fleet-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-fleet-list" aria-labelledby="autoclub-fleet-list-title">
		<div class="autoclub-fleet-inner">
			<div class="autoclub-fleet-heading">
				<p class="autoclub-fleet-eyebrow"><?php esc_html_e( 'Cars for every Rhodes holiday', 'astra-child' ); ?></p>
				<h2 id="autoclub-fleet-list-title"><?php esc_html_e( 'Explore Our Rental Fleet', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'Choose a vehicle category that suits your passengers, luggage and travel plans. Models shown may be supplied as the named vehicle or a similar vehicle in the same category.', 'astra-child' ); ?></p>
			</div>

			<div class="autoclub-fleet-filter">
				<input type="radio" name="fleet-filter" id="fleet-filter-all" checked>
				<input type="radio" name="fleet-filter" id="fleet-filter-economy">
				<input type="radio" name="fleet-filter" id="fleet-filter-automatic">
				<input type="radio" name="fleet-filter" id="fleet-filter-cabrio">
				<input type="radio" name="fleet-filter" id="fleet-filter-suv">
				<input type="radio" name="fleet-filter" id="fleet-filter-family">

				<div class="autoclub-fleet-filter__controls" aria-label="<?php esc_attr_e( 'Filter vehicles by category', 'astra-child' ); ?>">
					<label for="fleet-filter-all"><?php esc_html_e( 'All', 'astra-child' ); ?></label>
					<label for="fleet-filter-economy"><?php esc_html_e( 'Economy', 'astra-child' ); ?></label>
					<label for="fleet-filter-automatic"><?php esc_html_e( 'Automatic', 'astra-child' ); ?></label>
					<label for="fleet-filter-cabrio"><?php esc_html_e( 'Cabrio', 'astra-child' ); ?></label>
					<label for="fleet-filter-suv"><?php esc_html_e( 'SUV', 'astra-child' ); ?></label>
					<label for="fleet-filter-family"><?php esc_html_e( 'Family / 7 Seater', 'astra-child' ); ?></label>
				</div>

				<div class="autoclub-fleet-grid">
					<?php foreach ( $fleet_cars as $fleet_car ) : ?>
						<?php
						$image_candidates = isset( $fleet_car['images'] )
							? $fleet_car['images']
							: array(
								$fleet_car['slug'] . '.webp',
								$fleet_car['slug'] . '.webp.png',
							);
						$image_filename   = '';

						foreach ( $image_candidates as $image_candidate ) {
							if ( file_exists( $fleet_image_directory . $image_candidate ) ) {
								$image_filename = $image_candidate;
								break;
							}
						}
						?>
						<article class="autoclub-fleet-card" data-categories="<?php echo esc_attr( implode( ' ', $fleet_car['categories'] ) ); ?>">
							<div class="autoclub-fleet-card__media<?php echo $image_filename ? '' : ' autoclub-fleet-card__media--missing'; ?>">
								<?php if ( $image_filename ) : ?>
									<img src="<?php echo esc_url( $fleet_image_uri . $image_filename ); ?>" alt="<?php echo esc_attr( $fleet_car['name'] . ' rental car in Rhodes' ); ?>" loading="lazy" decoding="async">
								<?php else : ?>
									<span aria-hidden="true"><?php esc_html_e( 'Vehicle image coming soon', 'astra-child' ); ?></span>
								<?php endif; ?>
							</div>
							<div class="autoclub-fleet-card__body">
								<div class="autoclub-fleet-card__badges">
									<span><?php echo esc_html( $fleet_car['category'] ); ?></span>
									<span><?php echo esc_html( $fleet_car['transmission'] ); ?></span>
								</div>
								<h3><?php echo esc_html( $fleet_car['name'] ); ?></h3>
								<ul class="autoclub-fleet-card__specs" aria-label="<?php echo esc_attr( $fleet_car['name'] . ' vehicle features' ); ?>">
									<li><?php echo esc_html( sprintf( _n( '%d seat', '%d seats', $fleet_car['seats'], 'astra-child' ), $fleet_car['seats'] ) ); ?></li>
									<li><?php echo esc_html( sprintf( _n( '%d bag', '%d bags', $fleet_car['luggage'], 'astra-child' ), $fleet_car['luggage'] ) ); ?></li>
									<li><?php esc_html_e( 'Air conditioning', 'astra-child' ); ?></li>
								</ul>
								<p><?php echo esc_html( $fleet_car['description'] ); ?></p>
								<a class="autoclub-fleet-button" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book This Car', 'astra-child' ); ?></a>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="autoclub-fleet-trust" aria-labelledby="autoclub-fleet-trust-title">
		<div class="autoclub-fleet-inner">
			<div class="autoclub-fleet-heading autoclub-fleet-heading--centered">
				<p class="autoclub-fleet-eyebrow"><?php esc_html_e( 'Clear rental benefits', 'astra-child' ); ?></p>
				<h2 id="autoclub-fleet-trust-title"><?php esc_html_e( 'Simple Car Rental in Rhodes', 'astra-child' ); ?></h2>
			</div>
			<ul class="autoclub-fleet-trust__grid">
				<li><?php esc_html_e( 'No Deposit', 'astra-child' ); ?></li>
				<li><?php esc_html_e( 'Zero Excess', 'astra-child' ); ?></li>
				<li><?php esc_html_e( 'Full Insurance Included', 'astra-child' ); ?></li>
				<li><?php esc_html_e( 'Free Airport Delivery', 'astra-child' ); ?></li>
			</ul>
		</div>
	</section>

	<section class="autoclub-fleet-final-cta" aria-labelledby="autoclub-fleet-final-title">
		<div class="autoclub-fleet-final-cta__inner">
			<h2 id="autoclub-fleet-final-title"><?php esc_html_e( 'Ready To Rent a Car in Rhodes?', 'astra-child' ); ?></h2>
			<a class="autoclub-fleet-button autoclub-fleet-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Start Your Booking', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
