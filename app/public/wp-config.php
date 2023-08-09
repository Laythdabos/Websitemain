<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'nqggckzwTb/dtH6Kipsw6tjhkHPpFFsxEtBXVV2TvqiJPMCAhzAHkUbG4SuoR24FU7UlCMjVt1Vyqcx9oq01fA==');
define('SECURE_AUTH_KEY',  'h4Y98LNVT8RetoH4HmKFPaeZNzLPfRF0HGX2k5RW9KIBP5Cvz86DAIWvs6qqGjWs/Ix+0B1ETtkjF0L6axWuKw==');
define('LOGGED_IN_KEY',    'yUMfG2qog262AoCdMF9pc1WcVRw9IkF7m/3fIRxLrBB6U3HrE7whckQPibFcPdLKTgZ2Mm8/nJai09zSxk4t/g==');
define('NONCE_KEY',        'nqmIr8hJRhYdExNKmpCfnY5IRzaIGyseRqPecLc158nnK5+BzY56vPPhv2nvc0+ejgMEo7Ayb43Vr2FFCFVDQA==');
define('AUTH_SALT',        'd+RFoBNS9o99fDJ26GbtvLirgKjNddxVJ9MgM4S/0pZsol682aWUDV/92fBBBALqjuhnUPVJqrkkj0d95yi1wA==');
define('SECURE_AUTH_SALT', 'Rp4lR6IYKq64xu1MIDmpD5Fcxrx+1z4JZAf/SQK5oMdMN9tupzwuZSgxpQCt/7Pjfhd1px1QxrnJos0GZmKkHQ==');
define('LOGGED_IN_SALT',   'w3CInXNDLxFgWMl51RcSy5FK2UtKcG7ibVhnAFboAEIPahGqamUUU0uAfX+8OLrgvUEUmIghwpvQ/SpygHIaWg==');
define('NONCE_SALT',       '2p9kWA0nbm9B4JFGy9PZKJyIX3CxOuYucAwJcKXk80AmIO/ezubW/kpIFtQPGbY2t1+RbKE1LOPQy/HfiFkozw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
