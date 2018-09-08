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
define('DB_NAME', 'atopo_db');

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
define('AUTH_KEY',         '1Z/{ke_P`}Y!{Xo14D)1bM}ZStTry_fuAq7ChBY0=hM&eT)vE~cB`79z@PkHlJ#=');
define('SECURE_AUTH_KEY',  'kvIx@=xAjifXZvIc)nyCY~G+w&V937D^Kbp!$co}[N4?{R=m>;AA&,jP%3FJ  O%');
define('LOGGED_IN_KEY',    'rp j`yaG39y35RP*BVvkV:wi/A[lA2P4%j*$<^XB%JyMQ=de9u;?Wu*w^3r6jL)]');
define('NONCE_KEY',        'F;*D`Mj/5|of)^po0q=:ISoxG+FA?31j3F+4G}R!KOK2*;fOe;p?:kUhM914bPI_');
define('AUTH_SALT',        'c(g[>B?T}sh5>0<W:LZ;&<:GbU7#wbQfsrtvdGoq0<?R.kOYD^EXDvyYBb<D?/hA');
define('SECURE_AUTH_SALT', '=itI&sOTxp4qTY3^P;+Ct%U6V7%m|6Z$OC@M-tP:b;c5]/qzL4=Kzjh`^v{O;(G%');
define('LOGGED_IN_SALT',   '?lzz4>?7Xr<{|n3Qm9AKR|dz!tc27j?Y{(p=s-Ttltp/,o0>q1A@66(-PepssYif');
define('NONCE_SALT',       'l%sAxaw2S/}D}1+;Y~uNhb6*[:~/HR}vLM9](R?kLr@)HUJt3iKj/dsK=S.AJorA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'if_';

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
