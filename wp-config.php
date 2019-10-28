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
define( 'AUTH_KEY',         '}-uA=DcC+xZ+Dr/%gq0grH+VUv2<hN/d26ymbXnBYe,Huj><hcD)A|n78z17qjV3' );
define( 'SECURE_AUTH_KEY',  'n7e]v:L.gEde]4Z^m3LcsbMni/v?llvlNgOP/u1ZGyjKF*D?]5;7{8fGuV|qeRFe' );
define( 'LOGGED_IN_KEY',    '04i)kj #Wk+1CWP,]Jn$af$|GBpa7OQq^m0=<V7G{Gy;(iL;f:3^&Z=F/p7z;%6I' );
define( 'NONCE_KEY',        'QIXG36,U`:k9p?wrY(j;tI/ubD)94(+X|P;*O3&hhf^3He9?y$!b~87}=&yTp1<$' );
define( 'AUTH_SALT',        'k;q39D#;ItFvJn]ey+?c>zjR*Mld>m,P19B L0/:jz>CL8TZ88*b]uPa17t[F|n2' );
define( 'SECURE_AUTH_SALT', ':m]4Wc/kg%0Kj%mG=BmK}gT&C3n#=k?%*/~p05)VvF9Ga&OYFMH3j@Hkm})-T}6,' );
define( 'LOGGED_IN_SALT',   '<ocvELYGsM/=@%anL`-NF_pNRVM! W#1#ccyXE$,F5tzJAUHN(gJpK_*[N9,3u9q' );
define( 'NONCE_SALT',       'qc@Z3!qe>~MB/JWeB=o1_ bQ{m(IvU&)&4@jTI5ImeO01iITH:t6qAOYdswO<IiN' );

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
