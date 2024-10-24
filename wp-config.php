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
define( 'DB_NAME', 'sitio7_db' );

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
define( 'AUTH_KEY',         'B#?tp1B5Q/7[K?t327hnQ-8myXc}W5C{nQf(Pn=?I:2!6jyn[C_+BiG}%ez4@A^7' );
define( 'SECURE_AUTH_KEY',  '/5l]xCdk;Wo!976~UVU~Qsb^$MTKOa~-hOY-Mso y^9=lTy*#AH#aC~>qXwtr_Yl' );
define( 'LOGGED_IN_KEY',    '=YOxBjvTkh>l*)_;~{nxXb()Q}}x[K>jCv,GCQ]tMQ=C.<f4<ZKA8b8>BZ]0V> m' );
define( 'NONCE_KEY',        '$7}&ck@iY*_n%7b.i,EFqZ& ZR&K3exNc7J[6.-Qw-~2s%48{cfm(f&zp>Y-_lR4' );
define( 'AUTH_SALT',        '8sA#RBU@m!I)YH;XN,skeCJRNp4|~sT`g$W}YBX?}8}q!+KTyJqVD@s+m/]-K/xw' );
define( 'SECURE_AUTH_SALT', '}1}sN^@d%6E5}guGOAl7qSTkOmUi`(SW/*9=!E|KYCWx}Kd{ L1CU@@7u`$vG^{?' );
define( 'LOGGED_IN_SALT',   'mu-~gPp*+!:Jn8UP(f.vd-AF,;7X{)}pj(Z[bF{B4liJiozE?C_x5Vs8qyM3S|GY' );
define( 'NONCE_SALT',       '%ZqIH?i@1M-yL<O|y+<Ymq+ 1$CR@*iL>m#?hC{N^1tin**]M*6$:sP{HQeHHz1-' );

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
