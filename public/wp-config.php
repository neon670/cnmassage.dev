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
define('DB_NAME', 'cmassage');

/** MySQL database username */
define('DB_USER', 'cn_user');

/** MySQL database password */
define('DB_PASSWORD', 'n0E67ne');

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
define('AUTH_KEY',         'URBdD*]~E8hm9Dv~qa9t{BmGD&i[@6VUhz?|k[E&B.Qt)A| ~[erDB,WW,Z`8#xy');
define('SECURE_AUTH_KEY',  'Ov76kc.[QE}23l_g<+?TPfUi-6[]ncNtevoXq3TQRyUSA?XoN(Ci_*`OYn=h*o_U');
define('LOGGED_IN_KEY',    'JeVrI}-M3 *{VTD&}*73=-%H-LjG3k(@bY;70I6Lm-^k3tM7o5[%jcL~%7o[793T');
define('NONCE_KEY',        '|?bVo~{,hCWOIXCb!}vH-A{1T.Q0X9iydev~`Q2,L[~d|NEM7AKSy;q!)UNj%<?Q');
define('AUTH_SALT',        'o4*&gQc4m[(S[4W[Yx3b-:;6-`cy8aQdnuiD5Gl~}NhOKx]8^|6_Pu:mfZ6E6i%=');
define('SECURE_AUTH_SALT', '?hSt3vJx.LuS0TiTk4_73!WsLQ#qtJPZ~VrW)MdJO@Yo^-/ZLuf+hmB^5Ewu#1U(');
define('LOGGED_IN_SALT',   '.JXOCn1|S9uq|Y:0Tq=PX]Dj]/R`=]e*RWEajU@v;IK1a-8YXyFf|@;TSV[BDhdk');
define('NONCE_SALT',       'Z|u<5yEc!XT{IXcnhaxy?}EEDG#x9dod@vg2~(<5C+lR-]:hZKgK}CslgA6Aq6u&');

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
