<?php
/**
 * AutoClub Rhodes rental agreement page template.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$agreement_sections = array(
	array(
		'id'    => 'delivery-return',
		'title' => __( 'Delivery and Return', 'astra-child' ),
		'text'  => __( 'The vehicle is delivered and returned at the place, date and time confirmed in the rental agreement. The renter should inspect the vehicle at delivery, follow the agreed fuel policy and return the vehicle with its keys, documents and supplied equipment. Any change to the return arrangements must be approved by AutoClub Rhodes in advance.', 'astra-child' ),
	),
	array(
		'id'    => 'vehicle-condition',
		'title' => __( 'Vehicle Condition', 'astra-child' ),
		'text'  => __( 'The vehicle condition, fuel level and any existing marks may be recorded at handover. The renter accepts responsibility for taking reasonable care of the vehicle during the rental and should report any warning light, mechanical concern, damage or missing equipment without delay.', 'astra-child' ),
	),
	array(
		'id'    => 'damage-responsibility',
		'title' => __( 'Damage and Responsibility', 'astra-child' ),
		'text'  => __( 'Full insurance and zero excess apply according to the signed rental conditions. Coverage does not apply to damage caused by misuse, alcohol, negligence, unauthorised driving, prohibited use or failure to follow the accident and insurance procedure. The renter may be responsible for losses arising from an excluded event or a breach of the agreement.', 'astra-child' ),
	),
	array(
		'id'    => 'charges-payment',
		'title' => __( 'Charges and Payment', 'astra-child' ),
		'text'  => __( 'The rental charge, included services, taxes and any agreed extras are recorded in the final agreement. Payment on arrival is available according to the confirmed booking arrangements. Additional charges may apply only where stated in the agreement or where the renter incurs fines, loses equipment, breaches the terms or requests an approved extension or extra service.', 'astra-child' ),
	),
	array(
		'id'    => 'conditions-use',
		'title' => __( 'Conditions of Use', 'astra-child' ),
		'text'  => __( 'Only authorised drivers meeting the minimum age and licence requirements may drive the vehicle. Racing, speed testing, off-road driving, sub-renting, towing, unlawful use and driving under the influence of alcohol or drugs are prohibited. The vehicle must not be taken off Rhodes or transported by ferry without prior written approval.', 'astra-child' ),
	),
	array(
		'id'    => 'rental-extension',
		'title' => __( 'Extension of Rental Period', 'astra-child' ),
		'text'  => __( 'A rental extension must be requested before the scheduled return time and is subject to vehicle availability and written confirmation from AutoClub Rhodes. Keeping the vehicle beyond the agreed period without approval may affect insurance coverage and may result in additional charges.', 'astra-child' ),
	),
	array(
		'id'    => 'accidents-procedure',
		'title' => __( 'Accidents and Insurance Procedure', 'astra-child' ),
		'text'  => __( 'After an accident, theft, damage or other incident, the renter must contact AutoClub Rhodes immediately, inform the local authorities when required, avoid accepting liability on behalf of the company and follow the reporting instructions provided. Relevant details, photographs and official documents should be collected where safely possible.', 'astra-child' ),
	),
	array(
		'id'    => 'insurance-exclusions',
		'title' => __( 'Insurance and Exclusions', 'astra-child' ),
		'text'  => __( 'The confirmed rental includes full insurance, collision damage waiver and zero excess under the agreed conditions. Insurance may exclude damage resulting from negligence, misuse, alcohol, an unauthorised driver, prohibited roads or locations, incorrect fuel, lost keys, interior damage, tyre or underbody abuse and failure to report an incident correctly.', 'astra-child' ),
	),
	array(
		'id'    => 'personal-data',
		'title' => __( 'Personal Data', 'astra-child' ),
		'text'  => __( 'Customer information is used to manage the booking, prepare the rental agreement, verify driver eligibility, communicate about delivery or support, process payment arrangements and meet legal or insurance obligations. Personal data is handled according to applicable privacy and data-protection requirements.', 'astra-child' ),
	),
	array(
		'id'    => 'miscellaneous',
		'title' => __( 'Miscellaneous Terms', 'astra-child' ),
		'text'  => __( 'Traffic violations, parking fines and related penalties incurred during the rental are the renter’s responsibility. If any provision is found unenforceable, the remaining provisions continue to apply. The signed agreement, confirmed booking information and any approved written amendments form the complete agreement for the rental.', 'astra-child' ),
	),
	array(
		'id'    => 'jurisdiction',
		'title' => __( 'Jurisdiction', 'astra-child' ),
		'text'  => __( 'The rental agreement is governed by the laws of Greece. Any dispute that cannot be resolved directly is subject to the competent courts of Rhodes, Greece.', 'astra-child' ),
	),
);

$customer_summary = array(
	__( 'Minimum Age: 23 years', 'astra-child' ),
	__( 'Driving Licence: 2+ years', 'astra-child' ),
	__( 'Full Insurance Included', 'astra-child' ),
	__( 'Zero Excess', 'astra-child' ),
	__( 'No Deposit', 'astra-child' ),
	__( 'Road Assistance Included', 'astra-child' ),
);
?>

<main id="primary" class="autoclub-agreement-page">
	<section class="autoclub-agreement-hero" aria-labelledby="autoclub-agreement-title">
		<div class="autoclub-agreement-hero__inner">
			<p class="autoclub-agreement-eyebrow"><?php esc_html_e( 'AutoClub Rhodes Rental Agreement', 'astra-child' ); ?></p>
			<h1 id="autoclub-agreement-title"><?php esc_html_e( 'Rental Agreement', 'astra-child' ); ?></h1>
			<p class="autoclub-agreement-hero__subtitle"><?php esc_html_e( 'Official rental agreement information for AutoClub Rhodes customers.', 'astra-child' ); ?></p>
		</div>
	</section>

	<section class="autoclub-agreement-company" aria-labelledby="autoclub-agreement-company-title">
		<div class="autoclub-agreement-company__inner">
			<div class="autoclub-agreement-heading">
				<p class="autoclub-agreement-eyebrow"><?php esc_html_e( 'Registered rental company', 'astra-child' ); ?></p>
				<h2 id="autoclub-agreement-company-title"><?php esc_html_e( 'Company Details', 'astra-child' ); ?></h2>
			</div>
			<dl class="autoclub-agreement-company__list">
				<div>
					<dt><?php esc_html_e( 'Company', 'astra-child' ); ?></dt>
					<dd>ΜΙΧΑΗΛ ΑΡΧΑΓΓΕΛΙΤΗΣ ΤΟΥΡΙΣΤΙΚΕΣ ΚΑΙ ΕΜΠΟΡΙΚΕΣ ΕΠΙΧΕΙΡΗΣΕΙΣ Α.Ε.</dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Trade Name', 'astra-child' ); ?></dt>
					<dd><?php esc_html_e( 'AUTO CLUB', 'astra-child' ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'GEMI', 'astra-child' ); ?></dt>
					<dd>071878220000</dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Address', 'astra-child' ); ?></dt>
					<dd><?php esc_html_e( 'Afandou 0, 85103 Afandou, Rhodes, Greece', 'astra-child' ); ?></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Phone', 'astra-child' ); ?></dt>
					<dd><a href="tel:+306948202397">+30 694 820 2397</a></dd>
				</div>
				<div>
					<dt><?php esc_html_e( 'Email', 'astra-child' ); ?></dt>
					<dd><a href="mailto:info@autoclub-rhodes.com">info@autoclub-rhodes.com</a></dd>
				</div>
			</dl>
		</div>
	</section>

	<section class="autoclub-agreement-terms" aria-labelledby="autoclub-agreement-terms-title">
		<div class="autoclub-agreement-inner">
			<div class="autoclub-agreement-heading">
				<p class="autoclub-agreement-eyebrow"><?php esc_html_e( 'Rental contract information', 'astra-child' ); ?></p>
				<h2 id="autoclub-agreement-terms-title"><?php esc_html_e( 'Agreement Terms', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'The following sections explain the standard information presented for website reference. The signed rental agreement and confirmed booking details govern the individual rental.', 'astra-child' ); ?></p>
			</div>
			<div class="autoclub-agreement-terms__list">
				<?php foreach ( $agreement_sections as $agreement_section ) : ?>
					<article id="<?php echo esc_attr( $agreement_section['id'] ); ?>" class="autoclub-agreement-term">
						<h2><?php echo esc_html( $agreement_section['title'] ); ?></h2>
						<p><?php echo esc_html( $agreement_section['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="autoclub-agreement-summary" aria-labelledby="autoclub-agreement-summary-title">
		<div class="autoclub-agreement-inner">
			<div class="autoclub-agreement-heading">
				<p class="autoclub-agreement-eyebrow"><?php esc_html_e( 'Key rental information', 'astra-child' ); ?></p>
				<h2 id="autoclub-agreement-summary-title"><?php esc_html_e( 'Important Customer Summary', 'astra-child' ); ?></h2>
			</div>
			<ul class="autoclub-agreement-summary__grid">
				<?php foreach ( $customer_summary as $summary_item ) : ?>
					<li><?php echo esc_html( $summary_item ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="autoclub-agreement-note" aria-labelledby="autoclub-agreement-note-title">
		<div class="autoclub-agreement-note__inner">
			<p class="autoclub-agreement-eyebrow"><?php esc_html_e( 'Final signed document', 'astra-child' ); ?></p>
			<h2 id="autoclub-agreement-note-title"><?php esc_html_e( 'Final Rental Agreement', 'astra-child' ); ?></h2>
			<p><?php esc_html_e( 'The final rental agreement is signed at vehicle delivery and may include customer details, vehicle details, rental dates, charges and signatures.', 'astra-child' ); ?></p>
		</div>
	</section>

	<section class="autoclub-agreement-final-cta" aria-labelledby="autoclub-agreement-final-title">
		<div class="autoclub-agreement-final-cta__inner">
			<h2 id="autoclub-agreement-final-title"><?php esc_html_e( 'Ready To Rent a Car in Rhodes?', 'astra-child' ); ?></h2>
			<a class="autoclub-agreement-button" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Your Car', 'astra-child' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
