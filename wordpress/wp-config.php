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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'php');

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
define('AUTH_KEY',         'SnZ+W&`eWit#|h7{xQsm p?aKLvdmw2Q2kq#m2}Hi#]abH9|n%:ojx{fd{d-sL*o');
define('SECURE_AUTH_KEY',  'QpwU$UiJg&ph~hhE[OrWZ#wV-H$e0qCKM]4(4{%s(nossp~HV<)P&Dg}/:::l/rX');
define('LOGGED_IN_KEY',    '^AY=P+z=oX=v=iwj;k)u&<kmxGd5orH~yzGLG>:FYTjIC&K.d}f=%4g2ptj#a >u');
define('NONCE_KEY',        '>I.?O:1>MpeetsC~wpy*|9./_)%F<$}tk=G?>gX~6V 8w!0B)ZV$UOE6tCt_3Z?9');
define('AUTH_SALT',        '@&h2!vaQ3L^pPLAo[q}TS<c+ H),78;321a&MPoo$N@+D!jctOFG-k&RgkZ<{ZBY');
define('SECURE_AUTH_SALT', '>d|la$GIxayx43?kmk7[U$13(Z3(4g 2qbzD7SNUNYrs;..<Ax][$Y#B*[0G.H6W');
define('LOGGED_IN_SALT',   'ja0O7O}S]#r,WZ&w)w3oi>SW&[]w*=W85HSL>ham(_ao%xXY 23#.U</3> sudn/');
define('NONCE_SALT',       '2}z)gU<g XhPHw?IJ#KAeC?4qhE|z`nf?1E $wj$;ZK;<*/:*[l&t1lUAaS`O& @');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
