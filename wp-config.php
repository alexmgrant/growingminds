<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
// define( 'WPCACHEHOME', '/home/alexg/public_html/cap-feather.com/growingminds/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'growin44_growingminds');

/** MySQL database username */
define('DB_USER', 'growin44_admin');

/** MySQL database password */
define('DB_PASSWORD', '*)P@}qh)VTs8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'drLNFO@(:2zk=IYz^SOiI(e8qz<eq<V@JA!/$J-tatevWRNwRTE^aShtWwG*4JI5y6(c3l|D8~iBpR');
define('SECURE_AUTH_KEY',  'xOCm4GvKS:QvW@cDyeWS>*Ti4G#!ISMuQ^2QrJ3j\`qfNYg@8Hv*K^!52drDh@\`E*e9*F4C8v@q2ds#dY@#ft');
define('LOGGED_IN_KEY',    '|:6!g_d#r|0:9\`W2s=Zv|drOqxRz0@tNgD)e(P>yNU?m;ut0PgTqe~lvbvYhq5CiH_0pqTXxI:QWj');
define('NONCE_KEY',        'I!:<KPi7qKFZQr7\`E^!C(m1qd=plt06~e)X9HvSp(Z/!ta~66GkK;o7FjYdxe:0iHFMdmmd4');
define('AUTH_SALT',        '5lj|SX^CJYwLa$qPwMEme~c~OE;OB1#I^RSD!R5QwroxeEq\`ub1Uo?It-0?dRR6');
define('SECURE_AUTH_SALT', 'v)Wojp|K>xlwCj7lD:2UU#lwQmpicAK_;B(zV6znFA(obx_90eS~v>mTMB/@pixh32');
define('LOGGED_IN_SALT',   'jOvk/SZf|LnXO:i2RjWM@CyaIdkBOv^D$MzY?oi0mslDThC(lzp/B|o)vv6n|;)tESS_tUi');
define('NONCE_SALT',       '?T\`QIJ*4PRe98VHP<J!_z4LfPB>WT53V8ki*lfMa/MM>nl5ddQKAA7p(!s/(Mk<:dzaiEH0l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
