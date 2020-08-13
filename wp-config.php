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
define( 'DB_NAME', 'google-marketing_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         't_3ZfWH;Ti$&kj:f$i$o>4 _@5{!gZp&^TrFDO/A+j}$P];^O(Me9o7$NV(:c3g<' );
define( 'SECURE_AUTH_KEY',  'lrUysxasQ DdWEF=x(O2>D!8%6yd*a$zl:nSp+ZD[6&iNN4feqP_-z9/B2?Uz=az' );
define( 'LOGGED_IN_KEY',    'MymlwAIrycCBy`%O4l R8p`Y3U)8tPJ=G]Hb7M/1DNxinJiS,Q[~PcN,W)51<hm&' );
define( 'NONCE_KEY',        'D-7dR/u5;fwTtx7w6S~J~LG+fVq5l60UeFg_KWPnRH3GhLQTMYMIxv~r&PiwW62*' );
define( 'AUTH_SALT',        '55T?JdC0>EHI]cXL2!_s*)lDr?0Nxg6Gp,jPkR8d7hCBeO |2^rvFg8/W3O*`b]>' );
define( 'SECURE_AUTH_SALT', '_=1mfk[Z9[=Nyh`$Gi2xCY+W]cLkU@E>Auqva-$!^x_i72>6NO`ySFVA//1hj7{v' );
define( 'LOGGED_IN_SALT',   '`&%T]#uI0gTszbT{V1U@7~!yZdSP{TI rn@F+B7,Q0 tVboB zF2;F#jH_#-Q*}a' );
define( 'NONCE_SALT',       '|B$gdlRJAhAv#L*7VDf7HeXphV_IMat5j;O#0YL|[_C&YO1]c4Bx.TxDJqG=3aHv' );

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
