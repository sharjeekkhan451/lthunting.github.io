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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mshunting' );

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
define( 'AUTH_KEY',         'jX/h7F?3vZox,C5`>GxEt=z.R,Qr$n5}wHO7:w#Z^AAG@(;[Dw=#i*Gv`ly!xVF ' );
define( 'SECURE_AUTH_KEY',  'wc$_`)yfm81f$LK{fgsDgFB`JBM*Ri68OHH8<8?Y$n#MWUs<wA~?k_noii8@6o;A' );
define( 'LOGGED_IN_KEY',    'uAoX)#i:m`uzRV!P@j[utMo3+St<;?%ouK.3<DCy[Z-]jd%kB$TMM<wf;DOo[S+<' );
define( 'NONCE_KEY',        'j*@y4RthjE.j*e7d8[0UGD%2ihQM!TSA|W$ RxeDi2o[$WB49M2eL~=:5[gGb/r#' );
define( 'AUTH_SALT',        '{{3z+K2A%!zt{I~G!212-*G}_:%(aW>OYI!AcFc*djx@yM,Fhmfe2(ce*( Z|VR,' );
define( 'SECURE_AUTH_SALT', 'emem!wRj!S: 6U+%[X>W#7#Gl36H-Xd!W(n>T[5~zH%hhb<`9h.MNzD1D.&P.%s&' );
define( 'LOGGED_IN_SALT',   '1b=3zG)oe6X6<54 R F^1u>.A ot{@yc?AcAHOw4(Yzi ir/nj_`^XG[Q$6De,:y' );
define( 'NONCE_SALT',       '2foDy4)A7D)d6w^|4PUz+lYq*>o!hX,|egVF?qM=RZ?[HW3s4&TLluW?S#hAP#fk' );

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
