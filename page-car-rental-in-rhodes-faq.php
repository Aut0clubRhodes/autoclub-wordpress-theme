<?php
/**
 * Car rental Rhodes FAQ page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$faq_items = array(
	array(
		'question' => __( 'Do I need a deposit to rent a car in Rhodes?', 'astra-child' ),
		'answer'   => __( 'No. AutoClub Rhodes offers car rental in Rhodes with no deposit required. The confirmed rental conditions are provided before collection so you can understand the agreement clearly.', 'astra-child' ),
	),
	array(
		'question' => __( 'Is full insurance included?', 'astra-child' ),
		'answer'   => __( 'Yes. Full insurance is included with zero excess, subject to the rental conditions supplied with your booking. Our representative explains the included coverage during the vehicle handover.', 'astra-child' ),
	),
	array(
		'question' => __( 'What is the minimum driver age?', 'astra-child' ),
		'answer'   => __( 'The minimum driver age is 23 years. The driver must also have held a valid driving licence for at least two years.', 'astra-child' ),
	),
	array(
		'question' => __( 'Can I rent a car without a credit card?', 'astra-child' ),
		'answer'   => __( 'A no-deposit rental does not automatically determine the payment method. Contact AutoClub Rhodes before booking so our team can confirm the accepted payment options for your reservation.', 'astra-child' ),
	),
	array(
		'question' => __( 'Is a second driver included?', 'astra-child' ),
		'answer'   => __( 'Please request any additional driver when making your reservation. The second driver must meet the same age and licence requirements, and the applicable conditions will be confirmed before booking.', 'astra-child' ),
	),
	array(
		'question' => __( 'Do you offer free airport delivery?', 'astra-child' ),
		'answer'   => __( 'Yes. Free airport delivery is available where applicable for confirmed Rhodes Airport bookings. Your meeting point, arrival time and representative contact details are arranged in advance.', 'astra-child' ),
	),
	array(
		'question' => __( 'Can I pick up the car at my hotel?', 'astra-child' ),
		'answer'   => __( 'Yes. Hotel delivery is available at selected hotels and resorts across Rhodes. Provide your accommodation details when booking so the team can confirm the delivery location and time.', 'astra-child' ),
	),
	array(
		'question' => __( 'What happens if my flight is delayed?', 'astra-child' ),
		'answer'   => __( 'Contact AutoClub Rhodes as soon as you know about the delay. Sharing the correct flight number and updated arrival information helps our local team adjust the airport meeting arrangements.', 'astra-child' ),
	),
	array(
		'question' => __( 'Is there a mileage limit?', 'astra-child' ),
		'answer'   => __( 'Mileage conditions depend on the confirmed rental agreement. Review the terms supplied with your booking or ask our team before collection if you are planning extensive travel around Rhodes.', 'astra-child' ),
	),
	array(
		'question' => __( 'Are baby seats available?', 'astra-child' ),
		'answer'   => __( 'Baby and child seats can be requested in advance and are subject to availability. Include the child age and seat requirement with your booking so the correct option can be confirmed.', 'astra-child' ),
	),
	array(
		'question' => __( 'Can I modify my reservation?', 'astra-child' ),
		'answer'   => __( 'Contact us as early as possible if you need to change dates, times, delivery location or vehicle category. Changes depend on availability and must be confirmed by AutoClub Rhodes.', 'astra-child' ),
	),
	array(
		'question' => __( 'What is your cancellation policy?', 'astra-child' ),
		'answer'   => __( 'Cancellation terms are provided with the confirmed booking and may depend on the reservation details. Please review those terms or contact our team before cancelling.', 'astra-child' ),
	),
	array(
		'question' => __( 'Can I drive the car to other Greek islands?', 'astra-child' ),
		'answer'   => __( 'Do not take the rental car off Rhodes or onto a ferry without prior written approval from AutoClub Rhodes. Insurance and roadside support may not apply outside the permitted rental area.', 'astra-child' ),
	),
	array(
		'question' => __( 'Is roadside assistance included?', 'astra-child' ),
		'answer'   => __( 'Yes. Local Rhodes support and roadside assistance are available during your rental. Use the contact information provided at handover if you need help with the vehicle.', 'astra-child' ),
	),
	array(
		'question' => __( 'What fuel policy do you use?', 'astra-child' ),
		'answer'   => __( 'The applicable fuel policy is stated in your rental agreement and explained during handover. Check the recorded fuel level before driving and follow the confirmed return instructions.', 'astra-child' ),
	),
	array(
		'question' => __( 'Are there hidden fees?', 'astra-child' ),
		'answer'   => __( 'AutoClub Rhodes focuses on clear prices and transparent rental conditions. Any confirmed services or applicable charges should be shown before collection, without surprise additions at handover.', 'astra-child' ),
	),
	array(
		'question' => __( 'Which areas of Rhodes do you serve?', 'astra-child' ),
		'answer'   => __( 'We serve Rhodes Airport, Rhodes Town, Faliraki, Lindos, Ixia, Kolymbia, Pefkos, Afandou and selected hotels and resorts across the island, subject to delivery confirmation.', 'astra-child' ),
	),
	array(
		'question' => __( 'Can I pay on arrival?', 'astra-child' ),
		'answer'   => __( 'Payment arrangements depend on the confirmed reservation. Ask our team to confirm whether payment on arrival is available and which payment methods are accepted for your booking.', 'astra-child' ),
	),
	array(
		'question' => __( 'What documents do I need?', 'astra-child' ),
		'answer'   => __( 'Bring a valid driving licence held for at least two years, a passport or identity document, and your booking details. Additional documentation requirements will be confirmed before collection.', 'astra-child' ),
	),
	array(
		'question' => __( 'Why choose AutoClub Rhodes?', 'astra-child' ),
		'answer'   => __( 'AutoClub Rhodes is a local family car rental company serving visitors since 1982. We offer full insurance, zero excess, no deposit, airport and hotel delivery, clear conditions and personal local support.', 'astra-child' ),
	),
);

$faq_benefits = array(
	__( 'No Deposit', 'astra-child' ),
	__( 'Zero Excess', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Free Airport Delivery', 'astra-child' ),
	__( 'Local Rhodes Support', 'astra-child' ),
);

$faq_locations = array(
	array(
		'title' => __( 'Rhodes Airport', 'astra-child' ),
		'text'  => __( 'Meet and greet car rental for arrivals at Rhodes Airport.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-rhodes-airport/' ),
	),
	array(
		'title' => __( 'Rhodes Town', 'astra-child' ),
		'text'  => __( 'Convenient delivery for Rhodes Town, the Old Town and nearby hotels.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-rhodes-town/' ),
	),
	array(
		'title' => __( 'Faliraki', 'astra-child' ),
		'text'  => __( 'Local car rental for Faliraki beaches, hotels and resorts.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-faliraki/' ),
	),
	array(
		'title' => __( 'Lindos', 'astra-child' ),
		'text'  => __( 'Explore Lindos, St Paul\'s Bay and southern Rhodes by car.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-lindos/' ),
	),
);
?>

<main id="primary" class="autoclub-faq-page">
	<section class="autoclub-faq-page__hero" aria-labelledby="autoclub-faq-page-title">
		<div class="autoclub-faq-page__hero-inner">
			<p class="autoclub-faq-page__eyebrow"><?php esc_html_e( 'Rent a Car Rhodes FAQ', 'astra-child' ); ?></p>
			<h1 id="autoclub-faq-page-title"><?php esc_html_e( 'Car Rental Rhodes FAQ', 'astra-child' ); ?></h1>
			<p class="autoclub-faq-page__subtitle"><?php esc_html_e( 'Quick answers about renting a car in Rhodes with AutoClub Rhodes.', 'astra-child' ); ?></p>
			<a class="autoclub-faq-page__button autoclub-faq-page__button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-faq-page__questions" aria-labelledby="autoclub-faq-questions-title">
		<div class="autoclub-faq-page__questions-inner">
			<div class="autoclub-faq-page__heading">
				<p class="autoclub-faq-page__eyebrow"><?php esc_html_e( 'Booking and rental information', 'astra-child' ); ?></p>
				<h2 id="autoclub-faq-questions-title"><?php esc_html_e( 'Frequently Asked Questions', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'Find useful information about deposits, insurance, delivery, driving requirements and car rental in Rhodes.', 'astra-child' ); ?></p>
			</div>

			<div class="autoclub-faq-page__accordion">
				<?php foreach ( $faq_items as $faq_item ) : ?>
					<details class="autoclub-faq-page__item">
						<summary><?php echo esc_html( $faq_item['question'] ); ?></summary>
						<p><?php echo esc_html( $faq_item['answer'] ); ?></p>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-faq-page__benefits" aria-labelledby="autoclub-faq-benefits-title">
		<div class="autoclub-faq-page__inner">
			<div class="autoclub-faq-page__heading">
				<p class="autoclub-faq-page__eyebrow"><?php esc_html_e( 'Clear rental benefits', 'astra-child' ); ?></p>
				<h2 id="autoclub-faq-benefits-title"><?php esc_html_e( 'Why Choose AutoClub Rhodes?', 'astra-child' ); ?></h2>
			</div>
			<ul class="autoclub-faq-page__benefit-grid">
				<?php foreach ( $faq_benefits as $faq_benefit ) : ?>
					<li><?php echo esc_html( $faq_benefit ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-faq-page__locations" aria-labelledby="autoclub-faq-locations-title">
		<div class="autoclub-faq-page__inner">
			<div class="autoclub-faq-page__heading">
				<p class="autoclub-faq-page__eyebrow"><?php esc_html_e( 'Airport, town and resorts', 'astra-child' ); ?></p>
				<h2 id="autoclub-faq-locations-title"><?php esc_html_e( 'Popular Car Rental Locations', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-faq-page__location-grid">
				<?php foreach ( $faq_locations as $faq_location ) : ?>
					<article class="autoclub-faq-page__location-card">
						<h3><?php echo esc_html( $faq_location['title'] ); ?></h3>
						<p><?php echo esc_html( $faq_location['text'] ); ?></p>
						<a href="<?php echo esc_url( $faq_location['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-faq-page__final-cta" aria-labelledby="autoclub-faq-final-title">
		<div class="autoclub-faq-page__final-inner">
			<h2 id="autoclub-faq-final-title"><?php esc_html_e( 'Ready To Explore Rhodes?', 'astra-child' ); ?></h2>
			<a class="autoclub-faq-page__button autoclub-faq-page__button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car Today', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
