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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'z%Z+-5EKAs~<bz@t`!?-jjtOul+Bw6[0s7tHP4JUUtS@JX]kJ7 y-3QxTd/o+Tb`');
define('SECURE_AUTH_KEY',  'Ma2@:nJ}${ef8I-H!=D~kA<XD7{{cBUc?1$;.EwG3~2&Aj$mG&I9g+eG;CdWt+{p');
define('LOGGED_IN_KEY',    '5.r=ZGJ1@}$%6]q[i,x/l]`,.Mji(Z#b.(qY)XJ6kDWv;H:Z0z<y2&4FpN/VrPWR');
define('NONCE_KEY',        ':+KU@xv:X5Y`^xozp,J@?[{nWpALW!%VYwfKDrI=`+XacCMrL zyi]owF+/[snQ,');
define('AUTH_SALT',        '}GX,K~2V=0^2e|6|(QGDz6{0eo& L-i7qF]{.,N^*oyygq%F&St%)GDf1$OU#y|T');
define('SECURE_AUTH_SALT', 'UtuoS-:ag#@o%( leQr2{0BCdtj#iYb|sQK/ajIvVCg3p$0XR..B2|SjSm(2!iVA');
define('LOGGED_IN_SALT',   'LD a.{FLGVw=(^8C`#MOudw.<#upm#YI>Q]jv(8!2ZgP,1|t.3QnfiRz:iSHBBCu');
define('NONCE_SALT',       'kMH8 LK&[RX_dSNK4/Y>ZKr44#LEf)wGE*g!be?1;nTO7cx.DYw*zf[1%Kgw|fIW');

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
