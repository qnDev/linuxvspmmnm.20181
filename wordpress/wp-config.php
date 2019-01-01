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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Thuongnhodongque1996@');

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
define('AUTH_KEY',         'cy3Cv^{FaK]S5Q~koWs%Tp0K-(H4jM/&% qx!~=4!:T!MWza~|wC/(z[Y^p3|PXk');
define('SECURE_AUTH_KEY',  'gXTm^(*_L=uKL%uVGY`1C6>>~uMqBKnX]|Pc6Nn0pW|sfX:%as>Tc/wL:AP^SY{=');
define('LOGGED_IN_KEY',    'Khs:|x/vKBBM.4st-55!9x(d!#rmy8X38[4+Rz=+gcNFu${P>K@ fJ-=5_LLB5|E');
define('NONCE_KEY',        'bb>Rra|;GKf^8vR1cUFX|BuxlXNwbQ?g`sJ^.rZ(I7TNIWzD|!vPy{zwAV]or8d;');
define('AUTH_SALT',        ')^GA^|:i`;XF<EyXr:&qm&G?J6~F` g`[vm{ sTP:pP3Qk8)!:#Tlt IDo0qq{l]');
define('SECURE_AUTH_SALT', '[7[#u[AK8L(q7ECt+-r3wBk1e%}/26Xo2(pfCgKwz.6AZ=#owI{7ClQ,d~-u4bt+');
define('LOGGED_IN_SALT',   '-U.g37TJ8[#V c`e={o30GL`<*{*^bL{[@O6WiwK#:[[}xxE~s=U1e{UmC)1ssLA');
define('NONCE_SALT',       '%gv#0Gx[4Q.m|#KNdLs.=C6oO[bC#lG?|q5;p}E6=P6apxR*1.<FCT,U.}[)Hwor');

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
