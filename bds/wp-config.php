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

// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', false);
// define( 'WP_DEBUG', true );

define('DB_NAME', 'testbds');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:8080');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '`B19h?NpsZhF8p|M~H=RJO>!9D_&1ou+so7#;?D;3M&J2wr[hsQpF0z4)+Lq5U0t');
define('SECURE_AUTH_KEY',  '&~^$_T~zFrgha6z$Y(;$IkfJla=JvmfqscJ+e/Zl!rSibD>,Ye)bvX*S(h4 -R9(');
define('LOGGED_IN_KEY',    'w:Ok=r$;9NbJ@Jdm5s=K2%4=kW!A]5+` bwJ?RUX$#5grfm[d1nWp7Jmst2|dEVY');
define('NONCE_KEY',        'iXBZyt,oHeB}<wK{7[`H,1|_%v?f`+N5O<V>t:+,rtJ=m?w&wt(X@~pBtHV,xyfP');
define('AUTH_SALT',        'Jz;VRfeLb.DxxAM=<IK!$_-FlE=[VTW-,f[h1-f- (oSw_ j@HQM.*o?9>}Ho+rj');
define('SECURE_AUTH_SALT', 'nJWjY!JEU)Wk[L_EqRDw/k%|CO?1*{U6DU<]^c-=)hah0#(5rar*pHgq:hust<+*');
define('LOGGED_IN_SALT',   'ARap/HkTEq0tt$b[*pTm2!>R-j^0@?/f_?PHf .%C-n)X%%KU p{%V4pzhFuVRKd');
define('NONCE_SALT',       'p).mg!5<mpdmq_oo4>]0uiJ4AV7;-XF^Fq<`(YJs}bgzi|cbuT}@q3+RzP.Cgwa+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vpw_';

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
define('WP_DEBUG',true);

define('WP_ALLOW_REPAIR',true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
