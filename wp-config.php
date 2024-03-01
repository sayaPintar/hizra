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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aplikasi_hizra' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'U8ZtFw+|lRFH`5+%[n[?71yJp:uIj[5W:75N{p$~P=X:qI>]uS7#_6(U6Z<Z5]uM' );
define( 'SECURE_AUTH_KEY',  'f,BaRS3A%w92[6:NGzK/phcR@?Kt/2Ig@6>OsY^@;]EMlAm!-Z2JG&%$vhc4E%qT' );
define( 'LOGGED_IN_KEY',    'I6>H{5GcFfn(H{@L:Q-{@^VbBGEKvU[yw~Bk4- _Ek.u8eDG1?0%=9 Q/_N2yG~+' );
define( 'NONCE_KEY',        '1A+)FcQF=8VBp+#7,OJ2 sD{u)xi[ui3/&msy7Ho[OjeU8qZ7C)H}uQ/PGbK!dpi' );
define( 'AUTH_SALT',        '+(|dQW2&{+x4Q_ok%g7dpg:[M8HpU)9bxt7L^7;4aE 0}*>N#gV-NhOt8r2[}.s,' );
define( 'SECURE_AUTH_SALT', '4%2Q6cJ qbe(Ma^}[xkMORBDm>x,lHRf6?@d#dB1}PwV%xdkPj9VMMae%T]bURz[' );
define( 'LOGGED_IN_SALT',   'Z]Rg>~s@/t/V5?1d!L.{ zRmLdeztmyPW`;!_cZM2 (N+NO7?vO{OYOGY^+/5DMD' );
define( 'NONCE_SALT',       ',s>ZfwPdbRa9s27beCV]!G~*1dy$)g{j^w/dz4cyb_5.4:&xphEB} d@yZ1F/>hK' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
