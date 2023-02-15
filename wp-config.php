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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'KC2023F' );

/** Database username */
define( 'DB_USER', 'kcuser1' );

/** Database password */
define( 'DB_PASSWORD', 'kcuser4242*' );

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
define( 'AUTH_KEY',         'l,,zq(]JQ6wp.f(*$r1oxAw7sm%c.IMC+kQ_P71k@7ZIA#:}%sK+Eq%$>1VuCaz}' );
define( 'SECURE_AUTH_KEY',  '^JY{?TSJzNx6-8 0uW66S7;2$vN.z>hyVhNvIXQe3PhC^WiP.G|Xw+ 43jM#pwrh' );
define( 'LOGGED_IN_KEY',    '(xI-TV&&U*iMtXW%^P6W~`.U0u`0Dw7zrqIe%@yO~<B:})~F-ZtasKyJao^sgyWC' );
define( 'NONCE_KEY',        'y^vKQITJaN!>LgT5?7Y<`cxK,za&CfDPiWol@/b/,8~6`lY@0l5>lIq<|X(qj]M=' );
define( 'AUTH_SALT',        '0eaY#k=&eD+Ps8dzZ6hH;]Dwu[<+z):mWc)]aDqMaQty:F(3mdnBY^V-<KtPk~!s' );
define( 'SECURE_AUTH_SALT', 'tu.W(#a3M]DuO#/dH6/[y%IgLCtjM2fr/yf!Cx_pyB!}?Nhl-R7L5ta#w%mVm]gh' );
define( 'LOGGED_IN_SALT',   'YgRq`.*7;zIj<#S%IG,g:&4.EWq8;`we1_X9s-NJCn.bd!AiP,ON>eyjx,<+E^`*' );
define( 'NONCE_SALT',       '2e:`D.LS{QXAH9_g(;7cLkL8D$(q`r#fm6!|co%p^K=TT=ghS.(4$#tu=Z K}D?E' );

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

define( 'WP_SITEURL', 'https://kcphotography.com/' );
define( 'WP_HOME', 'https://kcphotography.com/' );


if ( ! defined( 'WCS_FORCE_EMAIL' ) ) {
define( 'WCS_FORCE_EMAIL', true );
}