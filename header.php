<?php
/**
 * AutoClub Rhodes custom site header.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$autoclub_navigation = array(
	array(
		'label'  => __( 'Home', 'astra-child' ),
		'url'    => home_url( '/' ),
		'active' => is_front_page(),
	),
	array(
		'label'  => __( 'Fleet', 'astra-child' ),
		'url'    => home_url( '/car-rental-fleet-rhodes/' ),
		'active' => is_page( 'car-rental-fleet-rhodes' ),
	),
	array(
		'label'    => __( 'Locations', 'astra-child' ),
		'url'      => home_url( '/car-rental-rhodes-location/' ),
		'active'   => is_page(
			array(
				'car-rental-rhodes-location',
				'locations-car-rental-rhodes-airport',
				'locations-car-rental-rhodes-town',
				'locations-car-rental-faliraki',
				'car-rental-ixia-rhodes',
				'car-rental-kolymbia-rhodes',
				'car-rental-afandou-rhodes',
				'car-rental-pefkos-rhodes',
				'locations-car-rental-lindos',
			)
		),
		'children' => array(
			array(
				'label' => __( 'All Locations', 'astra-child' ),
				'url'   => home_url( '/car-rental-rhodes-location/' ),
			),
			array(
				'label' => __( 'Rhodes Airport', 'astra-child' ),
				'url'   => home_url( '/locations-car-rental-rhodes-airport/' ),
			),
			array(
				'label' => __( 'Rhodes Town', 'astra-child' ),
				'url'   => home_url( '/locations-car-rental-rhodes-town/' ),
			),
			array(
				'label' => __( 'Faliraki', 'astra-child' ),
				'url'   => home_url( '/locations-car-rental-faliraki/' ),
			),
			array(
				'label' => __( 'Ixia', 'astra-child' ),
				'url'   => home_url( '/car-rental-ixia-rhodes/' ),
			),
			array(
				'label' => __( 'Kolymbia', 'astra-child' ),
				'url'   => home_url( '/car-rental-kolymbia-rhodes/' ),
			),
			array(
				'label' => __( 'Afandou', 'astra-child' ),
				'url'   => home_url( '/car-rental-afandou-rhodes/' ),
			),
			array(
				'label' => __( 'Pefkos', 'astra-child' ),
				'url'   => home_url( '/car-rental-pefkos-rhodes/' ),
			),
			array(
				'label' => __( 'Lindos', 'astra-child' ),
				'url'   => home_url( '/locations-car-rental-lindos/' ),
			),
		),
	),
	array(
		'label'  => __( 'About Us', 'astra-child' ),
		'url'    => home_url( '/about-us/' ),
		'active' => is_page( 'about-us' ),
	),
	array(
		'label'  => __( 'FAQ', 'astra-child' ),
		'url'    => home_url( '/car-rental-in-rhodes-faq/' ),
		'active' => is_page( 'car-rental-in-rhodes-faq' ),
	),
	array(
		'label'  => __( 'Contact', 'astra-child' ),
		'url'    => home_url( '/contact-us/' ),
		'active' => is_page( 'contact-us' ),
	),
	array(
		'label'  => __( 'Manage my booking', 'astra-child' ),
		'url'    => home_url( '/manage-booking/' ),
		'active' => is_page( 'manage-booking' ),
		'class'  => 'autoclub-header__manage',
	),
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'astra-child' ); ?></a>

	<header id="masthead" class="autoclub-header" role="banner">
		<div class="autoclub-header__inner">
			<a class="autoclub-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'AutoClub Rhodes home', 'astra-child' ); ?>">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php esc_attr_e( 'AutoClub Rhodes', 'astra-child' ); ?>" width="1536" height="1024">
			</a>

			<button class="autoclub-header__toggle" type="button" aria-expanded="false" aria-controls="autoclub-primary-navigation">
				<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'astra-child' ); ?></span>
				<span class="autoclub-header__toggle-line" aria-hidden="true"></span>
				<span class="autoclub-header__toggle-line" aria-hidden="true"></span>
				<span class="autoclub-header__toggle-line" aria-hidden="true"></span>
			</button>

			<div class="autoclub-header__language autoclub-header__language--mobile">
				<button class="autoclub-header__language-toggle" type="button" aria-expanded="false" aria-controls="autoclub-language-menu-mobile">
					<span aria-hidden="true">&#x1F1EC;&#x1F1E7;</span>
					<span>EN</span>
					<span class="autoclub-header__language-chevron" aria-hidden="true"></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Toggle language menu', 'astra-child' ); ?></span>
				</button>
				<ul id="autoclub-language-menu-mobile" class="autoclub-header__language-menu">
					<li><a href="#"><span aria-hidden="true">&#x1F1EC;&#x1F1E7;</span> EN</a></li>
					<li><a href="#"><span aria-hidden="true">&#x1F1EE;&#x1F1F9;</span> IT</a></li>
					<li><a href="#"><span aria-hidden="true">&#x1F1E8;&#x1F1FF;</span> CZ</a></li>
					<li><a href="#"><span aria-hidden="true">&#x1F1EB;&#x1F1F7;</span> FR</a></li>
					<li><a href="#"><span aria-hidden="true">&#x1F1E9;&#x1F1EA;</span> DE</a></li>
				</ul>
			</div>

			<nav id="autoclub-primary-navigation" class="autoclub-header__navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'astra-child' ); ?>">
				<ul class="autoclub-header__menu">
					<?php foreach ( $autoclub_navigation as $autoclub_item ) : ?>
						<?php
						$autoclub_item_classes = array();

						if ( isset( $autoclub_item['children'] ) ) {
							$autoclub_item_classes[] = 'autoclub-header__has-submenu';
						}

						if ( ! empty( $autoclub_item['class'] ) ) {
							$autoclub_item_classes[] = $autoclub_item['class'];
						}
						?>
						<li<?php echo $autoclub_item_classes ? ' class="' . esc_attr( implode( ' ', $autoclub_item_classes ) ) . '"' : ''; ?>>
							<div class="autoclub-header__menu-link-wrap">
								<a<?php echo $autoclub_item['active'] ? ' class="is-current" aria-current="page"' : ''; ?> href="<?php echo esc_url( $autoclub_item['url'] ); ?>">
									<?php echo esc_html( $autoclub_item['label'] ); ?>
								</a>
								<?php if ( isset( $autoclub_item['children'] ) ) : ?>
									<button class="autoclub-header__submenu-toggle" type="button" aria-expanded="false" aria-controls="autoclub-locations-submenu">
										<span class="screen-reader-text"><?php esc_html_e( 'Toggle Locations submenu', 'astra-child' ); ?></span>
										<span aria-hidden="true"></span>
									</button>
								<?php endif; ?>
							</div>

							<?php if ( isset( $autoclub_item['children'] ) ) : ?>
								<ul id="autoclub-locations-submenu" class="autoclub-header__submenu">
									<?php foreach ( $autoclub_item['children'] as $autoclub_child ) : ?>
										<li>
											<a href="<?php echo esc_url( $autoclub_child['url'] ); ?>"><?php echo esc_html( $autoclub_child['label'] ); ?></a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
					<li class="autoclub-header__language">
						<button class="autoclub-header__language-toggle" type="button" aria-expanded="false" aria-controls="autoclub-language-menu">
							<span aria-hidden="true">🇬🇧</span>
							<span>EN</span>
							<span class="autoclub-header__language-chevron" aria-hidden="true"></span>
							<span class="screen-reader-text"><?php esc_html_e( 'Toggle language menu', 'astra-child' ); ?></span>
						</button>
						<ul id="autoclub-language-menu" class="autoclub-header__language-menu">
							<li><a href="#"><span aria-hidden="true">🇬🇧</span> EN</a></li>
							<li><a href="#"><span aria-hidden="true">🇮🇹</span> IT</a></li>
							<li><a href="#"><span aria-hidden="true">🇨🇿</span> CZ</a></li>
							<li><a href="#"><span aria-hidden="true">🇫🇷</span> FR</a></li>
							<li><a href="#"><span aria-hidden="true">🇩🇪</span> DE</a></li>
						</ul>
					</li>
					<li class="autoclub-header__booking">
						<a href="<?php echo esc_url( home_url( '/#booking-search' ) ); ?>"><?php esc_html_e( 'Book Now', 'astra-child' ); ?></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
		<div class="ast-container">
