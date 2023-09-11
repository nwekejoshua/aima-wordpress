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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         ']o]/tFN,VFCHbdg]P8t&K7uJ&^v3km/z,hQuY(nTJE{RSN 8Y7+BB4o[0j)/@Ytw' );
define( 'SECURE_AUTH_KEY',  '+fJaF0PMw)IRjSYAY<dZ2*jf)v-i8d)b6amG6D?B(1>9f5#6l`C|Ppbbp(O1GFgn' );
define( 'LOGGED_IN_KEY',    '3Enr4:@sj>e1C -s;J`F|--;;|XaZ^-(gR`VUkX(%|(GDM8#W!U}W;Q@hN0YEgpE' );
define( 'NONCE_KEY',        'Gj +/jqjS>:J,T |sq)L]&|#k4hYzbhKA[Yum++d4!K?Cv&{HhUtCWRzgGr=:12i' );
define( 'AUTH_SALT',        'qwZv5Cd;h[*#DRMP/:,kx^C/9@o>-XNgi]B,LQbwADyee>D,=uwrqOOFfFUf9^.1' );
define( 'SECURE_AUTH_SALT', '>X);,oNv1}z=#wS:8$w6p~*PsAj:@BX~HzMx_`&Zm]|id<^wN SFXA .=I&x}&4G' );
define( 'LOGGED_IN_SALT',   'q),y&>o~cltE;d xB089$H-gg.>CxzZr>xPW(JAsR3!;wXu92|?*OjL{;_90EjL,' );
define( 'NONCE_SALT',       'b[lAnI`]E#zFP~8a&VK?nHNi^.R3odsbDGh@=UBMZc8UaJNeo(d.&zve)/o5S|C8' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
