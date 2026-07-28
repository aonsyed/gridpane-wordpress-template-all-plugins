<?php
/**
 * MU-plugin loader for WP fail2ban.
 *
 * WordPress only auto-loads PHP files placed directly in wp-content/mu-plugins/;
 * files nested inside subdirectories are not loaded automatically. This stub
 * requires the actual plugin file so it runs as a must-use plugin.
 *
 * @package wp-fail2ban
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require WPMU_PLUGIN_DIR . '/wp-fail2ban/wp-fail2ban.php';
