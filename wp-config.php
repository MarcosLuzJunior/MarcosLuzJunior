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
define( 'DB_NAME', 'marcosluzjunior_db' );

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
define( 'AUTH_KEY',         'c8M<eqZK(3iAS-;kwM?=8@%Muen S!Z7&m@4 `$kd~Y! _noib1*was1Qfe9Ut@9' );
define( 'SECURE_AUTH_KEY',  '*;GjFW,Y698u}Qo6y9%,MLCT:/==|8=3%_vYC[9CL2CweNBh9^<GP<saQ+}w?f5p' );
define( 'LOGGED_IN_KEY',    'Q&ziY^bzMIi:}iSjVqEM$P(Ks_C.re~!)|/XF_stNjIhgY[:Uz%bYLAopZ+~FZT:' );
define( 'NONCE_KEY',        'y?I4JQ*];:^K.MRiW%Mx0xs!Y0 6oCoxyNq7+fugaYppD3ipb0cWUDzvK|v8S^dV' );
define( 'AUTH_SALT',        '*-)?$2j[P$VTnc]dd4Hq;2PLsU5;7VHpNxc/lSO[XE?p#i,fM;/v2u1z6if6zN&a' );
define( 'SECURE_AUTH_SALT', '+f&$Mm/yqU5T0Oi-F*5?k1CSCu&M?x.9AZ%}IP}3O(M,:t@ot~]<PRR4Ydgq5Z3(' );
define( 'LOGGED_IN_SALT',   ':fz^A08ct{hZBHu8/?,u]iXG{~%lJjh,(N  aRhC>,h%cEq(i()9m|^DpjD,89/q' );
define( 'NONCE_SALT',       'k&>`]tltog4[h(]`ynK3TaopH+x~Z*n4)B:Jw/5y}l4PckvjWRo[In[=w0ti))<`' );

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
