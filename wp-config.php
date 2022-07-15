<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T/%bqLiKv=ESCn53t(2wNe6x8u3@usfbrU1 gh)>&VG![UvO~,kg|Z=nw8N%xyLV' );
define( 'SECURE_AUTH_KEY',  'b (o,^@rJBQ)@I.E6Z>a^qF41NDFb9T!P5t_(p`dKCW8q(dUzR ^V+xmF)oe@HJG' );
define( 'LOGGED_IN_KEY',    ':X@?&Q9zjR]^$3hvmA1E#ZZ2cS)0dR=cRds>$/E[9{y6//c6?dztwa5=n1,]:FYX' );
define( 'NONCE_KEY',        'f(7Acc2%w|PJnjo#4D9X3W21#P!S#En*Lz6p3rZlr0v7Q;[shhiwUOZR:=l>c&uF' );
define( 'AUTH_SALT',        'mEs =wxs`=[Q@C~$3ozT*6 Nd3IE_|L`B>9aM$S4@P`|&dePzB$=a/sV]`6gehho' );
define( 'SECURE_AUTH_SALT', 'Oa%4,@X/Ph>^9.3@+`Q>J}W]lq!H$ug;fk$;Wdkj]#1B4V$_kVG#w|UB*%IIW;p]' );
define( 'LOGGED_IN_SALT',   'Pb@U7Q3(ZRL<cVDH>MS.1?/*BbGzZg@5#^xQQM>zR:$(`B%L~NskEfj-}WacQI|%' );
define( 'NONCE_SALT',       '9,K%$(FuWuqH|d9,hOrf,M1PA$*Ef>-cEh:CcIK89|)M#H(C8n*$^J.I~+~jZZxt' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
