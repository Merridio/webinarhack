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
define('AUTH_KEY',         'LS$S{#>a:& >m23U$2EFb4hJ$m,!wcTxSWD^e1YR>s] hSDbd !m15kU!|7rx~`y');
define('SECURE_AUTH_KEY',  '/IL|E=qAd4u,8a3hc7M>&pKbLM6?~:C4w*tDybgJ:- n>FvIp!TleVmb>rloJvWx');
define('LOGGED_IN_KEY',    'O|?KbA=`s?(ev.Mb)WY|h-7J)2>:[zf-/l_*O3fvT0Kdk7lcVB<H5D.yd=6bey~0');
define('NONCE_KEY',        ' {#7a0S@2Ciu[i>WB5Fgew7,V]SEj5(9;w81}a_Bh!/MgIQ?D&QX>dz88JIq3oeL');
define('AUTH_SALT',        '.qR2j;_cJPzHcyH]GQ)[aMI?k@Kc8<CVK*ua~;+0J{* 71N%>ay:/RoPTS0YV?OF');
define('SECURE_AUTH_SALT', 'G_w 9Xrl[eU7i$cfOk&s7XL%A!F Pi&##5~[V~ri6{AvOo[T`XSFER(%B^N:I!g|');
define('LOGGED_IN_SALT',   '0.jloO&JH%$%Rh:Dk>cb7akrA.Qaj`g}/8b6,Wv)wi`Ty}[B9g@[k;c=F7OE25]@');
define('NONCE_SALT',       'hIpLQ2.zUfjGPPEfcjJD& 8a<x8(:,24R_+ezq^0Zw=iC(rIXa5JF^4ij4oXponS');

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
