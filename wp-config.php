<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'justine' );

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
define( 'AUTH_KEY',         'Hj1IeDBLj@RDBze=Tajs-+meLu+h8N&B~<[s0W)b_x?D7LkHWiPwS`AV~lAb)Dff' );
define( 'SECURE_AUTH_KEY',  '^9<1ywm/>X=.&!}Kq)f?~Iw4ipV&oa|;&87A$hYCc,iN. lau)/tI4s=JDN8q()^' );
define( 'LOGGED_IN_KEY',    'ib>dMW7kH)g m*n{x=g1Qdj4cjW<c6),-Bx_YNQ4wKjUF=tFCS6X;/zhXO`8/`.Z' );
define( 'NONCE_KEY',        'O;_3P5Goz^fa?JPVi`v/vO~>bMNe--i(uX^n8uOc9;5friIEBBFB$A2HsJkh.Lq/' );
define( 'AUTH_SALT',        'D_fQnTJQ6X~~%cH!Q4ymW<[}$$O9&K+^KYgpL`k?f%8J x:<sK}Na 7w||R9}N)C' );
define( 'SECURE_AUTH_SALT', 'G+5[MGgs^tB^I^-|CfwQq>.Cj!lLV@mF%NKcO-W # E!eRk0g{UGiuhIpn|x[Yq@' );
define( 'LOGGED_IN_SALT',   '#/3Ic .k!0T;$Z}+@RPB-mAh!Gp%lG=O3d:#XFMh>f</>_u8*V|JrB){JQ^,uBfB' );
define( 'NONCE_SALT',       'y-UzeJY~P(waxXQi=%!3@G*R;@#S{$|ufh#JPkbMT]7g:{zg{enp>Q_ J|B^D>`H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
