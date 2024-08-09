<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'keylong_db' );

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
define( 'AUTH_KEY',         '^cnxG3KXxAvtC~]$[Oro=,$b@k&h{UN.2H3<K.E;1M?sk:BW]F@fS2pj,k-MFJt>' );
define( 'SECURE_AUTH_KEY',  '6!e(aA&JKeeQ9ie@}lkMH5-kIn<6UAHq1e2LM5(T;>rVk#MlGeTyx>{v+Q[4*?S(' );
define( 'LOGGED_IN_KEY',    '5`KzuI1ZLv/B=%ELC`pe$9J6H8s.BSdk-EdUNI3`I,pbA8h_2!kksiZ26^8L78t!' );
define( 'NONCE_KEY',        'n$7!A5B /Z>)DGIn-eVY6fZ.q.}42*?;^G/V!3AD)6MiA=bBZxRC-SAufC2~{}Vc' );
define( 'AUTH_SALT',        '};8&KZW7yK ^%X3d -@!sR,U|a:mK#Y7$Tq5s,bQoboe*9,Gu!M1s=7t@-GK>K<`' );
define( 'SECURE_AUTH_SALT', 'WXwpLfcPbnXA%DkXi|?s|p86Sb=~^Z  1E8KL jphcT2?34~[GMJ3Wi$3 m/DUh{' );
define( 'LOGGED_IN_SALT',   '/V*=k{NaB#DQo9yLU+e55hOCW{W+GS|G>H]@VmQZ7T.tHvp^0EE@LlML0OM!=?`R' );
define( 'NONCE_SALT',       '$0W5upv[$dq%Q/6q=ErLG(<a)iNRSBF^tg,~A[~vigb`PxRJt4Y +>nML`_1XV)o' );

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
