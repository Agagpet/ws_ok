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
define( 'DB_NAME', 'db_ws' );

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
define( 'AUTH_KEY',         '!>m/6 NWlF/.3(J=;vP+U^u=C[Z^}IA|Ik_:u=I4gn<g0p!b_Rqx-m;FY><gq2,d' );
define( 'SECURE_AUTH_KEY',  'iJITw /QwJcE=.T8dR[lZ6&o-O$iz,jqnf%h@a%1!l=dHF%]&#EY,PO=ZS)ZmH/=' );
define( 'LOGGED_IN_KEY',    'O .?]cH5Pg0Oo- 8;5vE9!v0b%0pp{~9JFN;Ornn-~u-m]y HUDr>wXprK>KTjs|' );
define( 'NONCE_KEY',        '+^<w<,[R,:{#6d+tRRt#rL6U-4+X^0#5@q:q%<64r#Yyh5r&PXv*=hO)vRx,iU_u' );
define( 'AUTH_SALT',        ' !oEa!_Hsoj:Xpo4(XV45OT)/1aqsf,l|d{|8)4by6]C;fH+vB2V6#`<l+~.[:7?' );
define( 'SECURE_AUTH_SALT', 'ZH]OshAe#WJOp<w-_We(jEUw=}dF}>1yi6TXJf`2VEog9H/ }]!{aJ;j=09}Pa[S' );
define( 'LOGGED_IN_SALT',   '6F&vLh#@hJIxkY~9 W8$<9S.8<-xYIC;8[h7Yy#-?N%~nscvYW]UYFWY2*[90TWC' );
define( 'NONCE_SALT',       'kv-t$ns^G*-Kd#Z80-2-R3]5BK)vU>=>7bg9Th2u!9*j^/A?<jC*3` (rWPQ~FBl' );

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
