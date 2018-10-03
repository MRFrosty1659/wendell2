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
define('DB_NAME', 'wendell');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'Mv*j5JyP%q$E,]Y83Ld$yJC{x^:/1./ |`C3o|v9{qQ,$F{5X)8@,99&QnR;:wu1');
define('SECURE_AUTH_KEY',  'QUYR!hU4oZ.N$1l*suQBU){AQ&!p>j{Q2.IDlYL}$lLED[`O<c{d#>N4VVBhZwe;');
define('LOGGED_IN_KEY',    'va;}Fi&L)o_W{A.r>Uo2Mu&=LysZq!Wb-ID4c?5EiAIRCY5$f4PDrs59@[eoWh1n');
define('NONCE_KEY',        'B52HgH1{|OFKWu0S-7$gf?|qS,sCou7yXstJisyRx;!UOfM#)oi(1>KWu6{@@;3p');
define('AUTH_SALT',        'B&Hf&S6Wk206VE5z~jLe-g90.^_ScSv~oWp%3TvMp%>a^|yp[k#(<eb4xl1I+6Q!');
define('SECURE_AUTH_SALT', 'bQc <,E0wNRO6n-o<*5BqPv3Ue$ >uOJ<HE[:zYgd@^?9Q}JKOFoeL|7413?FSCD');
define('LOGGED_IN_SALT',   'd1~ni^ziP*TsQYedsVYBs&H<h0@yblr(6G6Y/o%yzhm)$UW0x(Y6/C2Hz!n$tOvI');
define('NONCE_SALT',       'g0_Z`<I3}mbk%uv>g@eiW7_x9J~7C[P&yz?^NJ%Qc;d1T:pd1,j#!O:]KQ<cw>@,');

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
