<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'abacagenomehub' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

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
define('AUTH_KEY',         '=l}Co(Qt-@]+&X/)5&v>ITx9[jAXIg?//X=!6Mh]0mz6Llh!hM;xxVqm/cNQw{_>');
define('SECURE_AUTH_KEY',  'ECZ@-@g&-Xa|uX|pZ>L!WS!kRq^o}[V*u&dC r*S--fR02|(#N)yZw_|@AD81 [,');
define('LOGGED_IN_KEY',    ')|+M(B|Ph`n<=Pn!@l.7Uc+yDa>)7#qxcdkG;yo6q+2TTDbFgu$QPv*>dro/ND>}');
define('NONCE_KEY',        '8tu-6p4J<(1+RpHP T!sS/hO>)u`oh<F_X`TQls-c5C)tsV%>%cO:Kg9|:9/Y.:1');
define('AUTH_SALT',        '0 .-)z>lPhbafC`JP|D<2q5yo-`h@)+ZgLh(,jGZq0IGjZF4DlfNCJKQTv2ObtcJ');
define('SECURE_AUTH_SALT', '@w^hD2w{>To]D:n;6{>P-y:kw=TAi5UH9,!GrLy+xzQKAx2m=]y*(UsN%1Bk0y/b');
define('LOGGED_IN_SALT',   'P=j`#K9]CQzNK3,/h0xSc_~!22a`/WPqY:<E#7S^HG^3_<oVA0pF-5iaIM5%9K*r');
define('NONCE_SALT',       '5HrH.yW@? QGw7^@3,c<7J+n|ucDPB+K0gs$<*7-e+X4glAX_?k^vk(gm{jQm$>h');

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

define( 'FS_METHOD', 'direct' );
define( 'UPLOADS', 'wp-content/uploads' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
