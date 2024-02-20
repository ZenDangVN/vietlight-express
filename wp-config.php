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
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'QirGYJ811X1r8g' );

/** Database username */
define( 'DB_USER', 'QirGYJ811X1r8g' );

/** Database password */
define( 'DB_PASSWORD', 'EW8NdMyYKP55Jy' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'Vh0Bc~($<Z]jmQlMx$HltwE`;FL`iV4 ~3SHqI 3k]PVM(g2Pe5%V3j/[mfb0o>g' );
define( 'SECURE_AUTH_KEY',   '!1vI)taC4)pIfY7nHl4_/e=#Y@e[)dEVaHx4|85B..V^$P[#<v:`xk~s7]Y^@xk7' );
define( 'LOGGED_IN_KEY',     'Ph;gpo-PK|(NLTaU}%UHMF1IeiF|$1-,<@{`@p~T6t9Vy#U11JXG U.3X|cY%ri-' );
define( 'NONCE_KEY',         '?+Qygpr}E`?Vk:LsP+82U_775P/3L%1Q nJ_I*gROU5l{LqyJ[<jH)-@>5e}F}(E' );
define( 'AUTH_SALT',         '+.6Qx-k4};<H#NUzex3BS<I):tOh.RY`yY`IP]#TRor~CQmnBW;&Di/0#:]C`096' );
define( 'SECURE_AUTH_SALT',  ',>m(I0$$AX]bBN[HR03c4jeF[rgJx*3379H^cd1fkk|2AG>W@Q$0b!YK^P>OBk8`' );
define( 'LOGGED_IN_SALT',    'ry73C+E3y<w~RRc@5Q]ba4,|eMN] 1GkdD`dKNQ!49<::rH a|Kae(2DBb?YuEq{' );
define( 'NONCE_SALT',        'q<}LI@rH0C!cn?n/F9DQY;_haB<&[E%gHkTQbgGbDEl8K!Ppf%e+&ngB.&Ag0YL>' );
define( 'WP_CACHE_KEY_SALT', '.V+Cj4g5*RC=-&?w{7<o.a *rMM2I;B|O7YE%t>`ONz~eg}33sul1kY]Ot<;u~&w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

if ( ! defined( 'SECURE_AUTH_COOKIE' ) ) {
  define( 'SECURE_AUTH_COOKIE', 'wordpress_sec_' . 1 );
}

define('WPCF7_LOAD_JS', false);

define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'vietlight.washinengine.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
