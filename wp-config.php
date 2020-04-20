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
define( 'DB_NAME', 'webdesign' );

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
define( 'AUTH_KEY',         '-gY4v~K=rL$#@$Tqn3Y2g=|Wj3ozz!/yr!QqOO1Hcil 7B.IAHrPmK+R{*jem&&J' );
define( 'SECURE_AUTH_KEY',  'Y*h/l2T|ATVC:M$%L&s?;UT&Q#dT[1w:hz1X5@jfQRK~sG0%$G:w$i~u.f7eQy&a' );
define( 'LOGGED_IN_KEY',    '4VGPHDPW,T=6biZ/ ?A| 3C~r|RH;UYc,!iT-pKNa%|X&`gwY7u+,vo2ltAle>tp' );
define( 'NONCE_KEY',        'mlm}#H/:JYp!YHm82=8NceqebfxK{#W[7EC<|Zs FYH_]+!bu_Ik)o$%H~YdGF+o' );
define( 'AUTH_SALT',        'l.gR,_,X82x00 rt1]E<,r_]zn&=sj}DSEvF9S2=1pdZL$G(U(9/-%A{8~XW.)Tr' );
define( 'SECURE_AUTH_SALT', 'D!RnKP8-|?33Wyq$nZYLbKPu;UsMX s~9u9==8/4RJj<~RasI#T/4#TJ;Cy`$RiT' );
define( 'LOGGED_IN_SALT',   ';1>h EJm3*BVKz95OHY8)hak8egy;MDT0>H)z(UWwEye]lEx.~s]oF HZ+X:pR#V' );
define( 'NONCE_SALT',       ')]~N]_U.;{ht6NYN`+]%o %xy_`P6Z=XVQ?m/|YeoO3JG[3M`0,07T+5i{4.|rTn' );

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
