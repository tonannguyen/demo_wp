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
define('AUTH_KEY',         '7,N=]7v@Ba8*zgE<Oppa^d-tH,0g_bx3(abQ3%1>WmWO)RcP(%ja,ldcvh&*HVn]');
define('SECURE_AUTH_KEY',  '5#4PyDMC4b1e$rK-=Nhf1[>dV>WI=:N2&r_(eD4IjN)chS~KJ|KtlC+KYq{@W16>');
define('LOGGED_IN_KEY',    ',fVmURu_3w9MD^+kgxH]fm0-)KEQl$y4uYq!zX0R^Tt]vX|qbav,.;&ah5wToj,T');
define('NONCE_KEY',        'NN6Y,kq39P8i^3zGK7P]8d0`&zFq[& 88GA*Y?[DS|Am8(B ~QI`.x*)Yr<<[i[_');
define('AUTH_SALT',        'y8D!y~;u4mS`mkzov?<<EpXB3Q2|:{aVmK1UbKXImG[ !6scKw`dPk,}B)#9Jz:c');
define('SECURE_AUTH_SALT', '7?ypD?>Ju-]CxZ?twy9<UR9T6p+<hH6NuKYPt2m[VEtotv%<:a%D s%@7|*WSCGl');
define('LOGGED_IN_SALT',   'Hg-8c%Zc3YVJigSEC<0)jlkUKHj|+uAFaCG$bobSI5`hH&}8GhdQo]iaZY-m<+a+');
define('NONCE_SALT',       '@2}BQH9HwdzMPzoGXS3Y,7[f;KxM +9;FIVjn]I:.uHC|:ze7#tU_:jmDn+:bQZ4');

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
