<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'handyman' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q6R1igq3R2bSpUvGjXz33u3XbexpqPxyIojEcX2e1z5YpQlDNYUCsngbcRkqaCNx' );
define( 'SECURE_AUTH_KEY',  'SoAcLMjn3oc86KrDjLatQ9kbrTvHyXwv7RQPiM8l2Re3lfXmUt4LPR2d3irl3Eah' );
define( 'LOGGED_IN_KEY',    '8YMDh99rSnntu7wZ4pWGYUU2w9Wwm2Oj0ci6v8orZcmPRxG7AKY3qhApKV4wJBRj' );
define( 'NONCE_KEY',        'zlnyz1QZ6Wj1iZgIXTAt9OBQLkRolwMc7VaYt32nX40CiawFOXrDoeX5bA1efCgJ' );
define( 'AUTH_SALT',        'OVzZ6lE5VUvlHml5HwmFgBbGQAjd0A510fCeGnitUoipOsepuemUZEvfTdCpXzXL' );
define( 'SECURE_AUTH_SALT', 'F6BPyDklP1xCw68UsicgkRwDgymB2HIjsi9PNvrZUTQDF3sxUtgGOjPwvuDooZom' );
define( 'LOGGED_IN_SALT',   'Rx3n2oqJhFvQ32dZI9yzRRL0lTeNrR2SUbGzS3vHWXCyGgsRIeDcKB4kA7PhHCGf' );
define( 'NONCE_SALT',       'liUCuCXefTp2g9Eiu3syQBTd7BUMn22GtVhuTXvDZBAcS9doTtvtOx0G72e4RuPp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
