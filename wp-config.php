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
define( 'DB_NAME', 'local_idm250' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q@Q~bS`^xgO--*A7L/-G}%tX7fN7rc4~*G449#ySt`{KJgyss}MNAE&CUZ7(U[9p' );
define( 'SECURE_AUTH_KEY',  '8D&}k61fEy{Sb4b{<izrMG_]lGW3bwPbJ$R0,7|rrm=Ofg6|P}w?:2G+V_.4#q-{' );
define( 'LOGGED_IN_KEY',    'RA+!w9X{MHgF8Uo L%fLhq 7 7db@f ,V<kJr>::R/Mx5*8EUJiDojY4Yt^5ei5.' );
define( 'NONCE_KEY',        '<+@xhZU!bIjm4VNzkHp;C,8x5iwG|VL<sJ~C9h>y+:*|!fvi^jv%kg},{m.a#fRR' );
define( 'AUTH_SALT',        'rT kk2e1gh<=_WeU5Nlnw.wLI0pr#C&}}/PlB]:fBts52p :U,(nfJC=sC|%~s5$' );
define( 'SECURE_AUTH_SALT', '@}_CWwKT=9zfiS9R~Mfk%WQCOh!WR(m!e22sG#-zA=tO<gei04e0IrrTUszy_Fs<' );
define( 'LOGGED_IN_SALT',   '::~zt1ty~H]w1e+8m>voX!z3zK<5dh|G+Q$$+F5k8ZMUzx9o,E@/z=5[p$}:jo6e' );
define( 'NONCE_SALT',       'UJ/GMt1%e}p~7:pg}zui.5^@1p:0K4-)g[2_<@npX8N<//tG=e?sZ_p_#Pm, hMU' );

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
