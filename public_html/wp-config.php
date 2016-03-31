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
define('DB_NAME', 'katherin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+`~bob)DoO9T~}&t@.LIbe%AM:+cl qp;/r%Gh$]#9H)H: +L1N}e!6[iT_O|RWp');
define('SECURE_AUTH_KEY',  'XhDT=zFGIT>59lhZ+qy1k=V)qT4&mPh>>a{: {[FhJJ($LBGl_Co|8}LGQ/p=}[z');
define('LOGGED_IN_KEY',    'Oc}yOfT032[WiE9QOOahuS<TX~3~2v,fWq+[7>F-_?G|.0|[-E5;uX% >vpw:+Lc');
define('NONCE_KEY',        'A>y`hkV_0G_[(8$<|k<W$SL[#^Ot#pw7U>I_C:Kbaz;+Bq+(%;$1i, mU-@5s &+');
define('AUTH_SALT',        '6w0.]p4-@j)LgXurZ=T*p#.O-l|&--a9`EjrZAE3#nba~6ov2sMbHd!YJd){3mc-');
define('SECURE_AUTH_SALT', '*,:GuA[eK|t.l=b-5iZaNp-N1k*spQoSScRZ>Sa[={pN<@tZdPTqQkc4(cC.w_?Y');
define('LOGGED_IN_SALT',   '[YY:M>En.rDZBI_7r4,4K~BQW/lcHx+|W:PVZ>A3z/tmQ0<[z:_Ouc)jG,?P4ZAJ');
define('NONCE_SALT',       '8;Z0%?SE[mYH_z<.`&fzm*_P>zty(nT7C]n$TC9,h}6[Qba`@f;zEC/W>VT*|$+6');

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
