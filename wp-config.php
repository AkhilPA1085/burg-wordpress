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
define( 'DB_NAME', 'burg' );

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
define( 'AUTH_KEY',         't8 (,(*cRd#4Q=PhNlo~@5FY>vlA>)aG:-wCG:FNKA|84G1,:pdC+@UeeEW=7J`F' );
define( 'SECURE_AUTH_KEY',  '=D@,Kq)f`PcSg8Z6H,0Sbf=n]lE~`:PkyJE>R4q<65XWED|/8u9}#}7#.^?]?H]j' );
define( 'LOGGED_IN_KEY',    '?L/9>rb^|T7q.ng{cODmsxW7w+q]We8$q[V=*s.>sp;;N&r#`]?j5Hwa[9oZgi?Q' );
define( 'NONCE_KEY',        '-Z#*&bh-axYxVNzi2euvUb7?r;a>]QyMQ~*CGP7(^Ych:1):}g)_R%>,G{*53^@.' );
define( 'AUTH_SALT',        'Mmc.D5hzx5sj5)MT]j}eOeDu>wh1;4*=8,l?4u`S?+BUWg.7Dq^-wZu{Y?xU>r.7' );
define( 'SECURE_AUTH_SALT', '$=;CxYz~TmpVQ3WfbG|8]D:f>GT)[j_rDn=}3b,dDuO M_4:1R$1^8V{2293t0AC' );
define( 'LOGGED_IN_SALT',   ']|:Pcw?R*cQl56s+%?g!]]/VRPv/z^=}n3NPL72C{DG6HY]c:;!0SLoXb+8mQ+:G' );
define( 'NONCE_SALT',       '~q{ DhL`djwa5BdBCGB*]$s*Y_HNw}y,h^;/vwX{;auNgKEaRM/K[r<!$iKq;uLG' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
/* Increase memory limit */
define( 'WP_MEMORY_LIMIT', '256M' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
