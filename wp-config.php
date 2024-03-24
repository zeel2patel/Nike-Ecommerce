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
define( 'DB_NAME', 'zeel_project1' );

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

define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         'wxe`)Ul?U=fVTz%91-E~pH&C0n|=fS9N~@CAXj@Y - Vn#*TGoQtIR^$w#t|gn9F' );
define( 'SECURE_AUTH_KEY',  'I3E:O8zGW]5^81:DB|;J{.WHVfRe<cO46N]<cBS`%8e{f-:4s,+LC6Eg:+OSykZX' );
define( 'LOGGED_IN_KEY',    '>7DKl&xLibu@sDkrc*,20NM~D:P~?l;K$A|ehM$@<Bk{GWf~*B0`j88x=X%e0bU%' );
define( 'NONCE_KEY',        'r&1CxG;>OA i?iNE)&+jZPPDkqTO%NXjO.[4y@T`ar9]g.0Sh,`?fg!c5ZDQ@( J' );
define( 'AUTH_SALT',        '96lBhv$oaR^ku[>R]d;S 0v]Rx%A*{TrZSV+{LN<NqNX~+/;n?OG9o,^NfUI(Bjb' );
define( 'SECURE_AUTH_SALT', 'v2Gt6)P[Vs(e80&/mD8e&<AoF[w`P{dLp.YXJfPI[Y%2#!<DUA<,Y@$P!$-I;a=[' );
define( 'LOGGED_IN_SALT',   'b`k<s?i-L_a~o>?UQDZ[BKOnvaoc>E*/|=@:80_1b[j.ZKHglXx=eE^n#A_/;N=-' );
define( 'NONCE_SALT',       'jOVyhX<x=E!Y4v@c/8Po]vHkyA}xx8dny{-PA:%(qr,)z}%BAx_E3B{IpA+`1@o8' );

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
