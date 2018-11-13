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
define('DB_NAME', "{{database_name}}");

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
define('AUTH_KEY',         'Z(o2/.$K^p=(-z-EIK4)/TQF;9pf&8PeA$a5<yj?dR^qjRtaOnfK$30HT9MS^V<L');
define('SECURE_AUTH_KEY',  '4S!M!X!niWnZ$O2dqy54r)Q4p5&r[qtOtd|;pUz/n*%s:VenvW=Y{<aB;!Z8&{Rv');
define('LOGGED_IN_KEY',    '=Gnn25P8P3d/,8eXJu)e{Ts)91a4+3m{>$ew)a`R!x^?<ja*IDc}{g*S1h0Nt%H7');
define('NONCE_KEY',        '-{e|b00wK|7I+)dL]C=VRYYAJ}+:62p<,&.1/x;I,7fESd7+=Z]N 25ln/{+@gq>');
define('AUTH_SALT',        'M sr=qJ0>p9l>Ir*oKXL0|T+sck%aG*C:#A*Hh6^sd3a)jtfgVi.?%Zm^3bJcnKb');
define('SECURE_AUTH_SALT', 'BBQb1`5I[r~$e<uXZGB@@`r30GK_3nHcSx8U3[`p@hL+nB80BXP;qyD~lC.(cWrP');
define('LOGGED_IN_SALT',   'MhWLXDKSVfipWD-O0ql>3#L(8Ff3R%?=K|8d?JCy8]7jd aT-*{NIY~;6~wmgytN');
define('NONCE_SALT',       'u7;y$}$m-NW0Iz|hSxy$sAxf $ O{rE;nWXww[C>k)~#^78:[*Ijmtm+()=-,8a.');

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
