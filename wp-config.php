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
define('DB_NAME', 'goodlife41717');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|:@tx-5N{C`1Sz+h]49%hC1rt9h|*c<,ABJ~5d.?r4%TG6p#i2V-iBCGy]lNDS+8');
define('SECURE_AUTH_KEY',  'Q|c>(v%Qn54rlk(^wKAw`GWO?ui90{!H&Jt:xPC&4y&$^Q0]r<R9(I>7^3U>%NVi');
define('LOGGED_IN_KEY',    '9dK{Ai+xx_ryx-a.||-H(o(lqXVEo5QnC]2QVA)>eYfPNR[fG&]O:3Eegfx<%M;n');
define('NONCE_KEY',        'a0EwV/m~e7{9n-A.=DkzC:<W3.3/+,@Q;P;,AS@IFKF1ZdPB@MZKm(3Z.n-Elgzt');
define('AUTH_SALT',        '~WVOuBT~R!vm/79KugT6N#mAnK 9>I]):L}@hJ&eD)`~Q^oZ!1{n|S#Am!Rp>F{a');
define('SECURE_AUTH_SALT', '+jYYbh]Fs_nfkR5`@}PJWLtr23[^mQ0xRnO(D_;u5|=SNcgRC8#u3^<2]/~ex}+%');
define('LOGGED_IN_SALT',   '@|}OtSYs;Y*a414lD$=Cf|)&+Hw#>+n5v=}{?$!x+/YYPhHH+oI_q+==J<%b|frw');
define('NONCE_SALT',       '(M> Ars|Awl;Vsq+Cg8+nYcG(H{S%e?IF7egYNcU2=Xy)~;c(Nhnw:h}x,qFu<7X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgl_';

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
