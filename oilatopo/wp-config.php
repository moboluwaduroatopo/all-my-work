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
define('DB_NAME', 'atopostore_db');

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
define('AUTH_KEY',         ']Hpn]4hswc(ef@JiZW9=|Zr~qg=:=Qg(yk=9qJg|~YvbZ_0zJ&eHX$Kd~x3,KB[R');
define('SECURE_AUTH_KEY',  'R}!yQiIe*)f7YCzFwr*#G.JdRZ_TCTAmM^K>EPbGCM7bsd6L]Q^/v2s)U>_dC;kU');
define('LOGGED_IN_KEY',    'iH6$*8e0bEj0W:ikSlC0h7&{DwtEU6sl_(5MRM3kv;sv~?#=#c-$fP!r`#R&P26R');
define('NONCE_KEY',        'iO3~L?z+Kvo2Aa0.L#bUHC#gR:C}`$Bw&r{dM)D2na|S>nc#{|Z3c$p0rbHlw%ww');
define('AUTH_SALT',        'OH:?K0k8NV2|p ]Fyn!MHpyq9ML,XQIH:9 2]hfS?vo6gD?kK0s$7bzRUno>$O[S');
define('SECURE_AUTH_SALT', 'y#gx/<dV[H:ds=0=M9-<|5d/qipR@PGGAky*%A]{|]$q:^W(>O7SGjcC*bI?+HIa');
define('LOGGED_IN_SALT',   '}w2Ym|h:*n:xee&j/K~W;ak4N/jAuRctbx,Lusdqt{@akjT>[8QNsdnvSWPua/?)');
define('NONCE_SALT',       '6@hae}STT(U8 t0+J5n5DGAQC.O<THfJ8GH{ED^-B6|?la2@)#Qsz!lI_np?^O:Q');

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
