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
define('AUTH_KEY',         'qps]l~vlpb*TL/y.e?$m~z(<CV4$O^5LePc}[oB?j.j;+E-jxvD4IiE[`M5F>>&E');
define('SECURE_AUTH_KEY',  '^Q<>$)Wp[p}q/|{krAF&Z?<&HwcN 0+b*F~[bg[q?<oTUBVa%a..Ae^&o08OhLGK');
define('LOGGED_IN_KEY',    'H-8sWm=se=:=UNM@<;6w2D$G%X6/kBjojLN^iCrvg,[yC%%lK ePt+qT-^2B%-fZ');
define('NONCE_KEY',        'OU.@Fq3!t;@%ul&$clzAG{MS &qBSp[R^SE/ECwFqxQ8cK7Xxm.vWheQ<Is(cZP,');
define('AUTH_SALT',        '${$NZT.^~6)q]iUo:MOHzqctOT_8-u2jOei5_]tXTfI??Zm3s*cpX4dHXY-4sJ)X');
define('SECURE_AUTH_SALT', 'EI#-j;|cU:i*F]U/5-ckERP|.0X^[J9Qrls42rk s]HL!$a4Y0mMj{3bg-iOKE$w');
define('LOGGED_IN_SALT',   '8P9I:?T-F0SRZ[m4YEaCW9525p-R?Tzum>Bj@avDn+LW9Q f]/CC[icC4?I,R[FT');
define('NONCE_SALT',       'LX8j)WCiV)1}Zq1IOq2.4$wnc)1hho1_h*I7M%A7d3x%fMLv?M>7I=i`~kjmT$K=');

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
