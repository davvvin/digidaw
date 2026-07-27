<?php
/**
 * Seafood Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Seafood Shop
 * @since Seafood Shop 1.0
 */

if ( ! function_exists( 'seafood_shop_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function seafood_shop_setup() {
	load_theme_textdomain( 'seafood-shop', get_template_directory() . '/languages' );

	/**
	 * Load TGM.
	 */
	require get_template_directory() . '/inc/tgm/tgm.php';

	/**
	 * Notice.
	 */
	require_once get_template_directory() . '/inc/notice/notice.php';

	/**
	 * Theme Info Page.
	 */
	require get_template_directory() . '/inc/addon.php';

	/**
	 * Customizer
	 */
	require get_template_directory() . '/inc/customizer.php';
}
endif;
add_action( 'after_setup_theme', 'seafood_shop_setup' );

function seafood_shop_block_assets(){
	wp_enqueue_style( 'seafood-shop-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '7.1.0' );
	wp_enqueue_style( 'seafood-shop-animatecss', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'seafood-shop-owlcarousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style( 'seafood-shop-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script('seafood-shop-wow-script', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'));
	wp_enqueue_script('seafood-shop-owlcarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'));
	wp_enqueue_script('seafood-shop-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_style_add_data( 'seafood-shop-style', 'rtl', 'replace' );
}
add_action('enqueue_block_assets', 'seafood_shop_block_assets');

function seafood_shop_setup_theme() {
	if ( ! defined( 'SEAFOOD_SHOP_PREMIUM_PAGE' ) ) {
		define('SEAFOOD_SHOP_PREMIUM_PAGE',__('https://www.theclassictemplates.com/products/seafood-wordpress-theme','seafood-shop'));
	}
	if ( ! defined( 'SEAFOOD_SHOP_PRO_NAME' ) ) {
		define( 'SEAFOOD_SHOP_PRO_NAME', __( 'About Seafood Shop', 'seafood-shop' ));
	}
	if ( ! defined( 'SEAFOOD_SHOP_THEME_PAGE' ) ) {
		define('SEAFOOD_SHOP_THEME_PAGE',__('https://www.theclassictemplates.com/collections/best-wordpress-templates','seafood-shop'));
	}
	if ( ! defined( 'SEAFOOD_SHOP_SUPPORT' ) ) {
		define('SEAFOOD_SHOP_SUPPORT',__('https://wordpress.org/support/theme/seafood-shop/','seafood-shop'));
	}
	if ( ! defined( 'SEAFOOD_SHOP_REVIEW' ) ) {
		define('SEAFOOD_SHOP_REVIEW',__('https://wordpress.org/support/theme/seafood-shop/reviews/','seafood-shop'));
	}
	if ( ! defined( 'SEAFOOD_SHOP_PRO_DEMO' ) ) {
		define('SEAFOOD_SHOP_PRO_DEMO',__('https://live.theclassictemplates.com/seafood-shop-pro/','seafood-shop'));
	}
	if ( ! defined( 'SEAFOOD_SHOP_THEME_DOCUMENTATION' ) ) {
		define('SEAFOOD_SHOP_THEME_DOCUMENTATION',__('https://live.theclassictemplates.com/demo/docs/seafood-shop-free/','seafood-shop'));
	}
	if ( ! defined( 'SEAFOOD_SHOP_BUNDLE_PAGE' ) ) {
		define('SEAFOOD_SHOP_BUNDLE_PAGE',__('https://www.theclassictemplates.com/products/wordpress-theme-bundle','seafood-shop'));
	}
}
add_action('after_setup_theme', 'seafood_shop_setup_theme');

function seafood_shop_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('seafood-shop-welcome-notice', get_template_directory_uri() . '/inc/notice/notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('seafood-shop-welcome-notice', 'seafood_shop_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('seafood_shop_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('seafood_shop_welcome_nonce'), 
        'redirect_url' => admin_url('themes.php?page=seafood-shop')
    ));
}
add_action('admin_enqueue_scripts', 'seafood_shop_enqueue_admin_script');

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

// Simplify checkout fields for local Dimsum delivery
add_filter( 'woocommerce_checkout_fields' , 'dimsum_override_checkout_fields' );
function dimsum_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['shipping']['shipping_company']);
    return $fields;
}