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
define( 'DB_NAME', 'WooCommerce' );

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
define( 'AUTH_KEY',         '!3kY$J7w[|c[oZqUptdK$??!jn/YDngpr-(iiqo(:$xuu6P|ef3?Vn%#v_JZh5sv' );
define( 'SECURE_AUTH_KEY',  'cW2mq+E2WJdm`2T:[z.d6y!R=c8%v1 q}p$l3A>4g7B7j^L#MN*r($Qhjip)HVP ' );
define( 'LOGGED_IN_KEY',    'LtB|9vNju+>8;#zJ[VP#vb;}O|Tj.&1=FnSCC{B5UIV!($om{EiQ4u~4*:K{z:6t' );
define( 'NONCE_KEY',        'A8Y~0SPBGjfz7t8Un$8M,J@a5WR6qgm{nQ.L`NqZB11$:S%/{XLWtJ?S!@GP<L6K' );
define( 'AUTH_SALT',        'rH,ZgD^^}se<lO1#E83qeIH,*87>*/cPpnSRjN7IuRQ2=mV2k$J-4519.QEnu4*:' );
define( 'SECURE_AUTH_SALT', 'z}Oqcz<jq!:j1aSVC2[sAb?jyK:9X 4{8xbplkpO_X8us,^[RlWAK.x&)k(*2s1c' );
define( 'LOGGED_IN_SALT',   'bW]O]?cSeF:b9X5T_XByZy$H/)tVCn9:@LkRp^%guYYkM=i~ftKU$0VA14_@9bvT' );
define( 'NONCE_SALT',       '&?l{0dRJprze >frxV3YHcQH!fIM-HH}U+EdIOVm< S*dF+E3@7Q>6r^h(of6,av' );

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
