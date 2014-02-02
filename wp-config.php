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
define('AUTH_KEY',         'ob)K ]-`^XX/3#>+|QwuZ}*qUd[.ywL!eZ]Tz])#&?;ihR+0o<|ISF{6gGk5qU9Y');
define('SECURE_AUTH_KEY',  'HiRXm5u^iU;s}g8-XraTiAEBTPw*i}-uKF:hcot;17!z40y>G-O(ydH1$~Q?P+Me');
define('LOGGED_IN_KEY',    'j4GhCsKUFh^IMEgSD..oO!OX8[Dl|kh+jMm#W4Yw19ex,jM3]J@.IbY?JJ@@Xj|j');
define('NONCE_KEY',        '?6oKZ|nv57$ls2X&$u!6.~7>8 XWkw2#?)0P;pmJ%:kjp.|qG5sM.L2)^i>D1p$R');
define('AUTH_SALT',        ';c0}+1R+C*|LQscV|sz M`Isa@u&G<?6m3X{uvm>nV}CQL+;^O%+1au8@S8@i/>y');
define('SECURE_AUTH_SALT', 'q#WSW!2(]c++4`yJ+G|:7)?M{V1HUjb-m#z]b/;z9eur`b[&e@RP$=q%^V{*y2+-');
define('LOGGED_IN_SALT',   '!:OH&]T-cjdDJ16.*|I3cT_rg.~@gN`9)*E]/Xvw[B+|WtSnB;L%lEMhtw;|[+W[');
define('NONCE_SALT',       '@$dRALGl|akR.2~sS)jEzt=%.,(%ZX@/yy:nP>~<>I?oR5yn,%m+kmpvwrtlvww:');

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
