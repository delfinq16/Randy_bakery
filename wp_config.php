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
define( 'DB_NAME', 'r_bakery' );

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
define( 'AUTH_KEY',         'bnZ<|wZ{@4XP*($;#r^!8ebg+`Z CnSY`tm$I`2|4{S74ilc-hO/PsxH@A*4}wj+' );
define( 'SECURE_AUTH_KEY',  '3JxO6]AN[0:n=MSrzSb^(_SVR`;4pa_[UglVPU:aKAnw2,O4:Vh.S[PI_X~G`>./' );
define( 'LOGGED_IN_KEY',    's5C,(rvW.( $oTTRPY[/d/#Plzq1,hzZuyU%-_V2`80Zm ,;M~J7$B0{hNeA)>]K' );
define( 'NONCE_KEY',        'q,`<tbcGPcWNP<4Ck#ItW%QVCX*D<40OmpW78>y3W9r9-8T ccXmcn[O[qV[kn-R' );
define( 'AUTH_SALT',        'G_UO$[f(PX>bta%(RbIf.J-RL|@tu$.V=Jwre^iNJWmgHJ#;y!R3Jo~jL4dL|PJU' );
define( 'SECURE_AUTH_SALT', 'yxbck/Tp=y|Rnu!Sjy9r_2)ar.^20hQh=KRHKLB91% ]7Ur@5O;Gv/liD.j/V0LZ' );
define( 'LOGGED_IN_SALT',   'o-F5l:d(TRN-W$~`_VVfl]2|+OXS5+A6K5B^5BRkJq^0KEpqd7?*F8RybWsXpKRl' );
define( 'NONCE_SALT',       'Op5;]/xA$wcQ]]G>h}g89}Aam`[<_o=Pz_b,DJ_OOO8eWhd50NReJoQwCBl}4Se&' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
