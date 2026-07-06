<?php
/**
 * Manage booking placeholder page.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="autoclub-manage-booking">
	<section class="autoclub-manage-booking__hero" aria-labelledby="autoclub-manage-booking-title">
		<div class="autoclub-manage-booking__inner">
			<p class="autoclub-manage-booking__eyebrow"><?php esc_html_e( 'AUTOCLUB RHODES', 'astra-child' ); ?></p>
			<h1 id="autoclub-manage-booking-title"><?php esc_html_e( 'Manage your booking', 'astra-child' ); ?></h1>
			<p><?php esc_html_e( 'Enter your reservation details to view or manage your booking.', 'astra-child' ); ?></p>
			<div class="autoclub-manage-booking__card">
				<p class="autoclub-manage-booking__status"><?php esc_html_e( 'This feature will connect to the booking system soon.', 'astra-child' ); ?></p>
				<p><?php esc_html_e( 'Enter your reservation code and contact details. Our booking system will use these details to find your reservation.', 'astra-child' ); ?></p>
				<form class="autoclub-manage-booking__form" action="https://app.autoclub-rhodes.com/manage-booking/" method="get">
					<label>
						<span><?php esc_html_e( 'Reservation number / booking code', 'astra-child' ); ?></span>
						<input type="text" name="reservation_code" autocomplete="off" required>
					</label>
					<label>
						<span><?php esc_html_e( 'Email or phone', 'astra-child' ); ?></span>
						<input type="text" name="contact" autocomplete="email tel" required>
					</label>
					<button type="submit"><?php esc_html_e( 'Find my booking', 'astra-child' ); ?></button>
				</form>
				<div class="autoclub-manage-booking__contacts" aria-label="<?php esc_attr_e( 'AutoClub Rhodes contact options', 'astra-child' ); ?>">
					<a href="https://wa.me/306948202397" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'WhatsApp: +306948202397', 'astra-child' ); ?></a>
					<a href="tel:+306948202397"><?php esc_html_e( 'Phone: +306948202397', 'astra-child' ); ?></a>
					<a href="mailto:info@autoclub-rhodes.com"><?php esc_html_e( 'Email: info@autoclub-rhodes.com', 'astra-child' ); ?></a>
				</div>
				<div class="autoclub-manage-booking__actions">
					<a class="autoclub-manage-booking__button autoclub-manage-booking__button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Start a new booking', 'astra-child' ); ?></a>
					<a class="autoclub-manage-booking__button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact AutoClub', 'astra-child' ); ?></a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
