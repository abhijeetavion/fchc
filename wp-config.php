<?php
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fchc' );

/** Database username */
define( 'DB_USER', 'fchcuser' );

/** Database password */
define( 'DB_PASSWORD', '17J8JfE8)%&0' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_MEMORY_LIMIT', '8096M' );
define( 'WP_MAX_MEMORY_LIMIT', '8096M' );
define( 'WP_AUTO_UPDATE_CORE', false );

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
define( 'AUTH_KEY',         'vV5IVQB.qT&}MRf@N-[5x_XK^X7Mcg`BtC!mor,.&-J23EFnJ3/`y{2T/#iX}s(R' );
define( 'SECURE_AUTH_KEY',  '-BSyRY;5^%49s2es/K?N./;*=I1n>>GVqxOz7~9<?9F2ND71LYJ~l,+@gN62[^+*' );
define( 'LOGGED_IN_KEY',    'R!xLCtLQ7H7Z=z@adZ,LKgq1<&(ixs(Wpn81Ky* t9V>Yj*`k`*$u|k/ uj_y)q[' );
define( 'NONCE_KEY',        '?H+vB3p55[+cxG_.hz|t34!1S;c2Rq+9VP+OF>8A)veBU?l:`DpTRr>]hE2+=pL,' );
define( 'AUTH_SALT',        'q8J7{Mf$wE;nSTaj}*@beC{MxNy_f!f$R}>>~(5Yw4++)/,<D,rW]B! .H[gi)$p' );
define( 'SECURE_AUTH_SALT', 'ziwgA)y:^48EU*`v_cdObA[;Na_Y?JDb!^l_wH|7sD}M#IllldePv[AB!?mpd}au' );
define( 'LOGGED_IN_SALT',   '_LrFLVX#,1qNd-0IT{Bt$YQAR_qv[q12ye=C,(1h>:P{HlI7 M<5_^yI4<Hsen!X' );
define( 'NONCE_SALT',       'a4THT;V_[8x@NI.3A6Kf?#sgRAd/^Frg3k!gx|j2nC*nE}A3o!a.4<*}Y;*1((~Z' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
