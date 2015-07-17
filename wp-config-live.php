<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'danshore_swing');

/** MySQL database username */
define('DB_USER', 'danshore_swingth');

/** MySQL database password */
define('DB_PASSWORD', 'BgTuCKmr8sthLzb7pZbf');

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
define('AUTH_KEY',         'w|}2txp*.FWIML+Aq+kF%^i%uydy[^]3f5[`NES%L#Q]oBMJvojM?`;wL4K<0,k(');
define('SECURE_AUTH_KEY',  '+02D-<(V+Qmz K|W-|q-(S9#J[nC1q0BDTY{+yhV=`CitaH28|l]cb0I/67b.n)C');
define('LOGGED_IN_KEY',    'N2F~9F|vi<:DW.3~CwH&k`#~n-5KGt41KZ@{Nm]~~.z}~^dH=O^.|u{8e|d);?cS');
define('NONCE_KEY',        'A>z3`C]kr7+H8q7:8_7rB7X){b7,;viN_#y8t_8.%R-kl>-7|ta1.:i}|!#L+>#J');
define('AUTH_SALT',        '-H`7Sml2?o^z=@Y%nr:Geg}u@EDkpfe3sgJkg:|%ELS5>J0=5b1Q:*UIcfcy2^oU');
define('SECURE_AUTH_SALT', 'AH&H(-?nZQ3f:Uo4]/xu|Q_eQsO6Uv2~.-!b(d`:HAObmk,GQ]$~3u.4B_y~^$wD');
define('LOGGED_IN_SALT',   '.tY^(Hv@>#Zmh@h=bV)g2.PRJpNCgY*LSJ7zmMN[=[s*^/F.2+xY-u^q@/Cq()_n');
define('NONCE_SALT',       'izX`V=%dnI1H9tFRk)q:Lj>4jxbjlOm`;fuvz:OhX36cu_Op.u~KAGm/I#y3u(gE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
