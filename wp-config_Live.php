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
define('DB_NAME', 'goodlife_WP');

/** MySQL database username */
define('DB_USER', 'goodlife_wpuser');

/** MySQL database password */
define('DB_PASSWORD', '2W52%%n!Ol#G');

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
define('AUTH_KEY',         'T6CXp8_$gb};WAF7|*cciH^.W7+&eipJYX%Oe8/-@5~IN!{7-m(+XZ>|pY.>>3TB');
define('SECURE_AUTH_KEY',  ':s {v|!AUIRk&06bxP4!%{)$s8]BPdyT.)X5C80ibNOD}ZxBW,&_w>z^IQ.&vg`:');
define('LOGGED_IN_KEY',    'Z%U|S?4g9c[+KYj3PPW=e4G3_WnA@W4MnQ#lS%/5|Fh$R3XAHCY+63&*Y]WW&xa3');
define('NONCE_KEY',        '~XbI!0K/!>+qWx!<tV9s&Vs-oM`}KUPkL*-F]7[xQ|Y+qmW}-C]KybeQ!KQez=}3');
define('AUTH_SALT',        'uXYHeDaVyMc[7c[/@~)<%Eg[mjAC9!oM7<~)5aK}#;9MK9/)*P#8==T+r(3%}EUw');
define('SECURE_AUTH_SALT', 'aawO$K.do?nalgs.Ibn<G)QwEu[#p[(4pfssle9`GQ.Rr_.Fz+G^bl/Gm-<l-t({');
define('LOGGED_IN_SALT',   'e{2+58F^R`U,+gf)-)&pE~/pJTpvx@^6OHb+a-;+ d6QX~=.M4kV:WCf  q |5Oi');
define('NONCE_SALT',       '>;Nl+J_maRqo>LPSvE=N$I-<qnyHg:+4H2{M4zt1%_!P,]oi7RSpPLy8|iYU<fM;');

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
define('WP_DEBUG', false);

/*Increasing memory allocated to PHP for Timely calender plugin.
* https://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP
*/
define( 'WP_MEMORY_LIMIT', '40M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
