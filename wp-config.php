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
define('DB_NAME', 'sapo');

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
define('AUTH_KEY',         'Fk/r8]FXfioz0*tr<I?1Se:`n0qiHFet?^)>NqgWZ67Y+dZl[pI1b(9EQ7?+&Gb:');
define('SECURE_AUTH_KEY',  'J-NZdps|C.cu+BE&^~yD}7HI*P(@ZIHM,o_O8Ddk6E2?b=_by(KYjx^zRg+bX1`s');
define('LOGGED_IN_KEY',    'k)UlIL`!zN>gU?+byUrM?n.D70<>jwro+5oJRU{Vcm01XzJIu-6<ZA0Qk7vZR7]5');
define('NONCE_KEY',        '!R}1_d` B&f,J?5pTjihhx=x`m%3Ro 4.1*x1oF=Gz.,+F%Uc1_;-1L2Cv)r|_+o');
define('AUTH_SALT',        '*^;27B;(ZI6T7`;^``gc(D)>k?C)(@p H/0+JB?}e+h!@aq,aD7`jJ^nu0HFMD$t');
define('SECURE_AUTH_SALT', '1]F3{RsrCRD/pg9fFk_`(vg}|3Sz+02:|.9J0YKhT;Rg;H-QtMCSSk_|s!:()&(5');
define('LOGGED_IN_SALT',   ',rh5d;Ulq,R}J~M*o]/j>I^BQ]r^4!pT9-#qyXSit&W<Y?N[c^tl/EbcTk,mxo/5');
define('NONCE_SALT',       'foTGk~G@o(;DJs2x$uFDWD<hIltp.<Id/HQ63nfeTqCzW#hy4p+6YH(D!K^pCWob');

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
