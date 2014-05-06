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
//define('DB_NAME', 'woocommerce');
define('DB_NAME', 'wordpress');
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
define('AUTH_KEY',         'r$t|pH:goNHJsb.^dUDD9oy&Ey^I5a(3ok<~/CM6?hG.D^4$@)V7|=]s4 sx_1mM');
define('SECURE_AUTH_KEY',  't2J5_Og<|ZS yB89OpC (JoX;Rd8d@xrIrfF|yp2{{%#gr7e2;-g::I*2wC2@F#?');
define('LOGGED_IN_KEY',    'LhUTl[NL8+OxA?nU6.c2Wq<.9e~G!iTVAmm_F>)wNPpk;L$V-FV}|KTtB$bqh1s0');
define('NONCE_KEY',        'DAwKkvXoC]S|bbDGWx1*BeNh-NofDbqf{vcLP|R#-)HOHy{!E#V(42F+u]wIxN1*');
define('AUTH_SALT',        'c Fs-e|!or[Nb;UBG9|t`WJ@z$o2H1df1Lq7UZb]{5)|ySTyLA!^i1c1i=C+!q+X');
define('SECURE_AUTH_SALT', '?~|st0_:+%CTSrKmYl)dxiT3d%+|z-~RfFBd1J@W46GpTNhpql<~^;|V(!?lTbEG');
define('LOGGED_IN_SALT',   'b~|.K?(-X)nB+*@Mj[)Vc~N >ZZxB]v6$=|f5d0[4Ev~}X83gcU[Q8P-w1bV1~80');
define('NONCE_SALT',       'Js,g8da+;|1=e3]nWh-?EKRt]`Tnc| +k+Rc!RZO?%,%6VzOOrL+KMK}>Cj`%63H');

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
