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
define( 'DB_NAME', 'simpl-vintage' );

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
define( 'AUTH_KEY',         '4}{+>yyEe4FgUF@^/Eh*$0j+) e/S]IbvMoDJxv*?j_EDh*s^UMMN^FOlV7@fe]@' );
define( 'SECURE_AUTH_KEY',  '|4h_C[^xwrSFFNy3U:r,BAAK><^Jtfp5Ldly1KphX*NT^MOEda_: WivdU,9~t8Q' );
define( 'LOGGED_IN_KEY',    'k8h*b_+8.m&A&irkouHDFt&l(Zr2qGU)q~BrK2%LSss7)7Q-sjz)]xzW)Dh<Z7#5' );
define( 'NONCE_KEY',        'Su0jTvWTU6)DR8JpM:W!s;xe96h{Z]^V&^Mz (YSy;c3qTR5`yAzv7{(cV4)I*g/' );
define( 'AUTH_SALT',        'j=u3Yr+S$ZUcLWeZ0yJw</g3&E69`EteIg ta.BdDLAK2@H1uqZW,(*/o*L,*:Ih' );
define( 'SECURE_AUTH_SALT', 'vg)[x`=S!V:}*paj[zZ!NaTO9h9sYlq x2jfnO- iiKah2k| QLq^U*{oaB}~CD|' );
define( 'LOGGED_IN_SALT',   '&^e98#9*,q>6gH8L>]uYkvT|>$8bXaSmAEb4eO3R1<B$x~+I[0VcEhd#m_:2iX{[' );
define( 'NONCE_SALT',       'u&I44])IowB,bkk:eT&GYsei+M^H=ubY%OeJ~g>BW<SMkh=1?1zi>3Rq.x;:4e%u' );

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

@ini_set( 'upload_max_filesize' , '500M' );
@ini_set( 'post_max_size', '500M');
@ini_set( 'memory_limit', '500M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
