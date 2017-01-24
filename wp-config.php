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
define('DB_NAME', 'wordpress-test');

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
define('AUTH_KEY',         'v3*|AcfPh_?F]G`o]q.&,80De?fZ!.Gm!|nPK!A=4t,Eh&B1YU$.^D$693UGE&b&');
define('SECURE_AUTH_KEY',  'e>9&2&SZsD|A{7)1bEbkx^Sv?]|y^pU;9YNV$^B*)~GG-X/R>-:*~wE1A/!dL#uk');
define('LOGGED_IN_KEY',    'oNi01q>y(f0gS&e(ZwWq/8yyIs#/,J&aU=IkG-/]1,f#1N8kl?f-eQ*ZLtPCk^``');
define('NONCE_KEY',        '&LwG<jc%dWFOJ#tL:0s5G4c^ofUp+rbo}uK1PVFyoa8eaG _|YMgR_MGf%_qZ.Uc');
define('AUTH_SALT',        '_NvaJA?u$5r1RvB.^J%y-;.`wzE199RYn$=PA,7qU+<DBfGl9v$<.CmfJ$FHj(Et');
define('SECURE_AUTH_SALT', 'oa_xT-zal{u9? 9/}Ein-RQ1:,0Urp&%pa]@SQ26+qM4(CGg*l7jrt^E~`{Eao~7');
define('LOGGED_IN_SALT',   '_K(7<pV{3*j*.@2y*hG:N&mxl[56w{yMtuD4~8(iv:5d9u+/-Kgzi$/rmizH+)_[');
define('NONCE_SALT',       '/.Rl4xHk_rJ;|f=fw<-br4uf;^8%Ak|Pp{zl![`]~g>x-M $-xKP%CQF;036v#]!');

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
