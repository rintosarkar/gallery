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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gallery' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'oK#R/g@,3QtP&6jRT{$gPOm,?:W>5IXmt-Q7y;9P!1l|zmT+&7?l2E0Q;;V`@@Z_' );
define( 'SECURE_AUTH_KEY',  'q7*[N:=-}I&wC?rmQJpxfqxC&[ok0Up6@V@2,Oj.]a:;(?t_2&VZm(J^EDWMsC35' );
define( 'LOGGED_IN_KEY',    '`Jw k>Cr|H/N0B1DC/ p>k{(Z2ca%=.]:<sy[]ybZGfJHI/u4<Fg$D$N7@Z[y)$f' );
define( 'NONCE_KEY',        '~_8-TU,TC7,0.q(`42[gvc/ehM%%#9)OsMp=vdxLv&IW:kj2XzaQYG%_485#=o?A' );
define( 'AUTH_SALT',        'MlgF}Sn% cpC}b&X4x#kv2fpAsq+-Fy szk@tgRxRA:ti;6+L#Ioh^?|5C_4GO&e' );
define( 'SECURE_AUTH_SALT', 'De4w?+b!Q!0eGG<HeWG:]f,J1RCH7~)>,tPVj@7l5.{7ktMtR2j)}*K)/]mgL]qr' );
define( 'LOGGED_IN_SALT',   '|=W1oc1s$I.Pd 3tVWj]=XKLJsRM-o:C3%H@!k(~bt ZO31NT3gfx_fs@g.]H[Sj' );
define( 'NONCE_SALT',       'w+|[e=w$,NeiXwS36L&)=a~^sNl8g!}(hh&G0YFEU8^cW*-q`m9=6,GfgfP5IU-w' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
