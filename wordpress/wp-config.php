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
define( 'DB_NAME', 'firstsite' );

/** MySQL database username */
define( 'DB_USER', 'saolabram' );

/** MySQL database password */
define( 'DB_PASSWORD', 'IiBtHbgZw6R1nCgX' );

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
define( 'AUTH_KEY',         '6SgL4|60kv{t#u}kX=[JQk8zDfp]|$9P#xMTTK#Lt7^rp9XuDR*D6{S+ry&^U>I-' );
define( 'SECURE_AUTH_KEY',  'o5F@^4bQ]}s:8Fi.1RlkUWsjuT{9NmnO~~]|WKfmk24ndUd G]XF;HSsasiUb9;<' );
define( 'LOGGED_IN_KEY',    'RVD4p)i= ={3Z{km$APa5P/1.8gtmaML-+BHywU/>Bm9*mVo9;qgmV%fodAE{7ie' );
define( 'NONCE_KEY',        'rcXV,Ij@kE}<h`0Tw/ 7&Ex7Vrx<UQ/v4;PKBI!YXTQ{%}9=D*1*IE$p5=<R>(KV' );
define( 'AUTH_SALT',        '[&YDyk ws6g/Sn_yYup#]VZZIjMzP[}x3SvP~WOB|iQ-P!a@xS##<1#6vAv#7<.)' );
define( 'SECURE_AUTH_SALT', 'qLPtP Nu[+:cBLL:q5YwX`J$LF/3hO@yy&haKq/Q[OMa/aL:y&[9cIUZaB20{yo5' );
define( 'LOGGED_IN_SALT',   'Jv31kC7fvb>Kerg:MY$Bdf.`0+rp,;;Wc[*Qwo6b~HF >:ns9K`x?:]z=VY1Q*_X' );
define( 'NONCE_SALT',       'bnvp%&bpYes-5JJXAvju=Q|^x-~8B0Zs`WQ3,Ao7<5!/M8j>H&w:c:|Dm^qmdY_%' );

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
