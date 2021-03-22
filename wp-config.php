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
define( 'DB_NAME', 'hmtif_db' );

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
define( 'AUTH_KEY',         'oWg%R^kzSDf/m{yVhgb[<;Y}@H;8!SHp|@+x8PfQo>sR3=>I`SQ-n.7x;ng{@kg,' );
define( 'SECURE_AUTH_KEY',  '.(quL??vX$} %IVMe#9V.%usd;P6kEPD]eq>KunU$QL=G]!DMWX{]?@6l?u.^rmi' );
define( 'LOGGED_IN_KEY',    'GF?ZH&{n/;[-EVB?+8{lR7M[k?^Wl50hyJP/zX&p2Y0= sLf&kX;Zau:2*)MY?40' );
define( 'NONCE_KEY',        'c5.`>}egi~E`!,s @YBJ}Eh2.t/M{Kk z_QP8(T@`I*qY^!^HUR4=K|Va=im`A&G' );
define( 'AUTH_SALT',        'otie72GX.4];Le381k%/6)7]2]eVG`gq/kYS}ZA_&zRb+Xvp&CVrr0-Dj.8Sx{dK' );
define( 'SECURE_AUTH_SALT', 'j)m^R>A^@bC/ZS(*evJ*Di*AK5z?gV# Nn*?Ts2lLy05NSf7nT!7hQ;vqs!=aLhT' );
define( 'LOGGED_IN_SALT',   '/uCWI@jeV|3|^QXAu_ICY3F-a+Mwzh1kiGPg}kk/js@%OYY%Ro3KG`|w5PLXg~?^' );
define( 'NONCE_SALT',       'zHDhJ@^c#m/u*rE_4%GVQ5p$ER3x]CZ%9Y4y]RD1Sn>|$h_asu/m4B~XWH]yz;sX' );

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
