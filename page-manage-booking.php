<?php
/**
 * Manage booking page.
 *
 * Embeds the Booking Engine manage-booking app while keeping the AutoClub
 * WordPress header/footer and page shell.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$reservation = isset( $_GET['reservation'] ) ? sanitize_text_field( wp_unslash( $_GET['reservation'] ) ) : '';
$email       = isset( $_GET['email'] ) ? sanitize_email( wp_unslash( $_GET['email'] ) ) : '';
$embed_src   = add_query_arg(
	array_filter(
		array(
			'reservation' => $reservation,
			'email'       => $email,
		)
	),
	'https://app.autoclub-rhodes.com/manage-booking'
);

get_header();
?>

<main id="primary" class="autoclub-manage-booking">
	<section class="autoclub-manage-booking__shell" aria-labelledby="autoclub-manage-booking-title">
		<div class="autoclub-manage-booking__inner">
			<div class="autoclub-manage-booking__intro">
				<p class="autoclub-manage-booking__eyebrow"><?php esc_html_e( 'AUTOCLUB RHODES', 'astra-child' ); ?></p>
				<h1 id="autoclub-manage-booking-title"><?php esc_html_e( 'Manage your booking', 'astra-child' ); ?></h1>
				<p><?php esc_html_e( 'View your booking details or cancel your booking request securely through the AutoClub Booking Engine.', 'astra-child' ); ?></p>
			</div>

			<div class="autoclub-manage-booking__embed-wrap">
				<iframe
					class="autoclub-manage-booking__embed"
					src="<?php echo esc_url( $embed_src ); ?>"
					title="<?php esc_attr_e( 'AutoClub Rhodes manage booking', 'astra-child' ); ?>"
					loading="eager"
					referrerpolicy="strict-origin-when-cross-origin"
					scrolling="no"
				></iframe>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
