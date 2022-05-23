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
define( 'DB_NAME', 'imm_blog' );

/** MySQL database username */
define( 'DB_USER', 'imm_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'blog@123' );

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
define( 'AUTH_KEY',         'otvoFYNep>9RlqV2uFl2j)4zj>XNd]dBlJ_3^UefZ8t@]`}sP$WOl (QZ_YyfQAJ' );
define( 'SECURE_AUTH_KEY',  ')xi3e/[/9(c,U~r{p1FI#LV/C$Z-dcB[ZGC4FS~4=n5O8z?T>Yykc[$VLW0^!|ds' );
define( 'LOGGED_IN_KEY',    '4v2EtKcx<h0RnWK(EG<qe8_FI&Ea|*m:U?rV=A([s@LB*b6mgfd n6H`}Cd&DR04' );
define( 'NONCE_KEY',        'A #VTU`+4V*sg)CJ_4$iVQ(D<~xBBIbT9s{P]I.Owd[u1l|~]i{H}L+I|B.N=#[a' );
define( 'AUTH_SALT',        'd_~fw:8O E,AtTiI #NKF6Xh?rr da][*zLP|N6SR0,tL l},`}&E#6FR,/[;b>j' );
define( 'SECURE_AUTH_SALT', 'xL@r}yDrtPM8G!U2J{~a4Z1F,D{{>qAVnv]U0gn9xL!vr`nZyg-dP4l)9enIA4=?' );
define( 'LOGGED_IN_SALT',   '^49P&qmy*W:FQL@xKaz!El/63hhlPvCOso08}VX~bN!=jLB#G;m#`g=EYPX-jzbX' );
define( 'NONCE_SALT',       '/eLVF!Mu_m#Ftd4K!mv3q7.K^E5hu]]h#(7y@Nt|}?}uE4bU0=~.DPl~hm8NgZBm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bi_';

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
