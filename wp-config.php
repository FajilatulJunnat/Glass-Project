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
define( 'DB_NAME', 'glaziers_wp' );

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
define( 'AUTH_KEY',         's+CCQm`Y `mxtKgzzhbD2Nbm?{#A,AEEs5UY;LT&gLmh-5o `tzr7gM%6Di.YRrr' );
define( 'SECURE_AUTH_KEY',  'Vv=qGc;JxBj;lPdhY&:/TgHJ:w4s)I][fr:d777RS:.Fes<Ba^5bntiGXF=gdy.Z' );
define( 'LOGGED_IN_KEY',    '_7Nt)3K~tl^2>bl,,U)#CS@vBD1S0q>SQ;jiP8* hWr AJ!&I@uR|MN=Ln%d>B7:' );
define( 'NONCE_KEY',        '/!TKd..Na?Amz{71gA0cgO8+|6z9.];1yyw[&g/RAfE}B$c94`I9x/M?Hla%zY4o' );
define( 'AUTH_SALT',        'Eg6|!0QBb,Pf^^<zf ^Q>NYo+&j3DQ@<pO-+hGD7`C8Ja@T=>NBo`KQ-q`(Ed6)b' );
define( 'SECURE_AUTH_SALT', 'eKZ9~m<>s@R.s}XQ$+ ]]$P1MTUQ1z>!}@!0:A/G)#!GN8%t$$@fio;).Y>7qSr(' );
define( 'LOGGED_IN_SALT',   'Th&H/rZKg?#|`K=Y8a*>tv<0j}YFm8BsgMYQwGSpSy=SS0,}hIU:hB/x!] ,=LRv' );
define( 'NONCE_SALT',       'BnV`Nv:kjr$y@Es7<r#vR4V~@rFxy>s8}d,)21rx5({yAxr.l*UTL<Sq&Z-C`W~l' );

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
