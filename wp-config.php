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
define( 'DB_NAME', 'careernetwork' );

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
define( 'AUTH_KEY',         'VmCqnDYO~i4SAR0%Ae`B>HJN#&ADAGVB| ,OTtJQZqOwns$qEJLZpY6uTUH(:GYa' );
define( 'SECURE_AUTH_KEY',  '=rZuo}@nzS~)fY16!!6Nch7xgKh(z[*};ibM7dkj4D:?>IjRL:yrO!QO;=oQftb=' );
define( 'LOGGED_IN_KEY',    '@rmGj-,+F[nlPC.muI-QR]Ghb+$W_hG-v+*$eXa0 :&4bhcH8PjNr^M@@yr(.~X+' );
define( 'NONCE_KEY',        'ChC&v<vL9$>PWDW$AC*r{=Tj{AMin],L&2LM@TuZ=bTS*E3* |S6Iz=NVr->kR}~' );
define( 'AUTH_SALT',        'E,Q;44_3 N$JbkI}crBAC8|} #x_6IekR&j@QB44_,EXXCAGQ]BB+EbnK}ZLecJ%' );
define( 'SECURE_AUTH_SALT', 'H_=dxw]@!3,FW<oD6%h`[[=A46FOvXjAk_OHLL!C-906HL+bg-`5MyN+_/;.7{-f' );
define( 'LOGGED_IN_SALT',   'o>cGI};{p}:-$K.BZI[Zwk!#IpwhLXP:mE`K|}qE7^wv/roy$]%{V>;n;VUsTRW9' );
define( 'NONCE_SALT',       'YoL2q7~;x/zgnJA+,-c#eD!E4fKrR7PLKe~d03J|#=|5l #obV2}(-8-TC#b(S|b' );

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
