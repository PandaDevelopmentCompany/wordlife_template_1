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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'study_4_9');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o2r(7jC3@m:7,+cv!#xzto[/y!:y=W0 )g:{-Hw*INRMho.H8392_Lt 9]GxR)XS');
define('SECURE_AUTH_KEY',  'bqoN&R.Brn#e2$Eo!3DMG&W#N/q9>gq>! 8/sBrw^^HD=w!vlj_NZK)M_%hyrU>%');
define('LOGGED_IN_KEY',    'ehM5+)pW>$64^.a4-v%*;9q@X3hqQ8&!VUgL88zlW{61],/><,/g6}JR6~c<2:m]');
define('NONCE_KEY',        '$/Z$;I(I1adV{)q:@$,R_ihgl 7_@b<rE8lq#&=>4(*Mt>!?H3fW.Qha%<$>_0/.');
define('AUTH_SALT',        'mY1%TQ$N<,*ow?70H+LF.e]3Ql9XLN]}iL9i9!&?/x@4srB)H]XPnpH+sAW.Vv0o');
define('SECURE_AUTH_SALT', 'SB:ncntev^e)h;z%~V2tTw+bsBMHBT M^$m6iNqJ4A74q98i/FkG$7Dd50EC<CZJ');
define('LOGGED_IN_SALT',   'h>6c* D 9^XP,HX2iAu:Rwl#8X0ozXrydPPmL]z2Zdx|h Wq%`X.g]=%tMwcqyq3');
define('NONCE_SALT',       'bxhGOO</$-)tis^PGW$>UO$/!?SQKnVhRLIlXMczP2tA|h|{.P+B1*&?VDq`WsCc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
// отключение автообновлений
define( 'AUTOMATIC_UPDATER_DISABLED', true );
