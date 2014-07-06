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
define('DB_NAME', 'db534842548');

/** MySQL database username */
define('DB_USER', 'dbo534842548');

/** MySQL database password */
define('DB_PASSWORD', 'pbrAdm1N1472');

/** MySQL hostname */
define('DB_HOST', 'db534842548.db.1and1.com');

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
define('AUTH_KEY',         'GzQ7tgg04*|f6IDMjM(w EfPe~ra]@-&:_O](ZLwo!#nA8MK&zH[0<6o-1D+l[~o');
define('SECURE_AUTH_KEY',  '%7sQ*jYSAJD{eNDc3~a^:Ae9 ]kF:B3hwJH3S;#8?!f5jCW#d)hQM+>&EZ/cR8+z');
define('LOGGED_IN_KEY',    'nCrFu}.eTvg:epLSxA(4:T_`C~ay#g.MnI;44zG>+fN!C vIU8@f,7svcU4o4v5#');
define('NONCE_KEY',        'q59KIp7_O;~JQ!8,wX~[|anH[#6R]:]H&`/YmHqNg~nM-k{JHQ<>vn9u7FRPo+uW');
define('AUTH_SALT',        '@NG:wsl.{=?y]dez8Iehb/)Ox9:g_`+5G(acpOU12o)^<hO$au7#/{}%m*ZqJ wx');
define('SECURE_AUTH_SALT', '~]7N:Zw&F@&wKr9cFbLv3?z+y]~W:>?FXltA+5wj.W/M<l86D86);:a2@m7c0glT');
define('LOGGED_IN_SALT',   'lJ9&gTk9r7WlQIgaDmzr!/[`n|/i6D0oR) ^LH$[ZluHd^xL+TV7<QV-:/Q>J4^7');
define('NONCE_SALT',       '_UuQh#{-z}:SG%gG}Pu2erH&~#qal^Zj#K)vpRWTK9}?rr;YIhm^Z#^:+7+vBMZ|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to Canadian English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * en_CA.mo to wp-content/languages and set WPLANG to 'en_CA' to enable Canadian
 * English language support.
 */
define('WPLANG', 'en_CA');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
