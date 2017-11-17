<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'seagirt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'Tt3IhvVM!BwdvazOxd(PIa7G~=.qrdco&`bB;sNq/u5C%9/D(0P<o;U]:uYz`s>=');
define('SECURE_AUTH_KEY',  't6LEI,>#oM1w{2>&^wP/4>I@y1fI{Bd<eQ^~L25QOT,dal.>C:b8^@AKC#_&.=q ');
define('LOGGED_IN_KEY',    '-b<83:OB{$eG)IhK>*US-4  RWMW&f!)~3=2]@z!`?j3g:lCW76l<2$32yvFZV}[');
define('NONCE_KEY',        '7rjN$c0[Oh#O$S,[ mvds#MT4Z(sFuk3wz?i.dnqQm|_X[HB~QC5MW*b&o[[RZQL');
define('AUTH_SALT',        'l*v42r3~z>D&rpvRLWg=(;jOCZFLl?jG^K):oket77b=,_z3Nn:NA|*20K?~DtbX');
define('SECURE_AUTH_SALT', 'DLuvl/:PEjX%|}(e=so<,;:G;:j+aP3 /BWy0p@k3*5kNm&UtM|_w!jympl/@Lld');
define('LOGGED_IN_SALT',   'YxaY1Wgj[FJmq)71){#pc;3Z@3:N%cZW*|dGK{+2l4#XlT5lk&[je}Xmu?KcLgU ');
define('NONCE_SALT',       '7ZgQ[0r{CckZs?IH/iI2zoDd@6k+pb+AH6R$_tXUN3Qy*n,,#nxA6%*A 9sfbTC|');

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
