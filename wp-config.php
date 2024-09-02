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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '.}R$n=Lalaa#[STQ4]HxAzrB5}+7L%2%RZUKr!|8upRAUE8+QeC&Tq[C,^`$3wnC' );
define( 'SECURE_AUTH_KEY',  'K$zT?=+j0rp.b+ KO=d?mBKOYq]7 _|YS.n8vW,Kw,OaI:btf;g$t}VdH+=gyKJ(' );
define( 'LOGGED_IN_KEY',    'sXg7BI4[@`}KB=iNC~Cr!>Z5XVWgT^AVN?kDZJo2_Sg<jj4Pk6G@?(,w.iNeXBYW' );
define( 'NONCE_KEY',        'Y>eq+8jGAo`x~Hm~IzpnIj5U1 @6C+mE}TE;xB@,}UA|^IZchkkNX@I8r*b0n)M)' );
define( 'AUTH_SALT',        '_N9j~%*n.+Z$?.qm/r>!T>H,M*BhI[x/{STi@gMrM@@|zwJ#2<9CC:{m{iAPf#ri' );
define( 'SECURE_AUTH_SALT', 'Q,e&=GUe8X#NJ5r)t6BUUCsJ,E=}uY8k iyXe3OPll5ozpwa0 dj71pWhT23X`xN' );
define( 'LOGGED_IN_SALT',   ',+P|ei?uh)2XIS/C,`StiM<RE9Q{rL0tWIMa=peh`JT[`EQy-u4$rD>teoK7xTL}' );
define( 'NONCE_SALT',       'KYF55dp3]Kkwr{dRo3z}Z6p)n3/h^0:_m6(DOVZh7rN$36GJ31n1v.bxZ>0F,>a4' );

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
