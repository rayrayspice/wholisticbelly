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
define('DB_NAME', 'wholisticbelly');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'M5e<enN`OY_LPBzX.dV_T$;tvMFs1.[$TuUn`S3)@Q}%~9&dn`Bf1BI|{0&z9/R4');
define('SECURE_AUTH_KEY',  'W$Z.5S?QfFc`v&.{Wk&M*~X1(vbNv9@yTNY;$r(:Y76dv]VBGG@q;jImMzzaoVO|');
define('LOGGED_IN_KEY',    '6vGou9mF)(ac5x!]}Dzoz<H>6&0z_$.*/}+^Z9TXtB<1wkMwAC%=d?($f_AS[uS8');
define('NONCE_KEY',        'JCKf-Zc|z2`B1zCSRpj:SUAz!PQN^G@toWN!rZ6#guv)O+q_wN n66#Pm>TlvsFr');
define('AUTH_SALT',        '>b1Q,r<=>!]_O%:ZHe:ja*EBFEbMvVj,.(y:wvG+tuW<n,]=:hzlSh!qztj#/Jqo');
define('SECURE_AUTH_SALT', 'sD>XWV=hu;3O(O&i5E>h/)%QMI~6&5c`h(0< ?o:`7%juFk<<.?IOS6Sb0)q:C^V');
define('LOGGED_IN_SALT',   '{Y+Nqwm);WJ9TPA/g0-i=OyY!D]-ED;A&0%-naW0R;o,od}e~!_0m./5:M=W-lmo');
define('NONCE_SALT',       'qL[]??&`d/zNvAxKqRU0Rw6HcFcma#x,KolDyH*{3YGe{N*o)=^<)QD>;cPOIR/7');

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
