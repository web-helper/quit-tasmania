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
define( 'DB_NAME', 'quit_wpdb' );

/** MySQL database username */
define( 'DB_USER', 'quit_wpusr' );

/** MySQL database password */
define( 'DB_PASSWORD', '{n~sew%GrN&F' );

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
define( 'AUTH_KEY',         '}*>BzyoD}4k2z+$HPXz!1=bG3 zq4ika<r{E?yJN>O`J%F^*@[y0x9o7ea[8_xb=' );
define( 'SECURE_AUTH_KEY',  '-#8z6C(6:3x$H0:E:a*Ncx2@=a 3y]rmdGls?-592_:H3[twspR?r[q~Ti9wI_48' );
define( 'LOGGED_IN_KEY',    '=dt=Lzq]td VW3vW|7GhX(5v=WHYfZ)gMEOAN{p`MWv9c!1Qh<+/Ye=e=$Izx8yt' );
define( 'NONCE_KEY',        '^YU!yW57tOLx>P#T`~E/w7#SU<1`mu46LNE{ryywJj4yw:WHfrEY@3c,e+3e91uR' );
define( 'AUTH_SALT',        'ISICGElP32BcJH`_7rE (=T.$RCijbJc#S}&X^+9B9RMS>An-g$[4yAZ^;9t)<>4' );
define( 'SECURE_AUTH_SALT', 'E>34+Bq)h{*1Y3oe9dpK`krt}G@?CEw)v# Trs U5e` uv8wEku-WONlZQ%2LF=}' );
define( 'LOGGED_IN_SALT',   ':tz:.~yrrCWa@r^!7qT?C(Ky 3<j8]n{@Tjr`0`T@)TR7nSl-8LmCN:lcl*sK|Eg' );
define( 'NONCE_SALT',       '`pZ#9_F9RH%-]Q^_Di;=@cmb_?hb0tfuvaZO6uHzRxB0#5mER=cq9R!<9~]QsFG!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qt_';

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
