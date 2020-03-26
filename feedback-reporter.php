<?php
/**
 * Plugin Name: Feedback Reporter
 * Version: 1.0.0
 * Plugin URI: http://www.iamgini.com/
 * Description: This plugin will help to report feedbacks collected via Jetpack forms
 * Author: Gini Gangadharan
 * Author URI: http://www.iamgini.com/
 * Requires at least: 4.0
 * Tested up to: 5.0
 *
 * Text Domain: feedback-reporter
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Gini Gangadharan
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-feedback-reporter.php';
require_once 'includes/class-feedback-reporter-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-feedback-reporter-admin-api.php';
require_once 'includes/lib/class-feedback-reporter-post-type.php';
require_once 'includes/lib/class-feedback-reporter-taxonomy.php';

/**
 * Returns the main instance of Feedback_Reporter to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Feedback_Reporter
 */
function feedback_reporter() {
	$instance = Feedback_Reporter::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Feedback_Reporter_Settings::instance( $instance );
	}

	return $instance;
}

feedback_reporter();
