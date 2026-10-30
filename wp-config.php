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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u969027961_Zvj2W' );

/** Database username */
define( 'DB_USER', 'u969027961_8rhar' );

/** Database password */
define( 'DB_PASSWORD', 'TOIwKauFjY' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aCeHvBUO1w>TgSn6i=0x&8O|g0&;G0E:r0goB;/w^38`SX72(;iiCBX 5xQyzrA^' );
define( 'SECURE_AUTH_KEY',   '$sJAHwWo+uzl(uH,/46cZvU*dQo``UPD=q;F+?^}D9&i2Wh8EoG TvO-;T#dIY_M' );
define( 'LOGGED_IN_KEY',     'jT-G|3a7zGNy,b`!ViSb zL>Dyk/T0S/z{_fNaj9HkZNwE98[TW(hZ[g4=MtV:le' );
define( 'NONCE_KEY',         '>tKEK.#hS.GSo`s[oxZaz+@hDZHT21J.mh>+<W$.nD DmqUo.`XK+3C#ZyqaO:k/' );
define( 'AUTH_SALT',         'z6NumRMxsQEgexj|8@mI5`>TBTs0ETgO7~Wb}Ixc^,_K-%i&V`Gv97YA9w;t ZO#' );
define( 'SECURE_AUTH_SALT',  'O$2hFQyB eKP+V#({p,laZSC~ui2wbL*|jC_]<fL$.,3(8qPtAFQZ}?kuDQj**g~' );
define( 'LOGGED_IN_SALT',    'lo!F54+Jm|,<m0PIF7#(xI!z0DuF>(X0S||namTA&Kx$^th9q.F^iY>{|5[w3d6w' );
define( 'NONCE_SALT',        'dOr9.brI~M+k8y%K-iK-{%8;7qmB:*hB|Q1Bu$v-):4pK#ddd+ ^`F2ISNQ4w3_f' );
define( 'WP_CACHE_KEY_SALT', '}.8vQL$?v#IPEbKF|eFWZ&3;eVFbIn){bgtvRe{J#S2(x-gZ*-?SHbn5kztrF/zj' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
