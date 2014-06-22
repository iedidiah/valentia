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
define('DB_NAME', 'valentiatherapy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '|EfJr|@Lj+ ,ayiRH86+`EdLqROV-0gK4t<.KBwNJw+c:m0Cr90bhS93VW$wY*W7');
define('SECURE_AUTH_KEY', 'B~EawpUT{&9<kJdReu#<6)!1(|L_vGOuN{: &Sr?QvQ8!Ye&E[vwC4}Df_}h-!LT');
define('LOGGED_IN_KEY', '_~H]a%~udU>}R-j$VlTYA;~6),g~CtA?I]z+%|ye|hYDkAu+cfuDkpYK&6oL/w2~');
define('NONCE_KEY', 'J:L+=xE8()tp2^K*5gz%+pf0%lk/6z<s>C?,El-)vD*`m[Y@)|X`{VH5>@`$o0MG');
define('AUTH_SALT', 'B6jOMK>Uu^{EWv,gcBHb902ntJg@/Ze;%.H!4^5r1@6@1]a**KD`B+$-oH*Ubb%O');
define('SECURE_AUTH_SALT', ']M+>I[I5{R QD269sz96wCdF{O)eFpHUz6.Ktn4B/hVaFyrFW:UTO-]g~K7}={xd');
define('LOGGED_IN_SALT', 'Q?{7f~Q-IIT0KdxLxb< PR<?8-h|v+O s>TRcp%I=)+fX@IHEPa1.iC6JY1HB]&-');
define('NONCE_SALT', 'mxE^ZDBd~9dbv?1+=8~l[z[RC/iypl/}X`l=%_r;Af?&w5klKY$!=nan-rzU52QR');

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
