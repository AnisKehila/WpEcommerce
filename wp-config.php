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
define( 'DB_NAME', 'rebuta' );

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
define( 'AUTH_KEY',         '*+KmB+Uac^K2w<A8$<h+D%S9>5liCGLou/)a;Mj[vaAiwA[Td1fDr[7Va$ueibRE' );
define( 'SECURE_AUTH_KEY',  'p6&<day 3SQ>Ih]uQ -0J7ip4!WLGLB.;Tsl`M*59{t&rP5Si`{pmMdW*^mn7d}=' );
define( 'LOGGED_IN_KEY',    'ogGZ=$ZW_t6DiZPNuWe*qS$x)MG!~>O5^MxWnr@zjYK4DrS@sB6l?s(?y#ze[cJ8' );
define( 'NONCE_KEY',        'Jy!_W[)ws|CqQ~|lYu3pw2aP8/-%lE}x]w5|qwGvNbn{~ptKee#HB>9p.)}*osgf' );
define( 'AUTH_SALT',        '@lDG6I/v`(Smt.iy#i?ken5u=37_qOm?dHdbl/IL?O`M_* Ys=(Fk2 eUYt!nz9%' );
define( 'SECURE_AUTH_SALT', 'aJN#A56;qfX=wi<:l%,vrpI(<kgFj-rH2D93OKv~2,&q@/x&4:KpE9o5K+R)pF!)' );
define( 'LOGGED_IN_SALT',   'uODpI,6];9>1Nf^>rhF$M3[0Q^0&p]7H;VM<jHX6^e1SBW61?2&]HGvhN}/f$UA<' );
define( 'NONCE_SALT',       'QJ!-_gVBEJ Le/%x9TlJ%A,6B&(m(Wi{r9!#Gmx7@!P%2_I&&`c5w^+H]HWbd<^N' );

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

define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
