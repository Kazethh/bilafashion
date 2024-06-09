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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bilafashion' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(&h}VD1?EQaskQHOQ`1->i32$HU:D%`.=eJ?w>`c@j{z>Acrk*-~:wa<7sQR4(<j' );
define( 'SECURE_AUTH_KEY',  'uy!Fc+8VPP8LpV7urm72 fZ&M&brMU)e3uy=8B29VqbiNG`{/6h|EnH];zT[L8;K' );
define( 'LOGGED_IN_KEY',    'ij>M;0 4P`$AM,ot^w;=aO+9F,i. t81|Y2x$;VhkIs1bVc&y 0tWW}M-=vevF*{' );
define( 'NONCE_KEY',        'lwQ<r,0?O<iZ}|rpbZX)87NO0N?7 ?-*;{Zb#YtYDo@*?}Bk$odd@I%@~[<Vq4%E' );
define( 'AUTH_SALT',        'QY!bi!p?^ugqP4BwIk(=3h_Nrf)jtW?k/u$wpH~?FFZylW)?[A )_`|~*u./Anhv' );
define( 'SECURE_AUTH_SALT', 'v;^O5Sv70`!/0RqM|UV~4M}c#l6Fn=6G)>e*, :tZ{>eT0V1KuE+~!R,Go eq_?+' );
define( 'LOGGED_IN_SALT',   'gAkb=i{?q}}]YN5#VpsS5z-y8SXJLX|p(]3~oEIzpm;?X0AoN|v`pwxmCsa85oe!' );
define( 'NONCE_SALT',       ':je?E8_GhU`DeugG@sxOX>D8uW4ot2]v9U2o8.E;QR671IsZKpZp)6O!DZN$T2]B' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
