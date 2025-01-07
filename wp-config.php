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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_sundarip' );

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
define( 'AUTH_KEY',         '#:uY?Fk0bh|,gn=O,ad}ZiX*p:0WH=k5j?2jQ([lQ$fE~WO;:$PF^S303-k(!Ybj' );
define( 'SECURE_AUTH_KEY',  '> sv-m |t:?F4<bl2DnRBu<]H2o$N6WLF1sx5IMLZx+eCy]tz]Ci[3*t 9.Jg,#F' );
define( 'LOGGED_IN_KEY',    'SF;&!Cq3K|ph#W}){_~[+,OrG,7m3KOpYo{oh960D6X.vNP{Jgc-N.<b_FoF)d(6' );
define( 'NONCE_KEY',        'm7TiJ7Z,*9Che93sMe1:7J.av}`+u08-f{P*Umh<9d%qA2u cD[do/d7bMh:C0.M' );
define( 'AUTH_SALT',        'I./f0`$B5i7 0? e^c1WgQsX#wD[101M;V*A1uKQS7,NglA})wT6z>C%TH%J ]fF' );
define( 'SECURE_AUTH_SALT', '!JO+MlctZl@l~rTP,XOC?woG;?4r#:.;a8UdakJm;DM{=VDTo)zfn^sDda.N$o?}' );
define( 'LOGGED_IN_SALT',   '>O7]gTt(0q*[|jBYW(qrf1EvVL;FN_5C,~OpQ{^6N42(v~u]imx9B>y|nm}k_q?&' );
define( 'NONCE_SALT',       'SO0}W;bW zEikeC]nX059^Xvb;sle:-L+#9mHiR*FW2zp~ ? jb?i9Dbe|#7v3ol' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
