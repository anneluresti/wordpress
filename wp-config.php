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
define( 'DB_NAME', 'intro-tics' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1c568b39a8b80cbc190bc54fba83627181c8dbca79e8031b' );

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
define( 'AUTH_KEY',         'S1xofE[`x<NR~vo/wJa-tm <fUzFg3s3Ohb5VCGwx.72bSew_[=b[R`6*.3fP!53' );
define( 'SECURE_AUTH_KEY',  'PAIEOW8*T[fSI*M1 -ni@_&-~klTQmRU~rDLGtTe@1A!vTKLgCOv=d0k{Xca!-W8' );
define( 'LOGGED_IN_KEY',    'l9&So7`m/mQU3&>g{X4? T5HE);];J(!I.Q%!ZDTv*9nnDGUs7aG aV%gKm.0tMf' );
define( 'NONCE_KEY',        '^JHeX#)Vg)9p<aI[25?WEY$$x>$}R<dCHWuxp)/!,,)1z7_]gnH!QsKCKilB?p|W' );
define( 'AUTH_SALT',        'PFxH-=.[R1g?cc}G )cj3;Q{[t`sX24/fhJVN[=(jiN|<cbbwQv,S: B)6ZtzRl(' );
define( 'SECURE_AUTH_SALT', '=9[tK@?g;=xZ}pC,(}>y+HAUSDlCf7f|`G0HB,x}rA71^j6%|3[vygm18nG&3(NX' );
define( 'LOGGED_IN_SALT',   '<p 1F5dsTm55]4yONA:$CR*pJD3yLwOo+bN:{-9~?F~G{4rGo+Ms,Wg#c)3#Zz[5' );
define( 'NONCE_SALT',       '>_ka8`M#q$Nj%:iemhu^gVf17Kj4VSWW8Oga*[<]g!8MPa1qiD@U3LsZAdzYrnAl' );

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
