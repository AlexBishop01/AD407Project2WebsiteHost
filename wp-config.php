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
define( 'DB_NAME', 'alextest' );

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
define( 'AUTH_KEY',         '9)p;8Di%l*`%9qkloBJ9_TZ~Zwc)Mx/N<y7T9ni*#rhkS 3wRX-RH3-[$]V(cJ?T' );
define( 'SECURE_AUTH_KEY',  ';/,f6r7O&h[*_[Gol7jP#EZT} 4=`5&M`Cn>_hC?w@$s>*#-RrjmRJ;3ETYf&+oQ' );
define( 'LOGGED_IN_KEY',    '2sON[hNl,w:7NNhKMCy)w.Ky-Mh:2x8e(X_]C3q,{$n[05>C?.j^R&xZN6r:3m`t' );
define( 'NONCE_KEY',        '(|TDo!(/%^rbAc<,{@Lv(Q6XU0NsP7*pSaf^F[Y$L_{ZmlrhFdzSbE|qz+FT#3gi' );
define( 'AUTH_SALT',        'HR?PA4Lp`5L|}H-{w#;mv&x-iTH(sw~2)FO[dnP|!YHaIUzwmEhukv+D.4K4~6U+' );
define( 'SECURE_AUTH_SALT', '+h+}S;)/T Ci;c<23+SV_Mz2i-Br_Rw[1>/&yi/=De]Pvyi^p[#&UgS95W(kQ-E=' );
define( 'LOGGED_IN_SALT',   'K-QY?TvUo@A9M!N-5%Xh]B0QY?r`|<bU%S2JM$,gw&YGep>$b0wDqtm2h.t=T:;m' );
define( 'NONCE_SALT',       'V9M&jziEt!wvo<,Z]PO2``(.g0fYb/#t00rp;vJAU#8B4cW()iEg7?Vnr-sJ3I:|' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
