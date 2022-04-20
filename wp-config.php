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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'C=Ku2ixon3E|]S ELhB3J9]SN%y~Ms@,<~&d=iJWRisRSXW{)sXbnH9)Fy]<]KQ%' );
define( 'SECURE_AUTH_KEY',  'XVCl]E1aK*B1TFevf<YrzV8$Chvw0EKU+OImQY*wPR=ZzF>^8!(hJ>=IR0uOj!J=' );
define( 'LOGGED_IN_KEY',    'u&d.Fn#2:f|/~3{yGJ#ll;]JCm0{;7&|;e`-LMH.:ieVKA[-lg0F+F1gb+<Lr&yV' );
define( 'NONCE_KEY',        'g)k3/wn#Sr-EJECB*d(2igEQyO8^)IwC{{Gw]DQtl.p]DW0AB/Q.VIWH+oWtZ#^>' );
define( 'AUTH_SALT',        'lPa%3Q?yG3eNtq8Q~DwOe67h6gK4#WL.n}uZ=~0V@G*19WFK(n{jRY(W?/1a79]H' );
define( 'SECURE_AUTH_SALT', '?dyuo@^gsSk|5xW}dGfg7>MP@/:KCAJU2D.SODX?:y_$r5Lcn~fs~p)ydUG)n~lF' );
define( 'LOGGED_IN_SALT',   '#.0/~b9pTg2}zq,9H6b{gKDjyyXD*@%f2cz-s[@*~n12BZ|*|wAF^a[-,!{:U ZO' );
define( 'NONCE_SALT',       'J8GLWb`B8qHX>o}V;5+r-H4ol@69X0X]/Rk[quU^h&6w0#H|Q[0[]3F186)qP/Vh' );

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
