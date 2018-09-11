<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'semantis');

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
define('AUTH_KEY',         'eRyrj1.UuBgm6{A+vAo!w}r/z]Zfg@vu{/%7sMKgJsqj$RO|RH6p <7<c!8x(Hy8');
define('SECURE_AUTH_KEY',  '+2x:*~^R#h#5@&nHQY0*G%zSKz/^*FoQsOzsca42&ZFx^VR 1J.Bpsy_M(l!e-`}');
define('LOGGED_IN_KEY',    'z` $|$kq^-*UV_a2:5cFy,_xf+@k $|Xx?U5[(Pt|^FJsPwaeC?>>hc%$PJl$RTR');
define('NONCE_KEY',        '.>L? 7P4J$GyjD|mAsioHi#X=Do?X|MfvC%= Rs[X6rL|Y6P;n0tTbAEu=h898Jl');
define('AUTH_SALT',        '9e+U>hcT&.~)WnEqE9`A&3$;P/<D+LLo|=sl@ZwCYf^}s,5C<g%YvMnQd3D E[Tm');
define('SECURE_AUTH_SALT', ';h]Q S(4vY_(0cArK(To8)w1NP:n[*S:,JRH__9!d>%BnWVyc_]Z^ejX|i#|g!On');
define('LOGGED_IN_SALT',   '2Dd!u$#Rd5m8F&S9q%%+}VO[nvhp]P5DHb<Bd+N$rnakcnn2*cM(|~?226LTU0[<');
define('NONCE_SALT',       ',3ukP-z5%6.fBe/z{Smb_8NxaYLdGbP4)D1;Mmu{3,E^gw)*<rE>qnYUl$I=LbG4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'se_';

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
