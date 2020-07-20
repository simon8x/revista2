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
define('DB_NAME', 'cronicasdb'); // a@X5dR%ID#ho%!V6pK  user_system

/** MySQL database username */
define('DB_USER', 'ser_user');

/** MySQL database password */
define('DB_PASSWORD', 's7lsp556OGH0');

/** MySQL hostname */
define('DB_HOST', '190.228.29.63');

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
define('AUTH_KEY',         '?lVaT}v.= z<|X1RC-`tEw5oUP2A|j.R.WWSk0[EG^.OJM-<1$R,{9cLTsNe)]ae');
define('SECURE_AUTH_KEY',  '+QOdmO8zhNONqci9+N>j|{-Df1}x}^CHc-Q-Q}j3%,qG||L_+Wy;ccN~t>:w@c6,');
define('LOGGED_IN_KEY',    'yLbXE!Ty!UJcR1e-gyul/a5,A<]-]zPFIe:J;Le3X%21BE%y=$3|JL!j#@~~j@@i');
define('NONCE_KEY',        'zqd*JA)Og,V&y ^P-AF{3kZ4^RFjUE!ds)$GPdJTCPmCZ >679D_r-b9YUbqK3c ');
define('AUTH_SALT',        '80+j.8E (mFI^jSq9oP 9 x3U}>)9|W#6a4+;ok>f3ok&D2W=,bdx8$tY--vJux{');
define('SECURE_AUTH_SALT', 'LIDG,6FW%Ls.@wl5jqRZIt 7r7S;+6H3MFR9/sL,HTZ&J;H7H-04SJ(#`u98cF3c');
define('LOGGED_IN_SALT',   'p#<M3s+$tTB5e-QC.f+v$A,zd0|V7*[(1+0QjT=I}7Hw,!y`eO+un?z2L/r*ZC_{');
define('NONCE_SALT',       '*ZKYT6_%m3/y%Q+Ug`F5g+5M3pN(iMA<_^B]BZ0Bd`!4Pf_UDT-|mL&PjQ1|PgzW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cdnkd3i3nsi393tdj_';

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
