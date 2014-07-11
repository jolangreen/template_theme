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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'jolan_testing');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'jolan_testing');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '=1sDa0z4$Lvp');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GYLG9RL!QUeDZDTKLbBwn9`%]:8&%8}C_/$%hamk$r&A}=t$dxap@WS4$&D5EJ)i');
define('SECURE_AUTH_KEY',  '_z6~dLJO)q=O|CUVEOxc-logDOuw~A||0G`U>XGG-cljHy|=so`>C!m~!M1Qp+0Y');
define('LOGGED_IN_KEY',    ')mq}f=x|3~dY_JpYd1-xl=u`($NaSn9.%T-&;`ZN`H@|XHPWU0?d_3ME hO|Y:[i');
define('NONCE_KEY',        '_+>-9XpRD#},I7u&AiLsq#!k:pX]R6.5cYUox<?|V|C)NlQjM5C x-7IkdU+ >1L');
define('AUTH_SALT',        'G7}bqEyZ/o[zRm7v]s:*5{l>[rf-Jbz$x<wxfb3}uvt=;IO.][v`4@pu9z;@,Q_P');
define('SECURE_AUTH_SALT', '!{-NtFy+8QJHt5/H)E43#?e>Q6v$+@z +p0QKRZT!u2>c?Qf-8@#2(ycj+Hr>hEM');
define('LOGGED_IN_SALT',   ':bSA:i1e+@<IQ<b-:x;g8#4uiE-H<6]{ZloD[)|G+55eg<);}.k}aHKh:|cw2~i(');
define('NONCE_SALT',       'yl:ja`J2+ 2]T>2I _zJV` @LB.W,$9-|};*K$;< ^,;!)nwf8mwd4yv@C^vmZn&');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
