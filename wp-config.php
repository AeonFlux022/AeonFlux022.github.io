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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arthena_db' );

/** Database username */
define( 'DB_USER', 'arthenagallery' );

/** Database password */
define( 'DB_PASSWORD', 'arthena123' );

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
define( 'AUTH_KEY',         '= ^,`xo}J=jq?KHR?_N|?zhRiwm?[6p{>b8w?bJm0gKMg^;q@B&UeHsFg#^g*wgJ' );
define( 'SECURE_AUTH_KEY',  'kPZ =pqwK@789gQAA!Wzc7>]|ip$mdnl 1j:|{rO%MFMxIkhL.GW&XZOSSJyn<Jn' );
define( 'LOGGED_IN_KEY',    '%.<<h=19;t3!){9HH<&:E3Cgs$9sW`Zcmk8l2<9d/B~uqx%^Ro{(lkVqW /8+a8Y' );
define( 'NONCE_KEY',        'DKY[9_Lg5$E$e*@BeYc?rQ6]W}*}6o0% S&d7:@JzU3dys,tJEJ)FWJ2EXSOn3){' );
define( 'AUTH_SALT',        '=!@q79uOJX~%@jiu#XJ+KfA$@ex+szj$dJ8{V_ay.@|a%.^{:&Xsft k4JODYK1@' );
define( 'SECURE_AUTH_SALT', ';S=mk,fBvo@};9G{~N3gmekDuT4^N~M+UbQ#OF~BHz=Z- $_O%0$7,35 >)]c6I}' );
define( 'LOGGED_IN_SALT',   'e,UA+a&S<58fKqZ~{eX@r7tA&PesU)A2WYAm)i?$oI1rd54[/`RS`TE,j44Yy$jk' );
define( 'NONCE_SALT',       'PoXRxv%GuTrxT,qlk_5}G,Q@+IiuQ5@mBhccw%K%5xKDKEwG5(OTRi;.];$RZ@TZ' );

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
