<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true );
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
define('WP_HOME','http://localhost/wp/');
define('WP_SITEURL','http://localhost/wp/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_ultrabyte');

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
define('AUTH_KEY',         '*aX):fT]1axT/ESs&{]DF<aa(6b.PeT!EPT!)Y M8iqkU+wU;kW16CHnq7O{mMj,');
define('SECURE_AUTH_KEY',  'z{RPeeXnS.m>Ec=sMhOc*l,`EW{>+qt#hu:y!:azl%5TKsY;e?[)*b01YWrCGWCC');
define('LOGGED_IN_KEY',    'V`)sslt7N$B?ly-;TA@Hz^xVLq&S4$vpseR~+)@*Y<lPw4B%Q[kU*%js$hj&O{5B');
define('NONCE_KEY',        '[i0*+gnf@cl7|3ZAuU&Fm6guj}998)RRf&) /Z7egHcM3|_BD>o]!oU6d]j(Z;+?');
define('AUTH_SALT',        'TsF4Kif/P9Y/{`L)MoG>h8R5_|kDbg)?R&8vs|cn7;j79&_JMm#ke<%*!ZSN0 @#');
define('SECURE_AUTH_SALT', '?XXo5^|u^Xf]Mn|&U;ixtDt]%`,56sc(%<oerRM1y+>1qFGVPxz{#wpclGlJR[qk');
define('LOGGED_IN_SALT',   'wZ|wfeMw6f{BPeAH5dK0S4t& ruXN>v5*QR]aN[Qh~kglZGd&]E#~4}Aas4`o?#B');
define('NONCE_SALT',       '-=KheeKSUq,mXS)kHdr&YPT((]dTo1i=IF`NCsG[(e.cTB=0phY=cM;o7 ambxv=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wultrsa_';

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
