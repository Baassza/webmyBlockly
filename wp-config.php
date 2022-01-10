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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webmyBlockly' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootroot' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'DE}`u`S#m-Q5Nk~POF~?F& .GET]Loki`2ZEb>#r?-`LBl4M_c<l2i;gB;~pQ~t%' );
define( 'SECURE_AUTH_KEY',  '(2P{,[uB!F[>#W@+o3g2Yjh|f8t{tH?+MH_~wt/k)b+L@p,JWa={U_%irqL%Rkqn' );
define( 'LOGGED_IN_KEY',    '&`{~:uM&hk}Ry,VX>G%-JU6RMd9culJb8UcSf^6wx|uCe1!O[{wt}8qrw|}#u#(j' );
define( 'NONCE_KEY',        ' &|}-ZCM&hY U(6qN)lDtfEG~%=#xJ09sZ~KAT;LR;JNuQO5c9~ea{#;y)PAmR>y' );
define( 'AUTH_SALT',        's8=xC+Wk7VQz$tiQ2vlQLlJ>}<w?An[M:^N%[bV._O`{+O%~?Lb.7-8wyCU>R5@:' );
define( 'SECURE_AUTH_SALT', 'Nr1auHsq3u-%&w4gX;eUQ.=_/?Io`uQNhB,1Qx[4_c6}~;|.+`aAT/3ap+.o03|W' );
define( 'LOGGED_IN_SALT',   '8UkljM%lwR,:z6~MzrlE7*T02_Vr1Hsaj+[V;jW+Kri~gXpo|i#DtQ(dYT~nxDv3' );
define( 'NONCE_SALT',       'D&7 Q1_8%b*C!hijn_.Ydz->%X2ECU+OM`@}#}Pw3[0N<2d~|3,%IAiu,*ya.SsG' );

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
