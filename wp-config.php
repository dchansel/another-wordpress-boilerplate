<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Define site host
if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) && !empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $hostname = $_SERVER['HTTP_X_FORWARDED_HOST'];
} else {
    $hostname = $_SERVER['HTTP_HOST'];
}
// If WordPress has been bootstrapped via WP-CLI detect environment from --env=<environment> argument
if (PHP_SAPI == "cli" && defined('WP_CLI_ROOT')) {
    foreach ($argv as $arg) {
        if (preg_match('/--env=(.+)/', $arg, $m)) {
            define('WP_ENV', $m[1]);
        }
    }
    $hostname = "localhost";
}
$hostname = filter_var($hostname, FILTER_SANITIZE_STRING);

// Define protocol
if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
    (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')) {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

// Try environment variable 'WP_ENV'
if (getenv('WP_ENV') !== false) {
    // Filter non-alphabetical characters for security
    define('WP_ENV', preg_replace('/[^a-z]/', '', getenv('WP_ENV')));
} 

// Try server hostname
if (!defined('WP_ENV')) {
    // Set environment based on hostname
    //include dirname(ABSPATH) . '/wp-config/wp-config.env.php';
    include dirname(__FILE__) . '/wp-config/wp-config.env.php';
}

// Load config file for current environment
include dirname(__FILE__) . '/wp-config/wp-config.' . WP_ENV . '.php';

// Load default config
include dirname(__FILE__) . '/wp-config/wp-config.default.php';


/**
 * Starting with Wordpress 3.7, minor and security updates are rolled out automatically. Detailed information can be
 * found here: http://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/
 *
 * Depening on the project, environment and deployment strategy it might not be ideal to allow Wordpress to do automatic
 * updates. Possible options are:
 * 1. Checkout the project from a repository. Wordpress will never auto-update.
 * 2. Don't allow file modifications through the admin; config: DISALLOW_FILE_MODS
 * 3. Don't allow automatic updates; config: AUTOMATIC_UPDATER_DISABLED
 * 4. Only disable core updates; config: WP_AUTO_UPDATE_CORE
 *
 * Basically only option one and two are relevant for automatically deployed environments.
 */
//define('DISALLOW_FILE_MODS', true);
//define('AUTOMATIC_UPDATER_DISABLED', true);
//define('WP_AUTO_UPDATE_CORE', true);    // major and minor updates
//define('WP_AUTO_UPDATE_CORE', false);   // no updates at all
//define('WP_AUTO_UPDATE_CORE', 'minor'); // only minor updates
/**#@+

/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/wordpress/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


