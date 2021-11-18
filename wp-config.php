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
define( 'DB_NAME', 'bookstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'song0501' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~l|%%lRO[*dK[(DBc>S-x]-hzQ#4AB^s4gJ@[lA??:v+Yt<unF(!Zmx>=vkm)~{Q' );
define( 'SECURE_AUTH_KEY',  '`HW}m: %LB6{/{To(9&L,oY%,&U95&F49s`D[:Rf3_R vNrJec>9dDvr6D7r?XN:' );
define( 'LOGGED_IN_KEY',    'qf]F{+>eNL7X}G,S~<rySOa5GD##0c?JojRpKnU|]U`%.r:AU#JFROE`{b*vdo_-' );
define( 'NONCE_KEY',        'WXUEKjM1z1.)G=zT<)vJCF!:w<}{`Tv)NJ}6WjSg^O8ajAL!5q22cs>1qs7$ aK%' );
define( 'AUTH_SALT',        'OYvcGkp IJ~h%uk)U`mH3H{Z1Z<xmA1Qo!LAtkUl(yZ[0;cxE0}oZfXuDY>1l;G`' );
define( 'SECURE_AUTH_SALT', 'T(sE{8oB&D~ctm7TQ&LFG>R5Q0oU4$oG@^?=3#LnnD)66b1_3;&R8b^!kYIyAzOr' );
define( 'LOGGED_IN_SALT',   ';xhf^ZN@bQ}Vg&xGHVN]ilGj&v][>SyUJ9w#HBPN*EU_#*i^!H-av3hS;nwK&BSj' );
define( 'NONCE_SALT',       '+YOFJ4r/wK$pnKnNPlfr`;&#?AH l`i`PL[2[#uY/{.p(se?H]M.ok0%.-(M?p|$' );

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
