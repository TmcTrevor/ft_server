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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'c6)8T.,`T!rX`co`NpqK.XnK9KNvQH{-,.P?92rtuF)i~-+1mJkN~s^x+(p$/aN4' );
define( 'SECURE_AUTH_KEY',  'u3V96t<YW.t243m4?U[CdDH%U{:tK|OETGFTd| b6 AE-!jH*Srr2/tzhI<wGRz;' );
define( 'LOGGED_IN_KEY',    'QDsLGDT`_$mFfezoCbS01br)D1>97D>u,J5nDZhJa3t^ZoQSv}ftwOWodr&.:nht' );
define( 'NONCE_KEY',        'f8EjIhz1pm9{_4>zo-o$9~^8U29V=l8j^,!02er_.Z=Qz)`Z!7c?CqihQ#Z BWA^' );
define( 'AUTH_SALT',        'Ijx;_;#e4V;WtdizUp/+Roe;acYjw*!$|zxd{-#,VBqB^@&Fk5Xe`-~d[g,X^M</' );
define( 'SECURE_AUTH_SALT', 'ZF$OhT|1T*T8/;HZAwO@/, Fw[GYzg=|,JY!_>Z_{*uxLk4*R<_Dbe;;#/Nw,<hH' );
define( 'LOGGED_IN_SALT',   ' I0nYMoN.^CR=k]TGIBnb+@mo]$D+j3l[,-ZDmjpC[4iSk6((>rto!7GNtQ]s;xL' );
define( 'NONCE_SALT',       'b/xicb_.|LH_h~y|ZtL>R%uW(DaPEaL~?tvUO 7OVOm_b^S]cD.LOe=|R<;H3U2{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
