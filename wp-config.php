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
define( 'DB_NAME', 'escape-room-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'irishuang' );

/** MySQL database password */
define( 'DB_PASSWORD', '.eYArfeFeR0][.MQ' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-XkKxlw&:]HF+52I-QDm8.x6M|wI8weL 05Aa-jIg6D|7i=T*cF$f0mO`5L2RvZC' );
define( 'SECURE_AUTH_KEY',  '+u`C{jVQNH<:lO`KoO~S^EZ MO:W$#8!/$*.SEh.Nf&s>~e_Fm}J4TbVh2l=@:v|' );
define( 'LOGGED_IN_KEY',    'g`^SKn5.QLqb0`1Bg9OO(?U=DI*nl)`7:<IV@-H]~nFe{{tKR*!EAu*|;I[:S{!/' );
define( 'NONCE_KEY',        'uCw|qzu?x*0$6H+CGhVm;1ato|sxfyf{C4%$Yi|IBF5n|)f*h<K?gLk{1K?W4%yD' );
define( 'AUTH_SALT',        'P_Sads.lArm6__QVwD/sp=vLY/X[7Sdo_uZ }I!-tE(K4;W1|r:Oy$@6z.+AWq*?' );
define( 'SECURE_AUTH_SALT', 'Fo2I`=>rH~``n_}j>C9Spaz^l/~0n<aqT:TPvnxCsFQvtbd/q.|9|S`b]$qALZ$g' );
define( 'LOGGED_IN_SALT',   '56TKrNu^S+?jk#]y|7cnMwy.1vUI{9E=R,Dw,aP99p2o1VW|WD8OE**|#&VG~>$a' );
define( 'NONCE_SALT',       '=U1,@Gdc/Wx5bb8W-1Cwe.e*B8-d)g|kF**b5~_hpS4AT N/l>Xl92gljLk,WYh}' );

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
