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
define('DB_NAME', 'jexparts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

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
define('AUTH_KEY',         'zRhQAv,.&/p&BFQn]x#JCMf8$kxV;TS/G=NQV<>}r.tMK9c90<%BVP~7zy#F2DVg');
define('SECURE_AUTH_KEY',  'ek{)?FuAC*|4&n,LU.!c@EO1(s+{~2hv_t#a$X]Q;|%ce.TcDHq]oI8;@xKq#Y!6');
define('LOGGED_IN_KEY',    '@[(oWIg1cv6XLc#WwCBuk)k0Cn1;07dki[)n>g@- Hb0N0_m/!OfBQ.ihxP?+o35');
define('NONCE_KEY',        'j<kl:g~+>lE:C{0jZ=F2=iz`JX/YJ1CHZ<k) OE/UbE>dqcTL1H?(PE?ug3_:yaU');
define('AUTH_SALT',        '10IORR<Kg%R1t/S)Yp|8X@)w%e!hAr::/y2c^q_}`A<v!3:+G$k0l )O)S6qcT]h');
define('SECURE_AUTH_SALT', '<9e$52+[=(EEV/UddeK(Wk8S&V(/p#}1pU8F|&5-*MD8`RzPX9Jp^rbv)& !+6:O');
define('LOGGED_IN_SALT',   '?Wq zUQ#PZ_rJl9UO%ka>W#50n=(e!/-QPsrEtw{i4sV@f_UOwp$_s@%kGN3OWaW');
define('NONCE_SALT',       'vgAs0(^42l{>v$nbRiC@y%RpRwBQo4?J_4GMkzErwK,<4:<x5QLi8iP9b^$=Ayzx');

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
