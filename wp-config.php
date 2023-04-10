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
define( 'DB_NAME', 'epiz_33963477_woocommerce' );

/** Database username */
define( 'DB_USER', 'epiz_33963477' );

/** Database password */
define( 'DB_PASSWORD', 'jLj5dIy0Ndj68' );

/** Database hostname */
define( 'DB_HOST', '05.epizy.com' );

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
define( 'AUTH_KEY',         'L._T}V[r$~^ ZYAx1^$fn7L3jJo~f[??w&1xd]VP<|r[Ql8#kJToC*@|Z:6&2(KF' );
define( 'SECURE_AUTH_KEY',  '=$2#,?~X*#40E|Oa~9/rtSTa?a] VC>%D&i9T9MNK4N+uOcrVVIT;seD.8qVYAVS' );
define( 'LOGGED_IN_KEY',    '37 3;F9vJd[&;X!xjT/gB7w+z9]*Iw>^,IQFUjl2iv&apO5gP7,q|&%np0.D^.My' );
define( 'NONCE_KEY',        'xf.R/iB@FP<|mM0aLbJ8d-xRr4*+< mxdz$j=xPqa>=ina^{B;sD3ok;(MOlRkcL' );
define( 'AUTH_SALT',        'Fd2rS+0H]&Q)Z%<zb>xObR8 TD:$I.`e+|39OnU/At&:uL4d`iz]c:s8iUj%$|Lj' );
define( 'SECURE_AUTH_SALT', '77xr/(I)<)37sXK:YByse=p ;) NU^]l=6%L6!Q3a4MzCqt6|ek~LrxcSpM{4I*0' );
define( 'LOGGED_IN_SALT',   'MG+4/GfwhL7Gr:K2Ahl(j[2ADU+!7-xM4?Zvq+&I*B._fR:;$[LI]J,x3r&ukD]A' );
define( 'NONCE_SALT',       '?pJ26VOm$oJ46UIOe(c[z(vc[/wc|++m%}<?C;${cYq:pq$egWnFe[xEI?xdI6<`' );

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
