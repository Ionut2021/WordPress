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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k /F%A+lLYzC;7PS}0g t09%$O?v==G+J<FY!Jq!dq3o`FDf~[_#xpV6m(<X!/a,' );
define( 'SECURE_AUTH_KEY',  'lB00@o,MCvHdSA=Ns/m^?7vnZ}F4!J.m^D{GI[Y-oGjTsfuU1jUs&AFX{_YMjj..' );
define( 'LOGGED_IN_KEY',    'c}C,GBkU%8i~=29C]DpBkdN#-_X<$IR&;tM^(!--jSKx}+4sU+|H1=}I9DMFzSAy' );
define( 'NONCE_KEY',        'v3&[ryU!~]Qd&8%Jwg(_>feoA9i730OP)y+]fYZs5km;4n2;Amole*^OgT8;D{fj' );
define( 'AUTH_SALT',        'hXD}`K*3E`x-;0C=63|E!OrLBM)sjji.yUbgQ`FCb OJnt}U#t47F=emKsSd)t<G' );
define( 'SECURE_AUTH_SALT', 'JpY8w`=OKaJjdM5@6n(2d8* Ad@J~oMwN)g~MEujOAey{XXV#ql7VLq]bjHwZAJ,' );
define( 'LOGGED_IN_SALT',   'D0865UeT!1esT#v]q[%LM<n()KLt_No]u#MS+_f,Cm0n6zo=)K^3PG&4=dD[CL#O' );
define( 'NONCE_SALT',       'lC)v4:UoipG^2^&VC!tNoczNO8kJmwYB58g3H:Dj }}q2M_5N%Kh]J^`V?^v?7Q2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
