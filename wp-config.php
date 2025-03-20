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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '}GZ0G_ElvE9Ebn*+Utlr2Zf^+^9F&Ev~U-m1wb*tt24q_Lm06p/5F?ywfSZU [Oi' );
define( 'SECURE_AUTH_KEY',  ']P8<=uo92x+6=*lkB*Lp?}k7k*:bS&g/?t*IzBed$N*i_o&=S.H/[[*?T<6(G+*X' );
define( 'LOGGED_IN_KEY',    'U<XoBN`%z1#$c|:+~<HN&mt,5[B ro{&-q*p|dHDONCK<!(M5yt/_^dI,9sJTFn=' );
define( 'NONCE_KEY',        '.vl8}x{,6oE|jQO]Igr?a,-r}ei7N/L4HZ3V@H~e5MB}vt<DpTX*1Oa8qCD|>{Vc' );
define( 'AUTH_SALT',        'bu-=S/5lzpsgy}zIxi8mDH_;Rf<!#R-EFFaXmr@f3z+r)JTe<y7wemF1,/*E[m2Y' );
define( 'SECURE_AUTH_SALT', 'GmK:$_}l Pl{,`PStl9S4Aq!JNgcJ]=QN?P:+s~(dl8>%^.67*.)2=)?B?6lR1(c' );
define( 'LOGGED_IN_SALT',   'aNS% .k%{,jG>cF~W1NrD(`qA|=;t 4X0>(8w.O7q0CV;]L8 ^^3,Ay@.?8Bn}8)' );
define( 'NONCE_SALT',       '!NMZf<Pk%*Kuh/!@#XAF9~@@cXzFJj@E>`W6rk3Aq@]Z3U+N%mVyUR4XUt*s$=Ie' );

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
