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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stronka' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zMKuJ`(zs-/9( [uo7))xb~v74dtyHmFE*1>}-TNC*7v[iY{O1Yx90qn@UH-Qq[<' );
define( 'SECURE_AUTH_KEY',  '^Y/ gPzgw_|T{7?zjYA/F-BH23[^y6+n4%X3FEQWfm99s@j9IhU:FAy;bVixS*a8' );
define( 'LOGGED_IN_KEY',    'nqvZnw 0rK&Dv&TMez@OHtu}4^Ua]Ork;Y3_T@oA<ZNe5%cPdL^ZOAz+/Rm1BHoY' );
define( 'NONCE_KEY',        'n)LBvz{wDBb}k{@yeru_q|7%V|Y.?+EgIV:x[^?p<kob2_])y(CY=xN,<{c],bEg' );
define( 'AUTH_SALT',        '[&uTvFW,)XIS0cNQU0%bY{ e%c//YIP#L{X$gB>R;O.G8K:8~ ;InzV.;HvYC))X' );
define( 'SECURE_AUTH_SALT', '6=n*g.g,e4b(oJQ@tpq_qA?oc<yoL-7 CL1Edac NDCtnoG3k0UfP2rHWS[DMAyy' );
define( 'LOGGED_IN_SALT',   '+w9*f/28w{bV#:/NQ9NB=40eF1B2[9QZ|yaH#r<d5p5A:W#w%fxG^[-7@N;K3.9u' );
define( 'NONCE_SALT',       '6 gE*[J~kouyDtifsbr#~r(p!M:K7BTd+Nq|qERRqkMFr6N1C-<gr5gp<5H|@9&+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
