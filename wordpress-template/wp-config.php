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
define( 'DB_NAME', 'centre-certif' );

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
define( 'AUTH_KEY',         'ZTQkUGX^C}mWuq.H)1--1W]Q52ebQm<Y^,/FV]WD.8i,N-_2zAW#*BC1#qYFWBe)' );
define( 'SECURE_AUTH_KEY',  'Heh{}vHh$QI3#/]gH}`E.|K{D7?HagsC*b`GOx)NZJ+o1irI6g;sncIZg,| 1bzE' );
define( 'LOGGED_IN_KEY',    '_SS83Ib&_J<m#O{#by#U+^805bHW562EDU,ydQlHs9|<KX./+h~PUK,m4[ndq7|#' );
define( 'NONCE_KEY',        '.wXi3YQ`%@6Dw2j4HBW#:!DmF#hcL&WwS6t_^sq!3t&L5Y!&V,]dF}V^j+T=kA#^' );
define( 'AUTH_SALT',        'e]%=b8%Z53:7<g?=s#f=&{7Gl?1PbJ!,7kyycbf};`Fu6rzw7!MR3oJJeXAB=Kd|' );
define( 'SECURE_AUTH_SALT', '8+C;&D%{3U[yQju}.qHcET_FH9j9T;{y#EAZ>f)Q:_bn8`Ou{WY:0xM3W&;gy+a>' );
define( 'LOGGED_IN_SALT',   'smt7tPIsT*1{_TM. OAv+&WmJ60kfC5^gLq?NHV$Vl0! Ejm5;Rza>RGUONDIB-$' );
define( 'NONCE_SALT',       'SS8!73FGp!R9lulCG(y#Sf5{O]6Cy9K+04osr>Rzw3?l}S 2vDM/:P_tgeSIQxGY' );

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
