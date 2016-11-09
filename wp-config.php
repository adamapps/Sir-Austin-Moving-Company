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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'N NaP2OCMVV=OBp5=a8oRCwJJ9[U.*TUjgot-2(H=93)_*a%@.TB0py+U[C0ngF~');
define('SECURE_AUTH_KEY',  'UW97(r 8Q6AXg*QPt `;)xykK@u$NZ26(c6$%O>YHiT^:Tc{F<ePv{Z1DD_tX{og');
define('LOGGED_IN_KEY',    'FvzRUo:,=fm7bE1aGJ!*h(6xS)k|nObYhq~CV2L(l$Ik}DaR4B/=_oG~9{#q&|zv');
define('NONCE_KEY',        'cwE*y4qc>EdB;2xQ9lm!0-4~VTwsN*d;Bg]}U}F53tYpPKbU]l|CZ&/B&1U{)f4z');
define('AUTH_SALT',        'JM4kfdgL;k+_fsFz]uBZeK?)G +(aV8DW Naq s-fdr&g:`E*k=#(=>a:b{_q-})');
define('SECURE_AUTH_SALT', 'Upa6`8JK,,]yv0K#hy(y^Z:U4N12Uu)o7B`dBs^mxoc,p+VhlLFbm??p:y{Hk(Dd');
define('LOGGED_IN_SALT',   '6a2K1e^NlQoH@$eC<K#3LyI|W**Y`kh2#Z//m(g$N>sv#k<Q9cK<G>=4-n!Y2)eB');
define('NONCE_SALT',       '}PBsdd`wv+U<2SRUO@E@|v151Jv9p&bI,Q:{? !bL;ScIe]:(1+v^Q@59W1amEXZ');

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
