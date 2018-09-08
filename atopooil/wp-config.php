<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'atopooil_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bDyQmSpW}AXbtOjQ2>oP@VXcU%Kh=<$++v Qh-IEwhSoT.hf8J|K<@uT$FE$okmN');
define('SECURE_AUTH_KEY',  'V~p=Y^MByNZo+K1X;qz+*6Vhxwc7!}`gvo(sLdfx.Xf9-%5aIY^>s52lITO4|5t,');
define('LOGGED_IN_KEY',    '4*i+Inwj`#|k_D}1U2Vie]@hDyWeDc1tf ^1^KK`MbEDOzg%,lHx3q)JRaYs&`fm');
define('NONCE_KEY',        'TE(V3)!oZ~DUU58-Ka`mQvwS1oT2u!Xc!Q%7NV.g{_Rn~a_Gn`nWc*iX#Ceoa~!,');
define('AUTH_SALT',        '{UyRu[@C@+<#DnxF5GU(V}=1`}(fSNo+@wTP>5=7lhC+2jzBVg`ZBoQz10)0l~OT');
define('SECURE_AUTH_SALT', '3.b:mMf+m{2mt1Y?%hpXQQQ^LG/3-1tYH8x?SWO?:E3%qLc#pd,P3gKwjJ<ygL],');
define('LOGGED_IN_SALT',   '8fsdXw<aOaHqS~}Fi[XWjKGCkto+v-~!$6-N zIFBf(5:tOpwUCyE<w, e2d<;B4');
define('NONCE_SALT',       ')JN0K;!5Ne_ZX,%3Rs9]/n7.7wQq8~&nWJjM`Bpf>Y!kGbB],UJ;Whys;96Mg^M9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
