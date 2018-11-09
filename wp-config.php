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
define('DB_NAME', 'demowordpress');

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
define('AUTH_KEY',         'ES%s,|4&|ha`Ay4C.lSG2)E}]y+R$+$;/YitX+P)wI}r_jz#Hu:-*xbg4GgaIj^{');
define('SECURE_AUTH_KEY',  'Bdb^6xIVGj`;gXo;wYh6ly5^pap,q6T9`t{|.y)aRt*pL*-b`{S}?u4&AtW-#&M&');
define('LOGGED_IN_KEY',    'K7R:8p@5E3`J)hzn(|zLs6g*l)wXb6@kC(#],yOI!#x+l,Sd;-EA]63j>1scCsnw');
define('NONCE_KEY',        '^|+?~LiT7t+6,0<wnHA$qPA&/?A=7>_[}&> >^A{?M<d35d|afb)uOW:C-ww7dvh');
define('AUTH_SALT',        'y,k!O 4ZJ<6TQ&w- [H{@WRq(2*Ttc`2s3heXfg]LDtI :#V$fkpSf]/|iw+uE~ ');
define('SECURE_AUTH_SALT', ';ACPZc8O?e|v2P;~p+eWj~R6katIa&#0jtb!D CN461l#vO.tM/|K2ayasE0I;9n');
define('LOGGED_IN_SALT',   'Y3GjsjIh8,#^08p<43i&*8<5[!nzUF>yX;u$#lxIi7w&R?QrzM/b&+-_(:5`9*q@');
define('NONCE_SALT',       'ae:LUSk_rTRDMV)huKO7g5FhbK<?~x>eA#DH~DKKU{m9ec&e.1mI<q,%)w$#)`jQ');

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
