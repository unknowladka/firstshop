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
define( 'DB_NAME', 'firstshop_db' );

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
define( 'AUTH_KEY',         'C(sC~wqR~K$~v0f;>s^@~3Po_w`1nv2%?RT(i(WOl@]$.W.nlp+MEKSq96JF]27h' );
define( 'SECURE_AUTH_KEY',  '/I`8T&/IR{|>,kVqY7sF%Yj8ixJDlQndUE/GENsKL[,q&J)i(>rb.M@xqGh+7t|^' );
define( 'LOGGED_IN_KEY',    '4Lim 8F$_Rg%0y~Qb@CzrkA*vKwHzR%sB; %PIhXWT0=j45vvgDRYooRfz/8CzL:' );
define( 'NONCE_KEY',        '4]FjC:ydZYJZ%r6)>WiK$>#Y7jy<m?w;5Ip,E-fs3o#+wuU%~*BoFqaWGv:q44Xf' );
define( 'AUTH_SALT',        '&?2TD#JTQ_ZyS|3FG@#3(d_s97[qtkoFen?zZmpMwH?0l~7|LP;_.(AH06V/]fgT' );
define( 'SECURE_AUTH_SALT', '(j`00$0pfx&16`&bj,wjO]wH;.vMrKtPb5vFE>qCC_lSWgC%]ZKSonI,zP6O!)lZ' );
define( 'LOGGED_IN_SALT',   '<_EXEOkbU~g!A.?)4JGkSH)x@X?G!^+l06w>#S6|0F:f{O*.=N!]2(M4}5yBmLk|' );
define( 'NONCE_SALT',       'g{2>*2mP[=N~{3U>*8(A7Eig`hk`= 0fj[iQ]9+8+IH_uN@!?8H|fFfDYiXpv%*m' );

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
