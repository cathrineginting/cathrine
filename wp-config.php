<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'cathrine' );

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
define( 'AUTH_KEY',         '/`WpA 1z;P^iPzLLt|YVnAi6=Kd@9]?`RtG+KJM6 q &%0jF7lii*Psh!JalOo:Q' );
define( 'SECURE_AUTH_KEY',  's_yFKD,W0i[4Iqp`mf!h[D5R%N6^-i&!%Yr*=27!M3}o&<pT,t&jn6ud F-B|g9D' );
define( 'LOGGED_IN_KEY',    '7x@]QFWspRlxE!M_N1U;QyC:ya]u`;yLW{b{vB71|alXrpZ=AvP}sQxZuztdWH6y' );
define( 'NONCE_KEY',        '{x8sDBegT]l!orL5}J6jmk6^ZiKE[kIwFXn2d <?zWzqBDl LO-5^VejH|w-k~3,' );
define( 'AUTH_SALT',        '}#g_-$(PTa_`$Jq.nXe4H?II~FQ]fbVK3qoGl*#M{V#L5#S[qU7]r^Ys~JdeH6:)' );
define( 'SECURE_AUTH_SALT', 'fS4i&)4zlukRQ?TNpP7[%<d&|),x6U<IIb.K^O(M3q%:?B$Q>Sk .3-2]=^@dK7G' );
define( 'LOGGED_IN_SALT',   'q??<t@|[b%W5~37dp5A}HIpKc9Si}5p5K}_hhyy~[LWwftyvL[>zC|B0taf6%,Y#' );
define( 'NONCE_SALT',       ')=c]GFnUH/zH7U+#un4WZ6PM7?^(Y}Q5yt:JE 6j5F{c&>$Ku?{<(w.GcVGv6p|J' );

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
