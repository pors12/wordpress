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
define( 'DB_USER', 'Poras12' );

/** Database password */
define( 'DB_PASSWORD', 'Wordpress@1$2&3' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'z}BDUIy7DRo[2bXuU WsFF2z7.AgD8{l;s^o&[ho+wWQg#A@<2ob>ym~,z5wLB:E' );
define( 'SECURE_AUTH_KEY',  '3<fy>SJ/$$c(LesD7/>MO!s,EY#`#w?A4+6/UaYh~HL,n`CD<usKF]N+dUbwS[gY' );
define( 'LOGGED_IN_KEY',    'wd9UH:^BLink88]j6IP-{KOAn$n;V? ]x{c XP8:{rFb8:##7s#8&(k)`|#=Z9i{' );
define( 'NONCE_KEY',        'gaT}8;-@K3<egel&i-]~b/XLooY.2W+N7d+w*T};;0i`c+*+wr!z6;)9yf4R_F.8' );
define( 'AUTH_SALT',        'q4w[(c+2Y+~F+;(E(E}AtxLdHhs!f9K? <GL|WU/ys0Ib]w%P3JFM!fTBrDa(~=U' );
define( 'SECURE_AUTH_SALT', ' e@(,m()CGRP>ZEx3wP2E6Vehw-wGU3A J;E<OoM)kic^[v5Y4vCZ(x>:6q??^b7' );
define( 'LOGGED_IN_SALT',   'X1jJ#WbauBV%*7{i~(O1H9+Z@j|YvVt-0+m[a ]hfXT[KJFT>KLhQZ<|zyy7,]SQ' );
define( 'NONCE_SALT',       'V`zo>%E/(wvY*p3?z`_&#|VdL5mF!n4fFW|yxv<uzF}5TT))&~=w@hVy35&oF&|~' );

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
