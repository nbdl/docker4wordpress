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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

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
define('AUTH_KEY',         ',tv:f8S#/qupne|rUy|xyWR7vVs_TlGNZ1ax9c[F`rmS)3iJHz}y<rIo<eSiapA;');
define('SECURE_AUTH_KEY',  'IF2/J}m4o-bQa7t:Eq<+& aA4ZA?(O/MHCdAfnGMt`f_K$tF@6rL8,!(~%f,5q^J');
define('LOGGED_IN_KEY',    'a]^-#y,5RFw7GkUWvT)x2V9THiZJ>*P.nbVjx/T+*7}#hB{5-9zZWBl6yj! %v<s');
define('NONCE_KEY',        'wk+J71oEd|,GEa2L)N{XP}> S,(YlJl2j jQs[+og;J) >N!>0l&wn0<Rv6E5z}x');
define('AUTH_SALT',        '9@_m1gnkQ{)K@X!>oVr!8*Vm_Ij?zFU[zb1>[eRs^7#ReN!s/]0!sK8B^tZE#.0{');
define('SECURE_AUTH_SALT', 'm2*,HWOf=$ikA>sc&a/il~xZZPf09Di8qKA6LM(ANL`BN.` vk0gt8<m%xa=&ljO');
define('LOGGED_IN_SALT',   'bg:O.` sc4PY~135+!bF%=Sl0MTtZ>Z&]ontb6jko_bVP$7i][u{7Vg=VP-`YBo@');
define('NONCE_SALT',       ' [fS/@m2m:#v%7Cj&z1EYy*E]~vk|ihGsQXIymB>mlE*7<`z~p?/MQ@NN`?yBOTq');

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
