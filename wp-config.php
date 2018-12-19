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
define('DB_NAME', 'mytheme');

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
define('AUTH_KEY',         'ebj/NbxlkVQ0RlO>jM2Xq-!Zx?rZ mb@Fo?L!>5RjSl2 /Nh Z}@bXt%m4olIG8#');
define('SECURE_AUTH_KEY',  '8K3UU>n:NG*9NZ]Y)u!DF^a/}i9Cl>F/R{(kVu05bbFu:s 4wYi`e{bf gL ^wTP');
define('LOGGED_IN_KEY',    'Xk~?sPyy C0^Y4c&7:-{t{|,IPvxZ^*e:N4j$i%6Upo bCW$aXSO:yj0n*$WHb/`');
define('NONCE_KEY',        ' 7q>!*mz=l9:kNQs=`{:HlWELl^VsK3GeKJ)$(ed>YekiJT+~>(SRjO;uQ@Pzgl-');
define('AUTH_SALT',        '*o9;k@q@e7t_<pL2{k9^a;1lzK;2}38}2`N5<sHl>=<mL8(:E0*zp+Xa{1}|scr.');
define('SECURE_AUTH_SALT', '_]XrxO`ITB=b:yY/l<O_2azg-bOC8(@fA&G_wJDL2#<P+%5/!k,E}+!Dc3VLc~2V');
define('LOGGED_IN_SALT',   '26IDaK+%[^&10Bm]6,zZHRNW)I9 PRe5`G`$6.9g8=fYB6gBeIdMn^Qyq;EDju^+');
define('NONCE_SALT',       '|sIJs0m7m/^& !IuR15)S6;5.al=@G>/?&_V@ +|]zHtNfL[@{GW]r]Zd`ZoYN6D');

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
