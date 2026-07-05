<?php
/**
 * AutoClub Rhodes contact page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$contact_details = array(
	array(
		'label' => __( 'Address', 'astra-child' ),
		'value' => __( 'Afandou 0, 85103 Afandou, Rhodes, Greece', 'astra-child' ),
	),
	array(
		'label' => __( 'Phone', 'astra-child' ),
		'value' => '<a href="tel:+306948202397">+30 694 820 2397</a>',
	),
	array(
		'label' => __( 'WhatsApp Reservations', 'astra-child' ),
		'value' => '<a href="https://wa.me/306948202400" target="_blank" rel="noopener noreferrer">+306948202400</a><br><a href="https://wa.me/306948202397" target="_blank" rel="noopener noreferrer">+306948202397</a>',
	),
	array(
		'label' => __( 'Email', 'astra-child' ),
		'value' => '<a href="mailto:info@autoclub-rhodes.com">info@autoclub-rhodes.com</a>',
	),
	array(
		'label' => __( 'Hours', 'astra-child' ),
		'value' => __( 'Daily 09:00 – 21:00', 'astra-child' ),
	),
);

$quick_contacts = array(
	array(
		'title' => __( 'WhatsApp Reservations', 'astra-child' ),
		'text'  => __( 'Message our local team for booking support and availability.', 'astra-child' ),
		'label' => __( 'Open WhatsApp', 'astra-child' ),
		'url'   => 'https://wa.me/306948202400',
		'blank' => true,
	),
	array(
		'title' => __( 'Call Us', 'astra-child' ),
		'text'  => __( 'Speak directly with AutoClub Rhodes during daily opening hours.', 'astra-child' ),
		'label' => __( 'Call Now', 'astra-child' ),
		'url'   => 'tel:+306948202397',
		'blank' => false,
	),
	array(
		'title' => __( 'Email Us', 'astra-child' ),
		'text'  => __( 'Send your rental dates, location and vehicle requirements.', 'astra-child' ),
		'label' => __( 'Send Email', 'astra-child' ),
		'url'   => 'mailto:info@autoclub-rhodes.com',
		'blank' => false,
	),
	array(
		'title' => __( 'Airport & Hotel Delivery', 'astra-child' ),
		'text'  => __( 'Ask about Rhodes Airport meet and greet or selected hotel delivery.', 'astra-child' ),
		'label' => __( 'View Locations', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
		'blank' => false,
	),
);

$contact_locations = array(
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
		'text'  => __( 'Local car rental support for Faliraki hotels and resorts.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-faliraki/' ),
	),
	array(
		'title' => __( 'Lindos', 'astra-child' ),
		'text'  => __( 'Hotel delivery and local support for Lindos and nearby areas.', 'astra-child' ),
		'url'   => home_url( '/locations-car-rental-lindos/' ),
	),
	array(
		'title' => __( 'All Locations', 'astra-child' ),
		'text'  => __( 'View all AutoClub Rhodes pickup and delivery areas.', 'astra-child' ),
		'url'   => home_url( '/car-rental-rhodes-location/' ),
	),
);
?>

<main id="primary" class="autoclub-contact-page">
	<section class="autoclub-contact-hero" aria-labelledby="autoclub-contact-title">
		<div class="autoclub-contact-hero__inner">
			<p class="autoclub-contact-eyebrow"><?php esc_html_e( 'Contact AutoClub Rhodes', 'astra-child' ); ?></p>
			<h1 id="autoclub-contact-title"><?php esc_html_e( 'Contact AutoClub Rhodes', 'astra-child' ); ?></h1>
			<p class="autoclub-contact-hero__subtitle"><?php esc_html_e( 'Need help with your car rental in Rhodes? Contact us for airport delivery, hotel delivery, availability and booking support.', 'astra-child' ); ?></p>
			<a class="autoclub-contact-button autoclub-contact-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-contact-details" aria-labelledby="autoclub-contact-details-title">
		<div class="autoclub-contact-inner">
			<div class="autoclub-contact-heading">
				<p class="autoclub-contact-eyebrow"><?php esc_html_e( 'Local Rhodes support', 'astra-child' ); ?></p>
				<h2 id="autoclub-contact-details-title"><?php esc_html_e( 'Contact Details', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-contact-details__grid">
				<?php foreach ( $contact_details as $contact_detail ) : ?>
					<article class="autoclub-contact-detail-card">
						<h3><?php echo esc_html( $contact_detail['label'] ); ?></h3>
						<p><?php echo wp_kses_post( $contact_detail['value'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-contact-quick" aria-labelledby="autoclub-contact-quick-title">
		<div class="autoclub-contact-inner">
			<div class="autoclub-contact-heading">
				<p class="autoclub-contact-eyebrow"><?php esc_html_e( 'Choose how to reach us', 'astra-child' ); ?></p>
				<h2 id="autoclub-contact-quick-title"><?php esc_html_e( 'Quick Contact Options', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-contact-quick__grid">
				<?php foreach ( $quick_contacts as $quick_contact ) : ?>
					<article class="autoclub-contact-card">
						<h3><?php echo esc_html( $quick_contact['title'] ); ?></h3>
						<p><?php echo esc_html( $quick_contact['text'] ); ?></p>
						<a href="<?php echo esc_url( $quick_contact['url'] ); ?>"<?php echo $quick_contact['blank'] ? ' target="_blank" rel="noopener noreferrer"' : ''; ?>><?php echo esc_html( $quick_contact['label'] ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-contact-form-section" aria-labelledby="autoclub-contact-form-title">
		<div class="autoclub-contact-form-section__inner">
			<div class="autoclub-contact-heading">
				<p class="autoclub-contact-eyebrow"><?php esc_html_e( 'Send an enquiry', 'astra-child' ); ?></p>
				<h2 id="autoclub-contact-form-title"><?php esc_html_e( 'Contact AutoClub Rhodes', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'Share your rental details below. This form is a visual preview and is not connected to message delivery yet.', 'astra-child' ); ?></p>
			</div>

			<form class="autoclub-contact-form" aria-describedby="autoclub-contact-form-note" onsubmit="return false;">
				<div class="autoclub-contact-form__grid">
					<label>
						<span><?php esc_html_e( 'Name', 'astra-child' ); ?></span>
						<input type="text" name="contact_name" autocomplete="name">
					</label>
					<label>
						<span><?php esc_html_e( 'Email', 'astra-child' ); ?></span>
						<input type="email" name="contact_email" autocomplete="email">
					</label>
					<label>
						<span><?php esc_html_e( 'Phone / WhatsApp', 'astra-child' ); ?></span>
						<input type="tel" name="contact_phone" autocomplete="tel">
					</label>
					<label>
						<span><?php esc_html_e( 'Pickup Location', 'astra-child' ); ?></span>
						<input type="text" name="pickup_location">
					</label>
					<label class="autoclub-contact-form__message">
						<span><?php esc_html_e( 'Message', 'astra-child' ); ?></span>
						<textarea name="contact_message" rows="5"></textarea>
					</label>
				</div>
				<button type="button"><?php esc_html_e( 'Send Message', 'astra-child' ); ?></button>
				<p id="autoclub-contact-form-note" class="autoclub-contact-form__note"><?php esc_html_e( 'Visual form only. Please use WhatsApp, phone or email to contact us now.', 'astra-child' ); ?></p>
			</form>
		</div>
	</section>

	<section class="autoclub-contact-locations" aria-labelledby="autoclub-contact-locations-title">
		<div class="autoclub-contact-inner">
			<div class="autoclub-contact-heading">
				<p class="autoclub-contact-eyebrow"><?php esc_html_e( 'Airport, town and resorts', 'astra-child' ); ?></p>
				<h2 id="autoclub-contact-locations-title"><?php esc_html_e( 'Car Rental Service Areas', 'astra-child' ); ?></h2>
			</div>
			<div class="autoclub-contact-locations__grid">
				<?php foreach ( $contact_locations as $contact_location ) : ?>
					<article class="autoclub-contact-location-card">
						<h3><?php echo esc_html( $contact_location['title'] ); ?></h3>
						<p><?php echo esc_html( $contact_location['text'] ); ?></p>
						<a href="<?php echo esc_url( $contact_location['url'] ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-contact-final-cta" aria-labelledby="autoclub-contact-final-title">
		<div class="autoclub-contact-final-cta__inner">
			<h2 id="autoclub-contact-final-title"><?php esc_html_e( 'Ready To Rent a Car in Rhodes?', 'astra-child' ); ?></h2>
			<a class="autoclub-contact-button autoclub-contact-button--primary" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Start Your Booking', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
