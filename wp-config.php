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
define( 'DB_NAME', 'dance' );

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
define( 'AUTH_KEY',         '1SDQ0t-&:;q#xW,Xk*TL[O`CuUV]x[f$4KmxprKuK1>1dEUa_P0|$59YdwT)snU,' );
define( 'SECURE_AUTH_KEY',  '.l2-Pws42pY>&f<~Ug7YhhBieRg$l[AZThn]Wcd2>6c)@oU9cL_T$M>N6MwzQP.H' );
define( 'LOGGED_IN_KEY',    '0j<:;bN_dPI*SJR|8)I~>2j L^_@=0N}Z ;5KGU( MRM_ ^YJ|rSvzV}X~A} Zh6' );
define( 'NONCE_KEY',        '~]JDU/GKiT0Fia~Mk B/JNkx)v3{>fLg&h2y_/{ilOM9<VY#Bb*S>bEZ`MXldS{$' );
define( 'AUTH_SALT',        's*kL3.|.v-0QX,u!!6^gtMHsnK*w(Ls2Pt!kssG,1#.v|mDcSb1#FvY:bxF6ER[-' );
define( 'SECURE_AUTH_SALT', 'QUr])Z1i*KRL/l]!d,lA]+f:LlVNtV*6~c+c?.1)I~8a8~OR:dz[hcc~^d^Ls}Jw' );
define( 'LOGGED_IN_SALT',   '0<^[2?DH(})*TW%j<-SzdKLNEB<0Pb<z^3s7?KJ[7pOheVN46)vEX)g^<Aq!t>*O' );
define( 'NONCE_SALT',       'lJ5c{S^IW~%==3-~Rg&y2~1$]a~IvbWte|K1{p?TkM#1I8nZJ}#g:H5##x}&~&GL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq_';

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
