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
define( 'DB_NAME', 'mitos.mit.edu' );

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
define( 'AUTH_KEY',         'Hux:p}pcTuPlt_^dT6k<s|fU^le0zfO>U=:3Q>=is8lH-q:x^K&`)+9l))sH0d6+' );
define( 'SECURE_AUTH_KEY',  '%VirP|al?sRBTf]A8x+icK$g2&L*H{ehV*vQ;L E=wo?&KPs$$m%7ScWmro~9>VW' );
define( 'LOGGED_IN_KEY',    'v%f+3>~R yo|D?3lf#zEOPq`wTnUR}%3B1-J9K1A6lVSU`7uiV7_#&;^O(?Pn6t8' );
define( 'NONCE_KEY',        'Yd~(@H(e6W(F&ZxVDN9lJpW/3fA}K}Pg9Qk>!j,{lC=NQY)!niezXBo}DS!xo5Ag' );
define( 'AUTH_SALT',        'JRCdQ3.dB;Mqmq jGcDHI]XY&wdR~m}L&g&[tfbSjL$@kmb:(4Y1`8_T*Zrx3cU$' );
define( 'SECURE_AUTH_SALT', 'mA#T!M?w~9#4T&qFDMgdZe]1Ls4mp(!e~P@v<pZYKRodFa`msro;oLb|3!IV$|Gv' );
define( 'LOGGED_IN_SALT',   'c.]/&f qBEo%^};k);-Ffp6iE[J_%fMI_Y.*z]N?v)s-z]]twC?USOEqt35mETa/' );
define( 'NONCE_SALT',       'D1a>]]~z&Tpo9Cwk*]ep&s6{?S@Z]8H5z!,0Ax6Lq:(>fLCRe$ 6$R3?sUea[-5q' );

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
