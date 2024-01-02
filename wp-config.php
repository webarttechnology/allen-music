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
define( 'DB_NAME', 'allen-music' );

/** Database username */
// define( 'DB_USER', 'webbersunited_allenmusic' );
// define( 'DB_USER', 'u781078481_allenmusic' );
define( 'DB_USER', 'root' );


/** Database password */
// define( 'DB_PASSWORD', 'V=5_!m&e-$9E' );
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
define( 'AUTH_KEY',         'yb8]XzYU5ni>)S&rZK(>zMFwr{h.{e!($6!.NR$<3L )]c!loCY3Rl=.8JbCSG&>' );
define( 'SECURE_AUTH_KEY',  '~RUkD pQ<Fau6^6~uCQ.,C=wD}0rv1><nsn)$L[Lkesx}C)W=/I_=wC<P{k;vQ`o' );
define( 'LOGGED_IN_KEY',    '-^@]&38+f;PC5!gidXfx-OI;W}S|Y]e~8[jalLi/V..htn>/.ra@-:.-A<O88Hoh' );
define( 'NONCE_KEY',        '|#^N>3@PQAvE[qeyzLz#3AB])sMAQL=ND%E9;:U4ia=LCTAW^;a2yUEf?>K&x<4>' );
define( 'AUTH_SALT',        'o!>S/NVcgcb^4WxUK~$<o5]smM%8,5?QSspkIO1*eZ+=~u}j_@WvGn?gc5*R T?j' );
define( 'SECURE_AUTH_SALT', ']|*%viY^w%+E#H_Jv=zP1%k#>D40hj}sxs#9c>j*TWu9w`1OLhB2TFwzlfd-k76+' );
define( 'LOGGED_IN_SALT',   'Ss;nQED/^uG1;%BD00Vf-`flj<CUHuicM&xaTFSzz}Dx.F5H/=1=Yey?<6yb6&Z<' );
define( 'NONCE_SALT',       ']%#KOw93k`RG8^~jtH=n0B3#]@p9Cw!sXmf`H%B2Riv|s-lkukvmu&<$A1#*^.yk' );

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
