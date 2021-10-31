<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'akpame' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R<g?OAmGi`z2{G,kIDxnG7r!x=aqLh7@Oq,qjf(R8k eLbgq~hEp7xJp2OH*O?{@' );
define( 'SECURE_AUTH_KEY',  'qO*z7~EMcbh%gEp-NW:$hTdn(!mmhS!|6,FyF)^y_`I}0Pu#b%I/6J#rUYtv?~CP' );
define( 'LOGGED_IN_KEY',    '<l&ON+G(kt4s/@ImGb<um,h{0C#!IhZ4P ~XCXL3k0m$Qwp)+}%EZ6w}?]l&=b2g' );
define( 'NONCE_KEY',        'y>Mi0d8`ydi3wQI <z9E@Sf,Mx+bdB|z<cN*/}fi6C{U9:v^ZJcQJB&K^&|:>+MS' );
define( 'AUTH_SALT',        'U>VvhYO#y>U,j,q.OL~VCdRXgPe.HH~Kv!l)NKFgk.-mgfCwz?_[QixhAod] O/#' );
define( 'SECURE_AUTH_SALT', 'HEs49r_Q^xgQx?t+6j3%3LByk/W+9e4jXqsG<[)k:d42wP/!2md@;}OR:~<*D,g0' );
define( 'LOGGED_IN_SALT',   'ncl5L4*7w0V7st=?<XY5qUr]e~PidH~}#5 ]SQ8:57L%w?e!jiqIIIk|bE-|+5q ' );
define( 'NONCE_SALT',       ']HnvCLpa8{$3/Aa#,ru?]P%%Z D2[qG&HqFHf{X/.dW<:BN(@MZYd~]M!5$Pm*pa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
