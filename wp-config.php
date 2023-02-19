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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'a0ugSr5}`U@56kb)>bD0p~cE]AD.iQnJw!TCZdY,yGUy~`70Pxcnv[>vkF*hDxF9' );
define( 'SECURE_AUTH_KEY',  '1*MPYpE VdS/Gm;rOvOCy<b-7II5RUVu `05YB?nRO^Wc=xUF5{8v>G_2kTc;H!L' );
define( 'LOGGED_IN_KEY',    'F]2*5&.(e_~7x,39RZFP{zO&I:^87=p.r#j~l(ES_(,]p%(vVxo}(c&?. 1%F^1t' );
define( 'NONCE_KEY',        'G5Q{ysW1CAAF;m&OKe?`yB5#Y2_2UqnoaTJ!qKE]:k#_{sTk9)Vb>a107>=mb.l0' );
define( 'AUTH_SALT',        'e@&/Cx,l9-3(Ls:?J(N!X$Zb)@?)^st;< jJutj2:*5azh@g%kD`wnxqNs{E~nZD' );
define( 'SECURE_AUTH_SALT', 'Q`oY)!<bD]a?2T =`RPJ8Z.ZZGXL8X7GR%P;% xChx_Q6*pN&lv:V9Ullv$mK_{E' );
define( 'LOGGED_IN_SALT',   'GnqGQDzcdv|a(k[YbK|QZ-1KZnA e5GQx+w8A2Zvic0!7JSf2JEC+.kuN3AP9`1P' );
define( 'NONCE_SALT',       'JF-WK-{-7*E6bJ`f&Uk)^H;r+KgUwq9p*2&yvP-IJ+=}49-K=R}AR+#!L*- g?`O' );

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
