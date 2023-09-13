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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[_ifP8*sKxA`#q=LeG3=[MX~j28>sUKS0[:B,R$(!t1?(#WiCd4JYF[QRYD.G ;?' );
define( 'SECURE_AUTH_KEY',  '?*Pq^*2 nd1-TB0vs[h&K4*mu?<f,K4r+Pa`;`=,oN-3j~dJh@bv;*B%>MreA3`U' );
define( 'LOGGED_IN_KEY',    '1#R8abf&0#@ZRH3<-.3XFNLWP5,[_S=/Vc{_/2h*us>NhRo.Q;N.]IgH|%Ln^SZ;' );
define( 'NONCE_KEY',        '%@|#2$lp^KOU/a{/DG.*DdD$v#cu? b^%:}<&j )9plK{.$,v7`#5*-o}uyG-Dhk' );
define( 'AUTH_SALT',        'yD}~e8TA(XFngD?AehK+S:C`-=<UISLw9&ARc&w]rMwkZG_^(M0K@(5g?kR);<s`' );
define( 'SECURE_AUTH_SALT', 'Ck7a!#4wfve $J&xJP_gFwC?gVH*^)pe>U3:mw-j(Y7&:JIa?VNBW}09|{Y-kedH' );
define( 'LOGGED_IN_SALT',   'oWCo(T/=RI<1$~FD/XG~Kkfn(i%[+m#O6Y7s`Ln</<~P(~@8j#HI1Q}tM3{Du 2W' );
define( 'NONCE_SALT',       'D#B]D%kXoa/c>u28h5y_H8MK(&$KIT~P6cn|0/u*t|]IGpvrWCiNHMe#uV<Bo]X)' );

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
