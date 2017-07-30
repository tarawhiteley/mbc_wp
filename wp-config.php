<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'mbc_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ']E=0MKe!bb60.Ua1IxQ8opU#_,kddxU33T{8IDE%u5R%>!GbrL>n0*6,:;Q/7uRt');
define('SECURE_AUTH_KEY',  '=vOYfJ}<@<WN<e2()9n=!Ci*.8aCDC=swRJrIJqUu({l_Bi8|zS<rfx19:CI5f#y');
define('LOGGED_IN_KEY',    'gDG$CEa%M|V51<Xeca^d_*IWOoh>OPZaG_cFEEqzD@6)xVi]=!IDGH8)=#<4 dXQ');
define('NONCE_KEY',        '}w;3LL}kG^,aZpl6X$z*6Y9FL&JpJJ?5lRmkfCH!I!~*yd+sSw^_6VpRZPk</2QX');
define('AUTH_SALT',        'W~fxD}Mu:8OkHvzYHWYH 56{RpH7@%uZnu<gwf:]Dqf~mf/ful-n@Te0y1{Jto0^');
define('SECURE_AUTH_SALT', '<Np0ucOPpO:=zqo;$-MXVd/<f|.;aufuKZ3dT@(~m{Q&B^40)0ioEVcE,V/c;23a');
define('LOGGED_IN_SALT',   ')_#Tdt[w6XHMcE5=cT/Od6]9JVk>owrc?w*oV_UYM:/pGYH`LB0G!718jH6%ezh0');
define('NONCE_SALT',       '!4,s=c|N#7,e.apdgF@rA/Z>ND9*t*r2V(@lk5Y~,R2 Srse|E/CYaoFX9*`|utk');

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
