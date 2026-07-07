<?php
/**
 * Astra Child Theme assets.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Detect the public Manage Booking path even if WordPress page resolution fails.
 *
 * The live site can route /manage-booking to a 404 before the slug template is
 * selected. This keeps the published page URL working without changing booking
 * engine logic or requiring a database rewrite flush.
 */
function autoclub_is_manage_booking_request() {
	$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '';
	$path = (string) parse_url( $path, PHP_URL_PATH );
	$path = trim( $path, '/' );

	return 'manage-booking' === strtolower( $path );
}

add_filter(
	'redirect_canonical',
	function ( $redirect_url ) {
		if ( autoclub_is_manage_booking_request() ) {
			return false;
		}

		return $redirect_url;
	}
);

add_action(
	'template_redirect',
	function () {
		if ( ! autoclub_is_manage_booking_request() ) {
			return;
		}

		$template = get_stylesheet_directory() . '/page-manage-booking.php';

		if ( file_exists( $template ) ) {
			global $wp_query;

			if ( $wp_query ) {
				$wp_query->is_404 = false;
			}

			status_header( 200 );
			nocache_headers();
			include $template;
			exit;
		}
	},
	0
);

add_action(
	'wp_enqueue_scripts',
	function () {
		$is_homepage = is_front_page();

		if ( ! $is_homepage ) {
			wp_enqueue_style(
				'astra-parent-style',
				get_template_directory_uri() . '/style.css'
			);

			wp_enqueue_style(
				'astra-child-style',
				get_stylesheet_uri(),
				array( 'astra-parent-style' ),
				wp_get_theme()->get( 'Version' )
			);
		}

		$header_styles = get_stylesheet_directory() . '/assets/css/header.css';
		$header_script = get_stylesheet_directory() . '/assets/js/header.js';
		$header_dependencies = $is_homepage ? array( 'astra-theme-css' ) : array( 'astra-child-style' );

		wp_enqueue_style(
			'autoclub-header',
			get_stylesheet_directory_uri() . '/assets/css/header.css',
			$header_dependencies,
			file_exists( $header_styles ) ? filemtime( $header_styles ) : wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_script(
			'autoclub-header',
			get_stylesheet_directory_uri() . '/assets/js/header.js',
			array(),
			file_exists( $header_script ) ? filemtime( $header_script ) : wp_get_theme()->get( 'Version' ),
			true
		);

		if ( $is_homepage ) {
			$homepage_styles = get_stylesheet_directory() . '/assets/css/home-v2.css';

			wp_enqueue_style(
				'autoclub-home-v2',
				get_stylesheet_directory_uri() . '/assets/css/home-v2.css',
				array( 'autoclub-header' ),
				file_exists( $homepage_styles ) ? filemtime( $homepage_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'car-rental-rhodes-location' ) ) {
			$locations_styles = get_stylesheet_directory() . '/assets/css/locations.css';

			wp_enqueue_style(
				'autoclub-locations',
				get_stylesheet_directory_uri() . '/assets/css/locations.css',
				array( 'astra-child-style' ),
				file_exists( $locations_styles ) ? filemtime( $locations_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'locations-car-rental-rhodes-airport' ) ) {
			$airport_styles = get_stylesheet_directory() . '/assets/css/rhodes-airport-car-rental.css';

			wp_enqueue_style(
				'autoclub-rhodes-airport',
				get_stylesheet_directory_uri() . '/assets/css/rhodes-airport-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $airport_styles ) ? filemtime( $airport_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'locations-car-rental-rhodes-town' ) ) {
			$town_styles = get_stylesheet_directory() . '/assets/css/rhodes-town-car-rental.css';

			wp_enqueue_style(
				'autoclub-rhodes-town',
				get_stylesheet_directory_uri() . '/assets/css/rhodes-town-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $town_styles ) ? filemtime( $town_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'locations-car-rental-faliraki' ) ) {
			$faliraki_styles = get_stylesheet_directory() . '/assets/css/faliraki-car-rental.css';

			wp_enqueue_style(
				'autoclub-faliraki',
				get_stylesheet_directory_uri() . '/assets/css/faliraki-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $faliraki_styles ) ? filemtime( $faliraki_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'locations-car-rental-lindos' ) ) {
			$lindos_styles = get_stylesheet_directory() . '/assets/css/lindos-car-rental.css';

			wp_enqueue_style(
				'autoclub-lindos',
				get_stylesheet_directory_uri() . '/assets/css/lindos-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $lindos_styles ) ? filemtime( $lindos_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'car-rental-ixia-rhodes' ) ) {
			$ixia_styles = get_stylesheet_directory() . '/assets/css/ixia-car-rental.css';

			wp_enqueue_style(
				'autoclub-ixia',
				get_stylesheet_directory_uri() . '/assets/css/ixia-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $ixia_styles ) ? filemtime( $ixia_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'car-rental-kolymbia-rhodes' ) ) {
			$kolymbia_styles = get_stylesheet_directory() . '/assets/css/kolymbia-car-rental.css';

			wp_enqueue_style(
				'autoclub-kolymbia',
				get_stylesheet_directory_uri() . '/assets/css/kolymbia-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $kolymbia_styles ) ? filemtime( $kolymbia_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'car-rental-pefkos-rhodes' ) ) {
			$pefkos_styles = get_stylesheet_directory() . '/assets/css/pefkos-car-rental.css';

			wp_enqueue_style(
				'autoclub-pefkos',
				get_stylesheet_directory_uri() . '/assets/css/pefkos-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $pefkos_styles ) ? filemtime( $pefkos_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'car-rental-afandou-rhodes' ) ) {
			$afandou_styles = get_stylesheet_directory() . '/assets/css/afandou-car-rental.css';

			wp_enqueue_style(
				'autoclub-afandou',
				get_stylesheet_directory_uri() . '/assets/css/afandou-car-rental.css',
				array( 'astra-child-style' ),
				file_exists( $afandou_styles ) ? filemtime( $afandou_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'about-us' ) ) {
			$about_styles = get_stylesheet_directory() . '/assets/css/about-us.css';

			wp_enqueue_style(
				'autoclub-about',
				get_stylesheet_directory_uri() . '/assets/css/about-us.css',
				array( 'astra-child-style' ),
				file_exists( $about_styles ) ? filemtime( $about_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'car-rental-in-rhodes-faq' ) ) {
			$faq_styles = get_stylesheet_directory() . '/assets/css/faq.css';

			wp_enqueue_style(
				'autoclub-faq-page',
				get_stylesheet_directory_uri() . '/assets/css/faq.css',
				array( 'astra-child-style' ),
				file_exists( $faq_styles ) ? filemtime( $faq_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'terms-conditions' ) ) {
			$terms_styles = get_stylesheet_directory() . '/assets/css/terms-and-conditions.css';

			wp_enqueue_style(
				'autoclub-terms',
				get_stylesheet_directory_uri() . '/assets/css/terms-and-conditions.css',
				array( 'astra-child-style' ),
				file_exists( $terms_styles ) ? filemtime( $terms_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'contact-us' ) ) {
			$contact_styles = get_stylesheet_directory() . '/assets/css/contact-us.css';

			wp_enqueue_style(
				'autoclub-contact',
				get_stylesheet_directory_uri() . '/assets/css/contact-us.css',
				array( 'astra-child-style' ),
				file_exists( $contact_styles ) ? filemtime( $contact_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'rental-agreement' ) ) {
			$agreement_styles = get_stylesheet_directory() . '/assets/css/rental-agreement.css';

			wp_enqueue_style(
				'autoclub-rental-agreement',
				get_stylesheet_directory_uri() . '/assets/css/rental-agreement.css',
				array( 'astra-child-style' ),
				file_exists( $agreement_styles ) ? filemtime( $agreement_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'car-rental-fleet-rhodes' ) ) {
			$fleet_styles = get_stylesheet_directory() . '/assets/css/fleet.css';

			wp_enqueue_style(
				'autoclub-fleet',
				get_stylesheet_directory_uri() . '/assets/css/fleet.css',
				array( 'astra-child-style' ),
				file_exists( $fleet_styles ) ? filemtime( $fleet_styles ) : wp_get_theme()->get( 'Version' )
			);
		}

		if ( is_page( 'manage-booking' ) || autoclub_is_manage_booking_request() ) {
			$manage_booking_styles = get_stylesheet_directory() . '/assets/css/manage-booking.css';

			wp_enqueue_style(
				'autoclub-manage-booking',
				get_stylesheet_directory_uri() . '/assets/css/manage-booking.css',
				array( 'astra-child-style' ),
				file_exists( $manage_booking_styles ) ? filemtime( $manage_booking_styles ) : wp_get_theme()->get( 'Version' )
			);
		}
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
		if ( ! is_front_page() ) {
			return;
		}

		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_script( 'astra-flexibility' );
	},
	100
);

add_action(
	'wp_head',
	function () {
		if ( ! is_front_page() ) {
			return;
		}

		$hero_desktop = get_stylesheet_directory_uri() . '/assets/images/homepage-hero.webp';
		$hero_mobile  = get_stylesheet_directory_uri() . '/assets/images/homepage-hero-mobile.webp';
		?>
		<link rel="preload" href="<?php echo esc_url( $hero_mobile ); ?>" as="image" type="image/webp" media="(max-width: 767px)" fetchpriority="high">
		<link rel="preload" href="<?php echo esc_url( $hero_desktop ); ?>" as="image" type="image/webp" media="(min-width: 768px)" fetchpriority="high">
		<style id="autoclub-hero-critical-css">
			.home .autoclub-hero {
				background-color: #071a36;
				background-image: url("<?php echo esc_url( $hero_mobile ); ?>");
				background-position: 62% center;
				background-repeat: no-repeat;
				background-size: cover;
			}

			@media (min-width: 768px) {
				.home .autoclub-hero {
					background-image: url("<?php echo esc_url( $hero_desktop ); ?>");
				}
			}
		</style>
		<?php
	},
	1
);
