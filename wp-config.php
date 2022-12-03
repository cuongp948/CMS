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
define( 'AUTH_KEY',         'dLf`uq0(1)~96=TdfiTH1Ra_;+1xXi6~1lJt6HIZL~C>pIrj8.?,7YV]fjC dP+b' );
define( 'SECURE_AUTH_KEY',  'k7$<Z$6N7{-9s}v>LT{vZH^- U(6F>`V]U.L.Wz|N@z62yQm(|DXm<@?[ep!j26B' );
define( 'LOGGED_IN_KEY',    ']#M]dS#/9B$xXRMpCg,3PDQE+jr;piAAaVyjTW0(-66o[(2H!cEcJZ>>jn}wY<ac' );
define( 'NONCE_KEY',        'ZU.h#mnR]r)XC: Oa<}BKw><FxOG},VFrIl,tA*A(0EL9WXg&;L3+<t|*^BNofJ?' );
define( 'AUTH_SALT',        's-^DNfGFIDI(~cvjo5VN8b(T9fz(C%l^s-Z5e6q2)H_WzM61Vq}gT#{(KdXaR_L]' );
define( 'SECURE_AUTH_SALT', 'MSL2Td,ueZ]0)Zf:^B?L-T=A)L,%#igm`L=%Xu/~.gHp<4X?Fo]5?./_9m-E-_{^' );
define( 'LOGGED_IN_SALT',   '8`/WCbSDel@r)u-qU WqKmJOIq<>&PCpn|Bubwd^,3om~t})PFEzCp%=cmw}g,lK' );
define( 'NONCE_SALT',       'O? *3a}hQGxeQ esJZ{az2$N~6G{ #XEeo+VeLZaQRFB~U^xq&jrZ]3eO0G}:R(4' );

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
