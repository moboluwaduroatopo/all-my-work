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
define('DB_NAME', 'ad10atopo');

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
define('AUTH_KEY',         'WP% qx_U!D2L8FY(:R]U|eg&1T%<Y~5hA&jT5!6%s&w)^UwP/o_rh|,3#@m6 <?2');
define('SECURE_AUTH_KEY',  '$LB2BR0i D(:4{MVBylqz{}Oz9R2:}MAM9VWTu.fQ}4BAC#2)Fc45$%o8i<06Bnl');
define('LOGGED_IN_KEY',    'Voxm$&z-MU-f~jo%kQSE q-<tS.1q3!%N-mW5Z,?v80s#dM#@CH>9>~7/E|jA1oA');
define('NONCE_KEY',        '* 0_99X@~rn<w_b[m&8%4oAH52H4l#QOX,bD] nGajC2VaIc|] Q-bI(U.|pgfCs');
define('AUTH_SALT',        'SG& =-S==-fQ@i;p^97.I+whe{L3M^}<T 0C.f|2:~-/K741X6iBA]6HCHuWLk.s');
define('SECURE_AUTH_SALT', '}o}l/8(E=&}3xl3t:}QMv%=-5$ID!m>*@+2X>jmJHK}/7vlunY^UuYmWp`Yo.Oe}');
define('LOGGED_IN_SALT',   'F8RvRuV5NX;3FST9K=k|,hf#MNSZzlAjLS.am!r:|F14YJ/QKhesQ,JeyMB;kjbw');
define('NONCE_SALT',       'n#k+SUZk[OD[FFb>zt i%7 +t#*_BgDe#q~MnuMN)->rChbZiH[IdJQ&?egt&kBS');

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
