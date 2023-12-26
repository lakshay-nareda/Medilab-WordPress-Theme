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
define( 'DB_NAME', 'medilab' );

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
define( 'AUTH_KEY',         '9wm<*b 5<b8(8o4,9Co}4.bmf9|%&8{7SV$4<m8+b9D2Jzjp%&hmVDfqnJx#BTk<' );
define( 'SECURE_AUTH_KEY',  'JH.4#l*B./[C~GCNT4c5wjdzMDiY@n<D[TXy9xlsq7VnN{|7L|j!9A18<*Rmuaba' );
define( 'LOGGED_IN_KEY',    '!HANY(2;)*;@31PPd?d{-Y9%Set<Lul`<`T~UNz{qs$)Ua{`C(zEz* +20jS:KBq' );
define( 'NONCE_KEY',        '-@TS,jc,oXTQi%Uj&yfgvZ<`hHf(we/R(cWm`wWH:FU`R32)9Aj_XO;Ve&~p]uv3' );
define( 'AUTH_SALT',        'T?pnf0V~{7J_C.HS ITu?Z7.3;K_tS]W$M6bkgA_En-Ri>(!%GXR<@M}PtGiQ%f@' );
define( 'SECURE_AUTH_SALT', '83k%C;u}uhTW$uV5]w11vJTn%Bzrn#WPe*){9p+A_?;c~q*s9DH2/`|HVJlAG{y1' );
define( 'LOGGED_IN_SALT',   'CKT-8v(dr_5yKM$^pW79@S{r7=O<.M^[%JLL>L(_F3y~SwJhuLLgN.YtsIkFz+;w' );
define( 'NONCE_SALT',       'JD{D*r>j>i ~j*gPeG!lnj1U^2m3o%ModL/s_X.l4NQw~2[Js5-4VX88<XSaH<;[' );

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
