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
define( 'DB_NAME', 'alex_site' );

/** Database username */
define( 'DB_USER', 'alex_site' );

/** Database password */
define( 'DB_PASSWORD', 'senha123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'z$|$Pd-1K{H#cH@V%%0VU_6{bEjIy.[my:a,.*}ubRx9uJT9jx%|+(p`1L*-(<Q5' );
define( 'SECURE_AUTH_KEY',  'AP)$mnSJl![N!wyi^owbn$HrWp ~!?Caq=&!8OHJ?$z#r(_2t?J)(;-0)f7+T&OW' );
define( 'LOGGED_IN_KEY',    'aJ~r`k&xk@%RzP=a*(5Nbq;+_$% X,`sqn8n.}uUsq8ODb$wsvbuKF%|+AWgR_-&' );
define( 'NONCE_KEY',        'K ):eM2x#neHvAx9,B~6Y9B{RdYa=e34.oBT$rv5pU# :y<%vVdo-<y]&Yp`5cPo' );
define( 'AUTH_SALT',        '?)sA{;WTmjK3!mCZ-TqJ?<m;~)pJpCasdUVE4dRq!FpO}Zfp!z69-37Y.wh[!Jwr' );
define( 'SECURE_AUTH_SALT', '+/jmWNwU8Hf8xgh2Jk`oC-<OzV]s.J ^[#r+v_-5v ZT8oz^~e^2N:gk#0={b [`' );
define( 'LOGGED_IN_SALT',   'rGVu!Z=,r7m5UMq7H6brLRRIH^epX,`pP7urL_t!+:9uGZB5NVl%llf18MpJkZA[' );
define( 'NONCE_SALT',       'mnr@UP(wGMxHsz<[vHiV!2lrmYu /HkQb/Cr5``U:x/#I,8/VZ(P/)<YZ!ud^=Om' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
