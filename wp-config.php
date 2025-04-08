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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ',2~EiCjN5euM{CnFdOMzOz^yc-]qK!q9[->*}ac}j|PK(0l_K.`mP`&$6/qyDh<t' );
define( 'SECURE_AUTH_KEY',   'wLX{:`,vGO{?MCH/,l~IOar(sCGmIoQ4RqG)wLd23&|*YzqPl6wI%x$eQ=A(Qj*e' );
define( 'LOGGED_IN_KEY',     '[LIZC:DP|c,^<So+O_ .^nZ{MpaCV+.o){/|Ee [*$k-3~o<j-:0`hIyj|<Y32^Q' );
define( 'NONCE_KEY',         '3~o<@fc0l@.![eEhFlprT0aI!F%nF +n*|W:iyDl-k(&-[@]LpNgvuiyqp4+|bb^' );
define( 'AUTH_SALT',         '8OA9p$~6gpZ5[wj8I)GBt> UuI%z}~JcnA8to#8I_H^k!+j42><]OXU%^m^Xn@t+' );
define( 'SECURE_AUTH_SALT',  '`pQ3CF]BAlX&A4#V^@sNdNJx -G/{m^j)uF(fK8qPR:OF_~ip:MQXMow7@BeYBh[' );
define( 'LOGGED_IN_SALT',    '/n3C2aZb^Lm1dsIXR~}mTRlF!P[vYa`GoWi@J qsnpwhqUeM78SO{_3ybuAs lG6' );
define( 'NONCE_SALT',        '~$J.Khp$0co(}}i}|N%ezo8zO[4Zh#~tyhhzK[BMOr]s)|.V~F23l.Ptbl@;I:/3' );
define( 'WP_CACHE_KEY_SALT', '@OBN(03;i^MoDn,$FwSC7F^3d-15y4nBbBUQ)Ra73u  5~C$M=AQZ@aap32C19by' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
