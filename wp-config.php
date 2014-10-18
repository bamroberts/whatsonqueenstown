<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'whatson');

/** MySQL database username */
define('DB_USER', 'whatson');

/** MySQL database password */
define('DB_PASSWORD', 'lemoncurd');

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
define('AUTH_KEY',         ',wsx|N4Ar@v=aW@zg[g:35LhPk:K+Fj^#>u)nzG1l@,$;1$geVds!|l)Nc); *>a');
define('SECURE_AUTH_KEY',  '>/Mb!].%@j^)!,VNiF?Y7+-;PJi)CJp,Ku7dS>PZbJ:(bL+70zEh-u;=>1+)>h5(');
define('LOGGED_IN_KEY',    'i/f(^B2}4}h5K?h=3Vdy*+gn;+>fT+t+hT#T>3a3`;V5bB:-,l2n7lIdV[g+{hZX');
define('NONCE_KEY',        '($NM0-E2YxAhNade4#|/kYm*-V[7+Ue3q|B7/.;9?|zus9?LU>ym[NML2Y+)awD;');
define('AUTH_SALT',        ')ML[R_+@We:yvR%O]F-Mf>l%eSrFr||(zK(YCtkt2(|1vkw;P_78<rj;@jXy-I/Z');
define('SECURE_AUTH_SALT', '8>l:/rOB/buu)=lMf|Mp?qMPIC>%e@^1{+Le!Oe3_*9Wt=}S-Ux+d?;|B80[/Zl<');
define('LOGGED_IN_SALT',   ';fH-C0zLwXD.GK32z)[v#CX}~|ve}e~`zOOHyITMdzpN@+_y;9rke7nDFFpO$2L|');
define('NONCE_SALT',       '#izO.)j`XR,9 pC+z_}/-?**>domS +kjMD$.&X<6zfCx3%cwb2+u;5ME-sh(f+]');

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

