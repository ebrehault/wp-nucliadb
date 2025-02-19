<?php
/**
 * WP Search With Nuclia "Classmap" file.
 *
 * @since   1.0.0
 *
 * @package Kalyx\WPSWN
 */

if ( ! defined( 'NUCLIA_PATH' ) ) {
	exit();
}


require_once NUCLIA_PATH . 'includes/class-nuclia-plugin-factory.php';

require_once NUCLIA_PATH . 'includes/class-nuclia-widget.php';
require_once NUCLIA_PATH . 'includes/nuclia-searchbox-shortcode.php';

require_once NUCLIA_PATH . 'includes/class-nuclia-api.php';
require_once NUCLIA_PATH . 'includes/class-nuclia-plugin.php';
require_once NUCLIA_PATH . 'includes/class-nuclia-settings.php';



if ( is_admin() ) {
	//require_once NUCLIA_PATH . 'includes/admin/class-nuclia-admin.php';
	require_once NUCLIA_PATH . 'includes/admin/class-nuclia-admin-page-settings.php';
}

function nuclia_log( $notice ) {
	if ( true === WP_DEBUG ) {
		error_log( $notice."\n" );
	};
}