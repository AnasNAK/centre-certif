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
define( 'DB_NAME', 'workshop' );

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
define( 'AUTH_KEY',         '.&m3l/M]ZB_t|$ZwZLBklQ.3>k+] =t+RIuzL^qVz)WGa+d!Bi`Lm4QuKjD6K[?|' );
define( 'SECURE_AUTH_KEY',  'oD71oM)~x16czu+.F@-I$~yJ/ut2@ygOi!5f/?kCv6k4)-8ENCP T7<eH2C[:@e`' );
define( 'LOGGED_IN_KEY',    ':8z=u+dF %lxn:U[[KEdFe0g4%/ptHiMR|b[=bZKbIdEK^AG:aNy.$dX2i5J1t>3' );
define( 'NONCE_KEY',        ';CE+iuq{u`S7@7yr]~^(/N3cF;4wEF$WMmjyO3}^yb` `oZmb>.q9y$987Z+397D' );
define( 'AUTH_SALT',        'og$mwSK>vYu]@:CK}T<H9zv<mfw(z>m>Pa.jsY&v+1-Bu`)83j|AEw|y0sQm;fYO' );
define( 'SECURE_AUTH_SALT', '9JcZ(j3_(#da.a|v!LeGHdaX&>L.$P,5CE;m5hu4Wj>$J_@XphXRO#@#i42zpX).' );
define( 'LOGGED_IN_SALT',   '2Hrh*.Vs2iJRYTL|trL0PWIx#;HX.Bp4eFBvq*D5RxX>ES~}lbYO7(tEco`#me.g' );
define( 'NONCE_SALT',       'yzBXDn+k6f0_p%3D/-Q9uMPL$xTG0ho21`@ZBiv4};J|ny))2^5QqLZs-5NyPM2r' );

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
