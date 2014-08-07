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
define('AUTH_KEY',         'JrG P8KQRWwGy<@=VU a4%.l3Ycd%]|MQAOTq2jr-!=P|;_eE1Dod2#yz+0?1iF^');
define('SECURE_AUTH_KEY',  ')i|/pM-IL)Lpw!VDX/7i6DQqc9I2-q-B8/K@;sWA,|[o})YN|30ixP/g5`ifngWs');
define('LOGGED_IN_KEY',    't+4)ywNlD[ :jG0e;mtq>bFC)d=d;uD=`T C]l6*4*RQg732qcWE,*q(|%y%(JfM');
define('NONCE_KEY',        'i_4)w!DpYe2./JIzzLc8@Utp/gg|I-Sub+~7 I0 [+{6OaJ9=V)[REI~2+~}7XXs');
define('AUTH_SALT',        'gv.(9Ch6gg.OI+~vC5bx1d4_CG` @z2Id7pg/l/64UzpaU6L#LrQO,lG)a2A>)_i');
define('SECURE_AUTH_SALT', '8}wG5,KH>z-zyh&7-z+]04l<[&L!ccPPoj=e7a@E%~G?-zgBsEjP:d{5E<H!b?]|');
define('LOGGED_IN_SALT',   'hV.*$r-&xkUU~eie?GdEg~.5vB-n< V},t+)8:k0|e.w)E{acG-oq}{CfM#?RU=t');
define('NONCE_SALT',       'BYo82E->Q^DzH=zwnjG|Q<+ aD-f%4or9[`J`kf&3*l)~r;Ou<C[tq|$rivh%.0a');

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
