<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'client_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'og4d*gwlA2&gZjaAJlqp-*9b/F[JGhu6q=%Tl4W2VAF3!6Y+Z>R:CZ_M,;xTI+~y' );
define( 'SECURE_AUTH_KEY',  '[PVd@Gb@4<(C%R8]n){0Dd+zOxB{<fyQ2l8uAlL+Hq).qv;&?&+^!.&!8=g=$aY@' );
define( 'LOGGED_IN_KEY',    '2c,c5V>r/&2CHp[bK)5Y]=kbImDB7Q^|4Nv Yz!)hQluw.y0^GS#}!Eiq~m}ryDq' );
define( 'NONCE_KEY',        ']j[Y6><pLV=?52{J,@AsQn/a6G8NpQ/dJ]1Y{3Q`>IE]f<d1BlgQ|9(&Ahqe^qpU' );
define( 'AUTH_SALT',        'R}2%^qbaOKr[Rol9hv0+S~4*N0c^!_EZde-S/O-8[Xn(Uf1`FO|6SA)@(A;|J%bF' );
define( 'SECURE_AUTH_SALT', 'S]p(mTY9YC2L%f]^5semr+NyBjj8F(ja-xB#TWvya+,pI;fuWJwOfM;{gnE@.jjP' );
define( 'LOGGED_IN_SALT',   '))BdJoOGS`*& 7?=jRj;5})#rb0aPQ)$NDVi?TVz[}Bd)nbE@]f!XqA;jCJ1B=^m' );
define( 'NONCE_SALT',       '9U]sRcFl=K|?9_*Q0!1Yt>h>A-91Iq5~o6;!X{,.Z%qJ1w4N_i:>jbyP+E.pn_Y;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
