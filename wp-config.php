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
define( 'DB_NAME', 'd4vlg59c0pjmg2' );

/** Database username */
define( 'DB_USER', 'bolszntbeufznc' );

/** Database password */
define( 'DB_PASSWORD', 'cdb4b1ac15ba9a119635f3411590fcab686e0370e94ee0f05967afc170477535' );

/** Database hostname */
define( 'DB_HOST', 'ec2-3-217-146-37.compute-1.amazonaws.com' );

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
define( 'AUTH_KEY',         'l]%s^R-G`abS=BH^@w3uNXZ*8o=6B6Z=Ka!qCD.D[ROG~x)(7{?a^/X@acYj@v7r' );
define( 'SECURE_AUTH_KEY',  '( A=Bt(ritX+^Jlb!nU(-|y[mC3B-sq#&>Im)i?-Wk pSj?F+sSMps~`1L+f91oE' );
define( 'LOGGED_IN_KEY',    'M9b`}xK}V$b~]~2Or[)7SyFFi5I]Exy,Q7N}bO>gs$Q0n#,/ro-pmypoES4F&=f;' );
define( 'NONCE_KEY',        'Y;Dso%;#hCvv/Y=w)|SvMDH^6xH?`07j0DDHVL)(dJb#*XovA>OPi^s;bE4&Uf@#' );
define( 'AUTH_SALT',        'N@:dFA2`7<@#3VjlqRt>X^8C|9EFIpr ,8LyX9f:HL}Cts@Q4`&r_0QCG^FZsDz4' );
define( 'SECURE_AUTH_SALT', 'Y P}v9C[GdM=5cH[H-elu>7MmX-tc{,q=9u5FqB>x~`v,w.vkb3BL7E}6f/e0B+g' );
define( 'LOGGED_IN_SALT',   '(K^h*H&QvEwD&!h%cqbk9veL?h=crRz:M_OTWgL+7nBRqYlS@Y^=li=eYj+w1*1~' );
define( 'NONCE_SALT',       '|]iTOsl&Unm6G@_vifO,xGJOySJ*mLp<U6FfTdtnX4|K/p*rBxbqzY#qu5W~A-f-' );

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
