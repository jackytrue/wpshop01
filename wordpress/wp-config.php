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
define('DB_NAME', 'wpshop');

/** MySQL database username */
define('DB_USER', 'wpshopadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wpshopadmin');

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
define('AUTH_KEY',         '_o-aFLZv1ho!upol%4mUTNU7Q#e:twPlsY0+qn}_$N,t$mx~L#})ifP9A6CaF4he');
define('SECURE_AUTH_KEY',  'nAq~N3sxBYjeR1)1{G,dPSJzSG2q<hEQE}GaM96wTsfj{0tGfKdlv9 Hd=!U9iLC');
define('LOGGED_IN_KEY',    '$oSPbkj BqsI{1Bm+X!XGuvTe~-4|t9,FQ37ps3PQCg_*E}$U$*wNUQcR0Xx/`~N');
define('NONCE_KEY',        'YGBgjX:&!>|xNq~1ie4[F3ash$)KKJqQU15Bfd!@h.s+e+IaORz^).VO>r^@T-=U');
define('AUTH_SALT',        'T-_bnL7  NCKOw(xqg#qOjwb]*#,AVR7O.Yr>-kr>Ka1s`f)8.!hX6cT(iPg8~dH');
define('SECURE_AUTH_SALT', '#<]npOyv&6wN31BQ/}LB32hQMF}`~PT=bU)5IE&AvkDOx~ELuz&Q6E`i,ak<;+^E');
define('LOGGED_IN_SALT',   'c5/oDl>)~F 7vtT^+2DoDiYsdMPXmA&>7:T?``Av[WHEHwyBI(?2C^Ml!Fz;Z)`I');
define('NONCE_SALT',       '/J(]+~I~v4qpSd8lxPv8mI>^OAjG~>:TY+]tMknz4ei8W/y^tU?sudlktZt8;_m!');

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
