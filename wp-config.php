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
define( 'AUTH_KEY',         '$DuT {/wmz.c&<&[A~&?2/%>>4BUAp`l,HODj`^?k= +ZqTzFu^<PcV31)BKg*]<' );
define( 'SECURE_AUTH_KEY',  '3].v/->AECrp)?P$EN+FO!<a<RzRv2c:Ii;WO=vbH)ABXGI&F!8*UIw(sIdKD3=a' );
define( 'LOGGED_IN_KEY',    'IF4BER/9R0a^-LQdHPMFd|DFi;{u?^$bzl}KaT?8Q5#,S-uRes_&taGQ~t80|W18' );
define( 'NONCE_KEY',        '{o|pBW-!BrKSm/mR{FtfQ}#Z7lk!60% A}IHsb)Ttf(Y&IikW!kHJuWP-a!saR-a' );
define( 'AUTH_SALT',        '5M}ZlMnx^@s4r`!Q51YDj-XO?&fw=hfH%/1@nTU&o~UhI?fDQkR}COmM8dM4tPc ' );
define( 'SECURE_AUTH_SALT', 'o5~,]W,K]&is%bqF(WxQC:NIp}vKD`wn8iG;JIC?m*qyb1{X!2T/l8M&V@d#^(iG' );
define( 'LOGGED_IN_SALT',   'i@@u&M{L`|BnPh7h0Fp35or$0MG02OJO-|Z8VdZx8hk^fH(GjEf:W42FQ8WhNcox' );
define( 'NONCE_SALT',       'R`P(.kZ$d=}M,B`MRT}h;.Vy[7.[=XSBtg!pObpA%c.Xh5i,~VFp9!5*j[SXrZX}' );

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
