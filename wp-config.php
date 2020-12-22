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
define( 'DB_NAME', 'donate' );

/** MySQL database username */
define( 'DB_USER', 'don' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bpcqLZPwIC0BYqER' );

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
define( 'AUTH_KEY',         'M=jd6RC^e!l*^1TqxYrv8>ACS(;<{gswD*(sl=NQ)w.y<0RU^9}TAT)R;gT;s`~a' );
define( 'SECURE_AUTH_KEY',  'UXdg0f@oeHjL+%a{ 1;%0B6:_2gX %4n=|A`l9%5r>-d=m~Swdn%W1u8CXaq,R;*' );
define( 'LOGGED_IN_KEY',    '|c*x[i(HY#ry!zey<5^s}hRvJtx=GwHht=(}+:f<|Nk8dK#-m=cX8Gg@!{9n4n-@' );
define( 'NONCE_KEY',        '/Oi2iP g4[(k &W$3`4.>5+_f}*JTbd`lK_&-&<3{;}Lu<3EgBK7*EKpj&W|Aq]l' );
define( 'AUTH_SALT',        '}xLU)uHIpvy6E=B[0p]IDD0=dQQ<`6K8sO0g+YVDP >]zD{u_uD/^G]Jq(5AG^/,' );
define( 'SECURE_AUTH_SALT', 'k]dojRXnSJC +(4a+7<A;x*%ILpH@APxi`y$h]Ba8 Jm5s>q(AR.l&3r;pA9Iq[v' );
define( 'LOGGED_IN_SALT',   '#Q9NlCqN{2(50D&Yu[l=q4gL)>BKVPj@iSZQp:ho8hWrs=Yj]e)vijO(&c&PML2{' );
define( 'NONCE_SALT',       'e$!d#Ca-B:MZ<W1Ox2hFYh^cFlCY`MdMr&EDYqm:n:mA-E:(xdi{32E7HM8q< []' );

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
