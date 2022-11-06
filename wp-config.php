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
// define( 'DB_NAME', 'newSite11' );
define( 'DB_NAME', 'sql7547738' );


/** Database username */
// define( 'DB_USER', 'dana' );
define( 'DB_USER', 'sql7547738' );

/** Database password */
// define( 'DB_PASSWORD', '6U!cVesxwd8Vwm3u' );
define( 'DB_PASSWORD', 'wqBjINqSLY' );

/** Database hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'sql7.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'XO<lFvew<[1+D]7C}8n>`^[,FM3bmtS:P&iVD*)fkjO>bMf/]1oFLiG#wm/Cdz~.' );
define( 'SECURE_AUTH_KEY',  'hx@H@t_`/[RThK|i}n+j^<^w|=&CXq#vC+;Ow=g&9<]E;{$r}p+qfyZy&KDnP,Qt' );
define( 'LOGGED_IN_KEY',    '5lcM%R.E2inhtb;O$zFU*.jHd[z*W:&W+vx[ vf-:6jJa4qB$}}Zomf9%Dym,dvm' );
define( 'NONCE_KEY',        'w#crZ<%G0L.V%QdgUm^ps{}R=<,2~OIDJ=[}k({6tOe5%]G^YG2i?pfmOtH[PMek' );
define( 'AUTH_SALT',        'l{sXnf]mj~gD*z+B1lJWQ%vvb)&pDdo.q1T%lg,j[QJWm|vO#v^gbJ/knZp_tf? ' );
define( 'SECURE_AUTH_SALT', 'rrRu(>V_cwr9m@+f2LF[;7.0H.cp!KET{pjB=Z*xbx3RKe#4I^6N).DU<q`ej-&g' );
define( 'LOGGED_IN_SALT',   'k.4;V[V:]mi@G$]8,r^hf/A9Tv.IjzcOr?cKLMl2FSv?q&PO+7^x7(2$#J4M{lP2' );
define( 'NONCE_SALT',       'D+v|9}Qx4RUJsN6{nIRDoie54ZzNBo%V&BC7[J~p1j{^]?vaGVKt$rUqj9[T9H9z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'azr_';

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
