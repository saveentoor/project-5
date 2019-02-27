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
define( 'DB_NAME', 'project-5' );

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
define( 'AUTH_KEY',         '29x[)P[hg!.NK0.Q%HV4Dko1Xy2HsS|< iJ>^<]qITbjKGbF%MlKFpdY4KS7=N.F' );
define( 'SECURE_AUTH_KEY',  'C7B8ad8gLSAL@i]1eQFH;iK/UU^2btAA:~WPz| zTq]V)W~CZTnXX[~5/B:xJiTP' );
define( 'LOGGED_IN_KEY',    '1J~E A0c{9Ub)qB}R)0+PF90FRn[L{/2x(cA4g8wG)F#{4uSuk09Pa>Ec $w!:4,' );
define( 'NONCE_KEY',        'Lb,.]Nu@v+O}Lr`*XSy?kw.thYWdLFr/?/;+G4S}YWZSaoqZk.>.N2YbiH98z--P' );
define( 'AUTH_SALT',        ':e~E{hv[1U`yZU$Q|ViSso&G)E#lJcy[Cy#o5d$)91<9Qr7.B]Sw%;yVQv9>%wO&' );
define( 'SECURE_AUTH_SALT', 'qJHfeXd)%[T[,nkNY#:l6Skvj]!T2}|x11Fx&Pp8]!~T,L[?/].<-[99OyB@wEP}' );
define( 'LOGGED_IN_SALT',   'q#XKSf-3u7ilPbx1!6aGNXPB+:|>OzTatMwluY;M))]q}J[CVx(&?EPP=Wq&!D@/' );
define( 'NONCE_SALT',       '00w~ER<v&].8T= y#ezWqtB{*6un#Q%:4W~r:/*3R}[5YPduiE5Vi9s<6s%v4j>y' );

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
