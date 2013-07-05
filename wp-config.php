<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'datamingle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5av~[h8.kyW_tw{pPXG8r3v9+99z,!axC7@rI3aheX;RWIABBQ U@>%Qo 1{cBIt');
define('SECURE_AUTH_KEY',  '|,D U+G%<,=O$-/1$-3y^=1!Vf|f=_(R=Y;2+&FEOh0=$?pR4**)uS~+;v`L6^oz');
define('LOGGED_IN_KEY',    's$_?d}XsXQH&|WT*!P<1H|X~41ND+7K}:W&ad/|)~Az[o0I0%ijjVJR3TXT,^H)q');
define('NONCE_KEY',        'W_|9i*/^6(U(4t,:;p]=F( SJnU2WIPg}|$l@nhBC#2rF)8=iRC>wjjN<A.v+u/-');
define('AUTH_SALT',        'B|- msuqsfFrG-_!DZLjE+^DL|u5WlDW-(`kp1AqEl:[wKW%LC2L<YgM$?xpH7Mn');
define('SECURE_AUTH_SALT', 'K-&Ab^]i5@/-{o7}|c>sz#sCff&|tU@thCESzJ%oT32@:#|1]Wh^d;Of|q]!O96W');
define('LOGGED_IN_SALT',   'Y-~,pcu+[?LyV!ixV[6V@X8lGGw m2@L=y^D7!-+9`?</P&=Hs+H$Vc%uWwM.wuX');
define('NONCE_SALT',       'N/YZ|#_}}P+AZ.a):0=;oK/~fsYX/s}QB3i^; K;f-@+)Y];:&-BR8W?i*|4 }58');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
