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
define( 'AUTH_KEY',          '<&yy$c3|}E>}4u`_P,`?AOQ)ipxwr:}u<{JH?Z3HQYH`Gs%jAtCj_WpVOD/){ifR' );
define( 'SECURE_AUTH_KEY',   '25m:W$F<I pXt(eZ$p@smd,$U1TlH@PbT<<p0$jj!U?5w-M !}1SjTAUjR6Twu=+' );
define( 'LOGGED_IN_KEY',     '5]1aVmo-B#x^.k#VKn1 %TYR|tMd%m}h0l*6|h>`Z4{:1aV;mliD43;p~r~mmP+>' );
define( 'NONCE_KEY',         'Tx&w)q#oNLwe3hHPHd}h)bknwB:t<<gsRw7y(24~L4ul)o~CpVYK-u9Ugrpi2e)L' );
define( 'AUTH_SALT',         'LYv+Qp2X9(gw_^AA,f2(bF>$l&jv/ZmASpQ1t)Dj7pDu)R<).ufW.sQ=|;7GBR:^' );
define( 'SECURE_AUTH_SALT',  'h)wPS8t8|[B8$J5t~.r|5z@/Pe3Yy~<^$h{u?RZtl1wZg}FJW<#/>Titvqew_;0]' );
define( 'LOGGED_IN_SALT',    'Bd#M[:/y:l `+~T/&090Z=-:?@X%%%{_uxqX(z@!qb72s~pP:a4okM8;@8f&#3lS' );
define( 'NONCE_SALT',        ':5KqUtP6H(6*n>=}Sz}yFzV%AdJ;aUoHy?+[D6`GcbMF_Zidf]WKg%d:W?)NnA>s' );
define( 'WP_CACHE_KEY_SALT', '|XL3s% D4YS<1=s;<?:{aqEZUcJiro )d!d1 6*l*!)7?5{3;ivIS$eizY>3l-vs' );


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
