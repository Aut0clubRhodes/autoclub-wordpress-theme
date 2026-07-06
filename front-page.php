<?php
/**
 * Premium mobile-first homepage.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="autoclub-home-v2">
	<section class="autoclub-hero" aria-labelledby="autoclub-hero-title">
		<div class="autoclub-hero__overlay" aria-hidden="true"></div>

		<div class="autoclub-hero__inner">
			<div class="autoclub-hero__copy">
				<p class="autoclub-hero__eyebrow"><?php esc_html_e( 'Rent a Car Rhodes with full insurance, no deposit and free airport delivery.', 'astra-child' ); ?></p>

				<h1 id="autoclub-hero-title" class="autoclub-hero__title">
					<?php esc_html_e( 'Rent a Car Rhodes With Full Insurance & No Deposit', 'astra-child' ); ?>
				</h1>

				<p class="autoclub-hero__review"><?php esc_html_e( '★★★★★ 5.0/5 from 100+ travelers', 'astra-child' ); ?></p>
				<p class="autoclub-hero__trust-line"><?php esc_html_e( 'Full Insurance • No Deposit • Airport Delivery', 'astra-child' ); ?></p>

				<ul class="autoclub-hero__benefits" aria-label="<?php esc_attr_e( 'Rental benefits', 'astra-child' ); ?>">
					<li class="autoclub-hero__benefit autoclub-hero__benefit--insurance"><?php esc_html_e( 'Full Insurance Included', 'astra-child' ); ?></li>
					<li class="autoclub-hero__benefit autoclub-hero__benefit--excess"><?php esc_html_e( 'Zero Excess', 'astra-child' ); ?></li>
					<li class="autoclub-hero__benefit autoclub-hero__benefit--airport"><?php esc_html_e( 'Free Airport Delivery', 'astra-child' ); ?></li>
					<li class="autoclub-hero__benefit autoclub-hero__benefit--support"><?php esc_html_e( 'Local Support 24/7', 'astra-child' ); ?></li>
				</ul>
			</div>

			<div id="booking-search" class="autoclub-search-card">
				<div class="autoclub-search-card__form">
					<?php echo do_shortcode( '[autoclub_booking_search site="autoclub-rhodes"]' ); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="autoclub-reviews" aria-labelledby="autoclub-reviews-title">
		<div class="autoclub-reviews__inner">
			<div class="autoclub-reviews__top">
				<div class="autoclub-reviews__heading">
					<p class="autoclub-reviews__eyebrow"><?php esc_html_e( 'Trusted by Travelers', 'astra-child' ); ?></p>
					<h2 id="autoclub-reviews-title"><?php esc_html_e( 'Why Travelers Choose AutoClub Rhodes', 'astra-child' ); ?></h2>
					<p><?php esc_html_e( 'Thousands of visitors choose AutoClub Rhodes for clear pricing, local support and stress-free car rental in Rhodes.', 'astra-child' ); ?></p>
				</div>

				<div class="autoclub-reviews__proof-row">
				<div class="autoclub-reviews__summary">
					<div class="autoclub-reviews__rating">
						<div class="autoclub-reviews__summary-stars" aria-label="<?php esc_attr_e( 'Five stars', 'astra-child' ); ?>">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
						<div class="autoclub-reviews__summary-copy">
							<strong><?php esc_html_e( '5.0 Google Rating', 'astra-child' ); ?></strong>
							<span><?php esc_html_e( 'Trusted by 100+ travelers', 'astra-child' ); ?></span>
						</div>
					</div>
					<a class="autoclub-section-cta autoclub-reviews__cta" href="https://g.page/r/CYOr9zt3_-KVEBM/review" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Read More Reviews', 'astra-child' ); ?></a>
				</div>

				<figure class="autoclub-review-quote">
					<div class="autoclub-review-quote__stars" aria-label="<?php esc_attr_e( 'Five stars', 'astra-child' ); ?>">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
					<blockquote>
						<p><?php esc_html_e( 'great service, if there is a problem the guys will solve it immediately, thank you for the excellent service, SUPER!', 'astra-child' ); ?></p>
					</blockquote>
					<figcaption>
						<strong><?php esc_html_e( 'Petr Marek', 'astra-child' ); ?></strong>
						<span><?php esc_html_e( 'Google Review', 'astra-child' ); ?></span>
					</figcaption>
				</figure>

				<figure class="autoclub-review-quote">
					<div class="autoclub-review-quote__stars" aria-label="<?php esc_attr_e( 'Five stars', 'astra-child' ); ?>">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
					<blockquote>
						<p><?php esc_html_e( 'Very professional company. We are coming back always to them. Wish you all the best.', 'astra-child' ); ?></p>
					</blockquote>
					<figcaption>
						<strong><?php esc_html_e( 'Dalia Dulskytė', 'astra-child' ); ?></strong>
						<span><?php esc_html_e( 'Google Review', 'astra-child' ); ?></span>
					</figcaption>
				</figure>
				</div>
			</div>

			<div class="autoclub-reviews__trust-grid">
				<article class="autoclub-review-trust-card">
					<span aria-hidden="true">&#10003;</span>
					<h3><?php esc_html_e( 'Full Insurance Included', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'Drive with confidence thanks to full insurance and zero excess.', 'astra-child' ); ?></p>
				</article>

				<article class="autoclub-review-trust-card">
					<span aria-hidden="true">&#10003;</span>
					<h3><?php esc_html_e( 'Free Kilometers', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'Explore Rhodes with generous kilometer freedom for your holiday routes.', 'astra-child' ); ?></p>
				</article>

				<article class="autoclub-review-trust-card">
					<span aria-hidden="true">&#10003;</span>
					<h3><?php esc_html_e( '24/7 Road Assistance', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'Local help is available if you need support while driving around Rhodes.', 'astra-child' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="autoclub-popular-cars" aria-labelledby="autoclub-popular-cars-title">
		<div class="autoclub-popular-cars__inner">
			<div class="autoclub-popular-cars__heading">
				<p class="autoclub-popular-cars__eyebrow"><?php esc_html_e( 'Popular Rental Cars in Rhodes', 'astra-child' ); ?></p>
				<h2 id="autoclub-popular-cars-title"><?php esc_html_e( 'Choose Your Car for Rhodes', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'Find the right rental car for your holiday in Rhodes, from cabrio cars for scenic coastal drives to automatic cars and family SUVs.', 'astra-child' ); ?></p>
			</div>

			<div class="autoclub-popular-cars__grid">
				<article class="autoclub-rental-card">
					<div class="autoclub-rental-card__visual autoclub-rental-card__visual--convertible">
						<?php if ( file_exists( get_stylesheet_directory() . '/assets/images/cars/convertible-cars.webp' ) ) : ?>
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/cars/convertible-cars.webp' ); ?>" alt="<?php esc_attr_e( 'Rent a Car Rhodes with Full Insurance and No Deposit', 'astra-child' ); ?>" loading="lazy" decoding="async">
						<?php endif; ?>
					</div>
					<div class="autoclub-rental-card__body">
						<p class="autoclub-rental-card__subtitle"><?php esc_html_e( 'Convertible car rental in Rhodes', 'astra-child' ); ?></p>
						<h3><?php esc_html_e( 'Fiat 500 / Mini Cooper / Audi Cabrio', 'astra-child' ); ?></h3>
						<p><?php esc_html_e( 'Open-top rental cars for couples who want scenic drives around Lindos, Rhodes Town and the east coast.', 'astra-child' ); ?></p>
						<ul>
							<li><?php esc_html_e( 'Cabrio / Open roof', 'astra-child' ); ?></li>
							<li><?php esc_html_e( 'Ideal for couples', 'astra-child' ); ?></li>
							<li><?php esc_html_e( 'Full insurance included', 'astra-child' ); ?></li>
						</ul>
						<a class="autoclub-card-link" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book This Car', 'astra-child' ); ?></a>
					</div>
				</article>

				<article class="autoclub-rental-card">
					<div class="autoclub-rental-card__visual autoclub-rental-card__visual--automatic">
						<?php if ( file_exists( get_stylesheet_directory() . '/assets/images/cars/automatic-cars.webp' ) ) : ?>
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/cars/automatic-cars.webp' ); ?>" alt="<?php esc_attr_e( 'Automatic rental cars in Rhodes', 'astra-child' ); ?>" loading="lazy" decoding="async">
						<?php endif; ?>
					</div>
					<div class="autoclub-rental-card__body">
						<p class="autoclub-rental-card__subtitle"><?php esc_html_e( 'Automatic car rental in Rhodes', 'astra-child' ); ?></p>
						<h3><?php esc_html_e( 'Peugeot 208 / VW Polo Automatic', 'astra-child' ); ?></h3>
						<p><?php esc_html_e( 'Compact automatic rental cars for Rhodes Airport pickup, hotel delivery and easy island driving.', 'astra-child' ); ?></p>
						<ul>
							<li><?php esc_html_e( 'Automatic gearbox', 'astra-child' ); ?></li>
							<li><?php esc_html_e( 'Compact and comfortable', 'astra-child' ); ?></li>
							<li><?php esc_html_e( 'Zero excess', 'astra-child' ); ?></li>
						</ul>
						<a class="autoclub-card-link" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book This Car', 'astra-child' ); ?></a>
					</div>
				</article>

				<article class="autoclub-rental-card">
					<div class="autoclub-rental-card__visual autoclub-rental-card__visual--suv">
						<?php if ( file_exists( get_stylesheet_directory() . '/assets/images/cars/family-suv.webp' ) ) : ?>
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/cars/family-suv.webp' ); ?>" alt="<?php esc_attr_e( 'Family SUV rental cars in Rhodes', 'astra-child' ); ?>" loading="lazy" decoding="async">
						<?php endif; ?>
					</div>
					<div class="autoclub-rental-card__body">
						<p class="autoclub-rental-card__subtitle"><?php esc_html_e( 'Family SUV rental in Rhodes', 'astra-child' ); ?></p>
						<h3><?php esc_html_e( 'VW T-Cross / MG SUV', 'astra-child' ); ?></h3>
						<p><?php esc_html_e( 'More space for families, luggage and longer drives across Rhodes.', 'astra-child' ); ?></p>
						<ul>
							<li><?php esc_html_e( 'Family comfort', 'astra-child' ); ?></li>
							<li><?php esc_html_e( 'Extra luggage space', 'astra-child' ); ?></li>
							<li><?php esc_html_e( 'No deposit', 'astra-child' ); ?></li>
						</ul>
						<a class="autoclub-card-link" href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book This Car', 'astra-child' ); ?></a>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="autoclub-locations" aria-labelledby="autoclub-locations-title">
		<div class="autoclub-locations__inner">
			<div class="autoclub-locations__heading">
				<p class="autoclub-locations__eyebrow"><?php esc_html_e( 'Explore Rhodes with local support', 'astra-child' ); ?></p>
				<h2 id="autoclub-locations-title"><?php esc_html_e( 'Car Rental Locations in Rhodes', 'astra-child' ); ?></h2>
				<p>
					<?php esc_html_e( 'Looking for rent a car in Rhodes? AutoClub Rhodes offers local car rental with full insurance, zero excess, no deposit and free airport delivery. Pick up your car at Rhodes Airport, Rhodes Town, Faliraki, Lindos and selected hotels across the island.', 'astra-child' ); ?>
				</p>
			</div>

			<div class="autoclub-locations__grid">
				<article class="autoclub-location-card">
					<div class="autoclub-location-card__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/locations/airport.webp' ); ?>" alt="<?php esc_attr_e( 'Rhodes Airport car rental location', 'astra-child' ); ?>" loading="lazy" decoding="async">
					</div>
					<h3><?php esc_html_e( 'Rhodes Airport Car Rental', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'Easy Rhodes Airport car rental with clear prices, full insurance and free airport delivery.', 'astra-child' ); ?></p>
					<a class="autoclub-card-link" href="<?php echo esc_url( home_url( '/locations-car-rental-rhodes-airport/' ) ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
				</article>

				<article class="autoclub-location-card">
					<div class="autoclub-location-card__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/locations/rhodes-town.webp' ); ?>" alt="<?php esc_attr_e( 'Rhodes Town car rental location', 'astra-child' ); ?>" loading="lazy" decoding="async">
					</div>
					<h3><?php esc_html_e( 'Rhodes Town Car Rental', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'Convenient car rental in Rhodes Town, the Old Town and nearby hotels with no hidden fees.', 'astra-child' ); ?></p>
					<a class="autoclub-card-link" href="<?php echo esc_url( home_url( '/locations-car-rental-rhodes-town/' ) ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
				</article>

				<article class="autoclub-location-card">
					<div class="autoclub-location-card__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/locations/faliraki.webp' ); ?>" alt="<?php esc_attr_e( 'Faliraki car rental location', 'astra-child' ); ?>" loading="lazy" decoding="async">
					</div>
					<h3><?php esc_html_e( 'Faliraki Car Rental', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'Flexible Faliraki car rental for beaches, resorts and family holidays with local support.', 'astra-child' ); ?></p>
					<a class="autoclub-card-link" href="<?php echo esc_url( home_url( '/locations-car-rental-faliraki/' ) ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
				</article>

				<article class="autoclub-location-card">
					<div class="autoclub-location-card__media">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/locations/lindos.webp' ); ?>" alt="<?php esc_attr_e( 'Lindos car rental location', 'astra-child' ); ?>" loading="lazy" decoding="async">
					</div>
					<h3><?php esc_html_e( 'Lindos Car Rental', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'Comfortable Lindos car rental for exploring southern Rhodes with zero excess and no deposit.', 'astra-child' ); ?></p>
					<a class="autoclub-card-link" href="<?php echo esc_url( home_url( '/locations-car-rental-lindos/' ) ); ?>"><?php esc_html_e( 'View Location', 'astra-child' ); ?></a>
				</article>
			</div>

			<a class="autoclub-section-cta autoclub-locations__cta" href="<?php echo esc_url( home_url( '/car-rental-rhodes-location/' ) ); ?>"><?php esc_html_e( 'View All Locations', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-faq" aria-labelledby="autoclub-faq-title">
		<div class="autoclub-faq__inner">
			<div class="autoclub-faq__heading">
				<p class="autoclub-faq__eyebrow"><?php esc_html_e( 'Rent a Car Rhodes FAQ', 'astra-child' ); ?></p>
				<h2 id="autoclub-faq-title"><?php esc_html_e( 'Rhodes Car Rental FAQ', 'astra-child' ); ?></h2>
				<p><?php esc_html_e( 'Quick answers about renting a car in Rhodes with AutoClub Rhodes.', 'astra-child' ); ?></p>
			</div>

			<div class="autoclub-faq__list">
				<details class="autoclub-faq__item">
					<summary><?php esc_html_e( 'Do I need to pay a deposit?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes offers rent a car in Rhodes with no deposit required. This makes your car rental simple and clear, especially for airport pickup, hotel delivery and holiday bookings across Rhodes.', 'astra-child' ); ?></p>
				</details>

				<details class="autoclub-faq__item">
					<summary><?php esc_html_e( 'Is full insurance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Full insurance is included with zero excess, so you know the rental conditions before you book. Our goal is clear pricing with no hidden fees for car rental in Rhodes.', 'astra-child' ); ?></p>
				</details>

				<details class="autoclub-faq__item">
					<summary><?php esc_html_e( 'Can I collect the car at Rhodes Airport?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Rhodes Airport car rental is available, along with pickup options in Rhodes Town, Faliraki, Lindos and selected hotels. Free airport delivery is included where applicable.', 'astra-child' ); ?></p>
				</details>

				<details class="autoclub-faq__item">
					<summary><?php esc_html_e( 'Are there hidden fees?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'No. AutoClub Rhodes focuses on transparent car rental prices with no hidden fees or surprise charges. What you see before booking is the price and rental conditions you can expect.', 'astra-child' ); ?></p>
				</details>

				<details class="autoclub-faq__item">
					<summary><?php esc_html_e( 'Can I book an automatic car?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Automatic car rental in Rhodes is available, including compact automatic cars for couples, families and travelers who want easy driving around the island.', 'astra-child' ); ?></p>
				</details>

				<details class="autoclub-faq__item">
					<summary><?php esc_html_e( 'Is road assistance included?', 'astra-child' ); ?></summary>
					<p><?php esc_html_e( 'Yes. Local Rhodes support and road assistance are available during your rental, so you have help if you need it while driving around Rhodes.', 'astra-child' ); ?></p>
				</details>
			</div>

			<a class="autoclub-section-cta autoclub-faq__cta" href="<?php echo esc_url( home_url( '/car-rental-in-rhodes-faq/' ) ); ?>"><?php esc_html_e( 'View All FAQs', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-seo-footer" aria-labelledby="autoclub-seo-footer-title">
		<div class="autoclub-seo-footer__inner">
			<h2 id="autoclub-seo-footer-title"><?php esc_html_e( 'Rent a Car Rhodes with AutoClub Rhodes', 'astra-child' ); ?></h2>
			<p>
				<?php esc_html_e( 'AutoClub Rhodes provides local car rental in Rhodes with full insurance included, zero excess, no deposit and free airport delivery. We serve Rhodes Airport, Rhodes Town, Faliraki, Lindos and selected hotels across the island, with compact cars, automatic cars, cabrio cars and family SUVs for every type of holiday.', 'astra-child' ); ?>
			</p>
			<a class="autoclub-section-cta autoclub-seo-footer__cta" href="#booking-search"><?php esc_html_e( 'Start Your Booking', 'astra-child' ); ?></a>
		</div>
	</section>

	<section class="autoclub-site-footer" aria-label="<?php esc_attr_e( 'Auto Club Rhodes contact and company information', 'astra-child' ); ?>">
		<div class="autoclub-site-footer__inner">
			<div class="autoclub-site-footer__grid">
				<div class="autoclub-site-footer__column autoclub-site-footer__brand">
					<h2><?php esc_html_e( 'AUTO CLUB RHODES', 'astra-child' ); ?></h2>
					<p><?php esc_html_e( 'Premium car rental in Rhodes with zero deposit and full insurance.', 'astra-child' ); ?></p>
					<p><?php esc_html_e( 'Airport meet & greet and hotel delivery across the island.', 'astra-child' ); ?></p>
					<p class="autoclub-site-footer__descriptor"><?php esc_html_e( 'Car Rental Company in Rhodes, Greece – Airport, City & Resort Delivery.', 'astra-child' ); ?></p>
				</div>

				<div class="autoclub-site-footer__column">
					<h3><?php esc_html_e( 'CONTACT', 'astra-child' ); ?></h3>
					<address>
						<p>&#128205; <?php esc_html_e( 'Afandou 0, 85103', 'astra-child' ); ?><br><?php esc_html_e( 'Afandou, Rhodes, Greece', 'astra-child' ); ?></p>
						<p>&#128222; <a href="tel:+306948202397">+30 694 820 2397</a></p>
						<p class="autoclub-site-footer__whatsapp">
							<strong><?php esc_html_e( 'WhatsApp Reservations:', 'astra-child' ); ?></strong><br>
							<a href="https://wa.me/306948202400">+306948202400</a><br>
							<a href="https://wa.me/306948202397">+306948202397</a>
						</p>
						<p>&#9993; <a href="mailto:info@autoclub-rhodes.com">info@autoclub-rhodes.com</a></p>
						<p>&#128336; <?php esc_html_e( 'Daily 09:00 – 21:00', 'astra-child' ); ?></p>
					</address>
				</div>

				<div class="autoclub-site-footer__column">
					<h3><?php esc_html_e( 'COMPANY DETAILS', 'astra-child' ); ?></h3>
					<p><?php esc_html_e( 'ΜΙΧΑΗΛ ΑΡΧΑΓΓΕΛΙΤΗΣ ΤΟΥΡΙΣΤΙΚΕΣ ΚΑΙ ΕΜΠΟΡΙΚΕΣ ΕΠΙΧΕΙΡΗΣΕΙΣ Α.Ε.', 'astra-child' ); ?></p>
					<p><?php esc_html_e( 'Trade Name: AUTO CLUB', 'astra-child' ); ?></p>
					<p><?php esc_html_e( 'GEMI: 071878220000', 'astra-child' ); ?></p>
					<p><?php esc_html_e( 'Licensed Car Rental Company – Registered in Greece', 'astra-child' ); ?></p>
				</div>

				<div class="autoclub-site-footer__column">
					<h3><?php esc_html_e( 'RENTAL POLICIES', 'astra-child' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'Minimum Age: 23 years', 'astra-child' ); ?></li>
						<li><?php esc_html_e( 'Driving License: 2+ years', 'astra-child' ); ?></li>
						<li><?php esc_html_e( 'Zero Deposit Policy', 'astra-child' ); ?></li>
						<li><?php esc_html_e( 'Full Insurance – No Excess', 'astra-child' ); ?></li>
					</ul>
				</div>

				<nav class="autoclub-site-footer__column" aria-label="<?php esc_attr_e( 'Legal links', 'astra-child' ); ?>">
					<h3><?php esc_html_e( 'LEGAL', 'astra-child' ); ?></h3>
					<ul class="autoclub-site-footer__links">
						<li><a href="<?php echo esc_url( home_url( '/car-rental-fleet-rhodes/' ) ); ?>"><?php esc_html_e( 'Fleet', 'astra-child' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>"><?php esc_html_e( 'Terms & Conditions', 'astra-child' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/rental-agreement/' ) ); ?>"><?php esc_html_e( 'Rental Agreement', 'astra-child' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/car-rental-in-rhodes-faq/' ) ); ?>"><?php esc_html_e( 'FAQ', 'astra-child' ); ?></a></li>
					</ul>
				</nav>
			</div>

			<div class="autoclub-site-footer__bottom">
				<p>
					<?php esc_html_e( 'Need car rental at Rhodes Airport (RHO)?', 'astra-child' ); ?>
					<span><?php esc_html_e( 'Book direct', 'astra-child' ); ?></span>
					<?php esc_html_e( 'with Auto Club and enjoy zero deposit & full insurance.', 'astra-child' ); ?>
				</p>
				<p><?php esc_html_e( '© 2026 Auto Club Rhodes. All rights reserved.', 'astra-child' ); ?></p>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
