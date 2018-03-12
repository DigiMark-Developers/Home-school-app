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
define('DB_NAME', 'abdulla4_app');

/** MySQL database username */
define('DB_USER', 'abdulla4_app');

/** MySQL database password */
define('DB_PASSWORD', 'app!@#123,1123');

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
define('AUTH_KEY',         'RCX.8%l6,|ej[,~*L]AgVVlRK|}a nXJa!D6wvbyaqq&jp?^K>/[4rtc$V:-ma0 ');
define('SECURE_AUTH_KEY',  'el{__^o)2NTyrocf|VL^%.Fdn7)#=|0%7in CK@ToONqE+?-lVZQF!Xy;+N>BSrB');
define('LOGGED_IN_KEY',    '6U&m&~myKfmc;bd|]cCiM76;YVbbqX[A3H#buZ(BbRk?B8rmPFT>+:J7E<V>3.i2');
define('NONCE_KEY',        'h2:C,CRg&sb8sYp_&R+bS{LL)-5rFd_X`c??sd:]yIvps}g1-p>c;st4(;,7Sptt');
define('AUTH_SALT',        '7D{I!Bz`[}.w}AzwEN!LFFlg=:)kYbiQIp5|?o^5LP[S}r%7Eoty`xf{2W^HR5[?');
define('SECURE_AUTH_SALT', 'bQOP11>~&xa).EMf,rk 3x;?>_WL&b@YCUndFIi28^lbR3PuJUQ}%&5Pm;<!yBjH');
define('LOGGED_IN_SALT',   'I^9R-jvLh)W.1_OIE%c,]SV~LC7muf(-#&(x_J>zkA)J#nXCJH{w#f`;zu=j<a]a');
define('NONCE_SALT',       ';5$x  &!E`.}alco&_Qq|M}7F9v4_!M-GwWV_PA1aPR?9#taJd?$QqlkNAe02]DZ');

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
