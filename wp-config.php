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
define('DB_NAME', 'traveltriangleindia');

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
define('AUTH_KEY',         '2Ax?_!)S+_{@QD-6xG9Gb)qPJLr7Jh8XY=mTVF}}gW&MYsG^uJ`0|OyD2.$f&Ng.');
define('SECURE_AUTH_KEY',  'ZZ;^.w[uD2m<Zd[-[vem<1}XR@?Z2y*H[zv0RD3TcMwe:Vn8_>CtT^L1z0y3X`TR');
define('LOGGED_IN_KEY',    'v_57Aqf1bLp.M*}N9h>OS6ChY,wdFiuMAF=(Ks4)tcC H8dV~gJqvTAFJQ~;B.ow');
define('NONCE_KEY',        'r/p_}9[002>AR#l?<s9$[ )!xiY@hGR2OM5SpV<Ax8GiIYS{rAt)OyIc=-t^05|9');
define('AUTH_SALT',        '_#(mZ#cX/<Sl@c6R<|7fcG;n5iO};^u#K2_Q(mBej:72T]LJnS]<t.{C7nBe<Fu~');
define('SECURE_AUTH_SALT', '-vyG](>VUd9A{6OYP:u}S`1c;5bF8y`Mw@$ZRpQmI5n}ji3Yl*GR6eJER&v1Ks5v');
define('LOGGED_IN_SALT',   'zzUQH$*9edIs#8-4>>>)85GY+v6wR!{#1v}xd]}*kPCFjO:nb7O_4a]mIIjqX>*7');
define('NONCE_SALT',       '^B?[JadxCT)_qHC[ ;1xk&M;:SD=0lxB~CIu3dQ1hZLClD6GU5D9c6tp6?0|Q`2h');

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
