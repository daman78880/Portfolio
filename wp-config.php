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
define( 'AUTH_KEY',          'fAz41i$7nsNNc~X+%i&[PW.e_B[tPTwWt1W1eIwz=55F^rq.SD)y6+jJt0IU/y|V' );
define( 'SECURE_AUTH_KEY',   'XKH$jvNg-^#h%S^;aQ8CcW5q&UAfkL+,eGMg(=H7n=msuvBu%0kZ.fn>@L1a4ID.' );
define( 'LOGGED_IN_KEY',     'yo*1!bkxQePWC_/fen;O8!!>r(NMpxzE[/ebN)7Ho]~lKKZM%PSN_-OfLaq`)5pW' );
define( 'NONCE_KEY',         '_`Rjry1cdB5x+X%2>?{(u7!1qx2qAABDd9$ICAu6eA)(i)7+d&`@ls3X[6Y8?}~(' );
define( 'AUTH_SALT',         '340R>O@[+LA-<Egz<2X4eiZqW.{}xgMyHO6hK@2:<6yo_hNV~1>paTQ@?Os_tK+j' );
define( 'SECURE_AUTH_SALT',  'n2c/V<PfnQLY74+[3HM;;<tZS_TU~@gLX-4h8RWt!C*;|nXg-D&,tWY7ukw![.:)' );
define( 'LOGGED_IN_SALT',    '9<#@k#`~oz6^;M,O$)qC7JWH7(-uximCrJk}t`W9y7L3j9UCo8*9Ir.RazjVrMk:' );
define( 'NONCE_SALT',        'W-t}tOs#&.Mm/A;}Z,HCQOs&cg.:~Pq,IOU5<I&C]?):h>[)v|Wb4jS;gKB6C$$[' );
define( 'WP_CACHE_KEY_SALT', './r{M_7$Zu`fbC-sc,(w|fib=IlvV=Z)t^}[8O2wV!c`Gw>Snq(nHK61;T<6Ur4p' );


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


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
