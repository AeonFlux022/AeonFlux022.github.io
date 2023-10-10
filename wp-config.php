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
define( 'AUTH_KEY',         'E>@[&z&YU>?j__N?}}5/ky_m]:#(3&y?&1Xu<$T>cYPw-?hy|N&;H;b0l2f>$:}R' );
define( 'SECURE_AUTH_KEY',  '`q0bD-0>UtA`,<)p<!Y`N/)T q|EWRK)tC{5r`}cd/W1BsAh|*NO9,z:;#j:Rgs ' );
define( 'LOGGED_IN_KEY',    '[@zBCUthn;7ihy{9I[jjB $l=#C3_8YCJ?$BGxL6}&Pq rf`Ts3E2?MU38N0Mw}#' );
define( 'NONCE_KEY',        '_>O0;32H#O{W<sS.&]wa3~i /u<F1G<yT8!o)5Lx#i2bg`quFN0%$~H.JV2F6uJ_' );
define( 'AUTH_SALT',        'alU,+~KqVc1ar=X3 UXC+cQLnzGY;^%2*rzc(M.,CS<w)61z/H!b=fO2n/M6S.gH' );
define( 'SECURE_AUTH_SALT', '=/^ -2]A0i*#MOe~QC{jf,CJ[l5.K,M}XnjPN:($geSo YFV2XG[X%:H5QCS:BJc' );
define( 'LOGGED_IN_SALT',   'wo/;opC1BY,Tl-] 3Ab|rD#R$*K[H?1]-YptK(K>5444w/,2[R$[|OrywKICm|9V' );
define( 'NONCE_SALT',       '*k=kx56?gxPYIJ;rB1dQ;@j-sm[Sd&[mvO?FloPl]uEas6=+@p)dWl+6!(a]Z+HL' );

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
