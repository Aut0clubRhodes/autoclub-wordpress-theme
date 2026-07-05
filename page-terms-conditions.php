<?php
/**
 * AutoClub Rhodes terms and conditions page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$terms_sections = array(
	array(
		'id'    => 'driver-requirements',
		'title' => __( 'Driver Requirements', 'astra-child' ),
		'items' => array(
			__( 'The minimum driver age is 23 years.', 'astra-child' ),
			__( 'The driver must have held a valid driving licence for at least two years.', 'astra-child' ),
			__( 'A valid passport or identity document is required at vehicle collection.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'insurance-liability',
		'title' => __( 'Insurance & Liability', 'astra-child' ),
		'items' => array(
			__( 'Full insurance is included with the rental.', 'astra-child' ),
			__( 'Zero excess applies according to the confirmed rental agreement.', 'astra-child' ),
			__( 'No deposit is required.', 'astra-child' ),
			__( 'Collision damage waiver is included.', 'astra-child' ),
			__( 'Damage caused by misuse, alcohol, negligence or a breach of the rental agreement is not covered.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'payment-policy',
		'title' => __( 'Payment Policy', 'astra-child' ),
		'items' => array(
			__( 'Payment on arrival is available.', 'astra-child' ),
			__( 'Confirmed rental prices include applicable taxes.', 'astra-child' ),
			__( 'AutoClub Rhodes focuses on clear pricing with no hidden fees.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'cancellation-policy',
		'title' => __( 'Cancellation Policy', 'astra-child' ),
		'items' => array(
			__( 'Free cancellation is available before vehicle pickup.', 'astra-child' ),
			__( 'Please contact AutoClub Rhodes as early as possible if your plans change.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'fuel-policy',
		'title' => __( 'Fuel Policy', 'astra-child' ),
		'items' => array(
			__( 'A same-to-same fuel policy applies. Return the vehicle with the same fuel level recorded at collection.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'delivery-collection',
		'title' => __( 'Delivery & Collection', 'astra-child' ),
		'items' => array(
			__( 'Free Rhodes Airport delivery is available for confirmed bookings.', 'astra-child' ),
			__( 'Hotel delivery is available at selected hotels and resorts across Rhodes.', 'astra-child' ),
			__( 'Meet and greet service is arranged using the arrival and collection details supplied with the booking.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'accident-procedure',
		'title' => __( 'Accident Procedure', 'astra-child' ),
		'items' => array(
			__( 'Contact AutoClub Rhodes immediately after an accident or incident.', 'astra-child' ),
			__( 'Inform the local authorities when required.', 'astra-child' ),
			__( 'Follow the reporting and insurance instructions provided by AutoClub Rhodes.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'traffic-fines',
		'title' => __( 'Traffic Fines', 'astra-child' ),
		'items' => array(
			__( 'The renter is responsible for traffic violations, parking fines and related penalties incurred during the rental period.', 'astra-child' ),
		),
	),
	array(
		'id'    => 'vehicle-use',
		'title' => __( 'Vehicle Use', 'astra-child' ),
		'items' => array(
			__( 'The rental vehicle must not be used for racing or speed competitions.', 'astra-child' ),
			__( 'Off-road driving is not permitted.', 'astra-child' ),
			__( 'Sub-renting, lending or transferring the vehicle to an unauthorised driver is not permitted.', 'astra-child' ),
		),
	),
);
?>

<main id="primary" class="autoclub-terms-page">
	<section class="autoclub-terms-hero" aria-labelledby="autoclub-terms-title">
		<div class="autoclub-terms-hero__inner">
			<p class="autoclub-terms-eyebrow"><?php esc_html_e( 'AutoClub Rhodes Rental Terms', 'astra-child' ); ?></p>
			<h1 id="autoclub-terms-title"><?php esc_html_e( 'Terms & Conditions', 'astra-child' ); ?></h1>
			<p class="autoclub-terms-hero__subtitle"><?php esc_html_e( 'Everything you need to know before renting a car in Rhodes with AutoClub Rhodes.', 'astra-child' ); ?></p>
		</div>
	</section>

	<section class="autoclub-terms-content" aria-labelledby="autoclub-terms-content-title">
		<div class="autoclub-terms-inner">
			<div class="autoclub-terms-heading">
				<p class="autoclub-terms-eyebrow"><?php esc_html_e( 'Clear rental information', 'astra-child' ); ?></p>
				<h2 id="autoclub-terms-content-title"><?php esc_html_e( 'AutoClub Rhodes Rental Conditions', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'These terms explain the main driver, insurance, payment, delivery and vehicle-use conditions for renting a car with AutoClub Rhodes. Your confirmed booking and rental agreement contain the details that apply to your reservation.', 'astra-child' ); ?></p>
			</div>

			<div class="autoclub-terms-grid">
				<?php foreach ( $terms_sections as $terms_section ) : ?>
					<article id="<?php echo esc_attr( $terms_section['id'] ); ?>" class="autoclub-terms-card">
						<h2><?php echo esc_html( $terms_section['title'] ); ?></h2>
						<ul>
							<?php foreach ( $terms_section['items'] as $terms_item ) : ?>
								<li><?php echo esc_html( $terms_item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-terms-contact" aria-labelledby="autoclub-terms-contact-title">
		<div class="autoclub-terms-contact__inner">
			<div>
				<p class="autoclub-terms-eyebrow"><?php esc_html_e( 'Questions before booking?', 'astra-child' ); ?></p>
				<h2 id="autoclub-terms-contact-title"><?php esc_html_e( 'Contact AutoClub Rhodes', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'Contact our local team if you need clarification about these rental terms or the conditions for your confirmed booking.', 'astra-child' ); ?></p>
			</div>
			<address class="autoclub-terms-contact__details">
				<strong><?php esc_html_e( 'AutoClub Rhodes', 'astra-child' ); ?></strong>
				<span><?php esc_html_e( 'Rhodes Island, Greece', 'astra-child' ); ?></span>
				<a href="https://wa.me/306948202400" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'WhatsApp: +30 694 820 2400', 'astra-child' ); ?></a>
				<a href="mailto:info@autoclub-rhodes.com">info@autoclub-rhodes.com</a>
				<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Visit Contact Page', 'astra-child' ); ?></a>
			</address>
		</div>
	</section>

	<section class="autoclub-terms-final-cta" aria-labelledby="autoclub-terms-final-title">
		<div class="autoclub-terms-final-cta__inner">
			<h2 id="autoclub-terms-final-title"><?php esc_html_e( 'Ready To Book Your Car?', 'astra-child' ); ?></h2>
			<a class="autoclub-terms-button" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car Today', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
