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
define( 'DB_NAME', 'myshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rkEUoq?#k<N38dHevyYv90>>R-U^7VX{NC{~!K2H39pANJ&l1{ix@2c=szV&=l/Z' );
define( 'SECURE_AUTH_KEY',  'JpREjY}dk+0yvAo3n6Qk1.T*vv.ws?+Xh0VybmpOX}-b}|c&~ac l=77ZpWO[x=y' );
define( 'LOGGED_IN_KEY',    ':)ab4U^T(~]^^rXU`2?_edUCvMe 4B|laCR.]:p1WJ-&%t44YLrX`;w:LwCIbcnr' );
define( 'NONCE_KEY',        '!}NOIN&<ab!f0[`zdaPFEe+FgiF#40U0|d@?VSxvr4:b%A?>n:F%dU=P17vOy))Y' );
define( 'AUTH_SALT',        '{/3g$YDT}4?]Hb;{Rha)<u<fym3ZH}%Bh:)MZ&[:#*;3 }ye)[+BgjeC?>alz9sH' );
define( 'SECURE_AUTH_SALT', 'a9[FGNwP8zhBCyD}xY$ M3AU)iexQE,1wn_EsUE+zdBjw#qKtLQVP>|`Sk#fS]vs' );
define( 'LOGGED_IN_SALT',   ' ?|nmoJ|o3@D+[[y6F5k176970yrHl7to=`G(4H_B[ZY-[~Y?]b0A+j;67dA=;to' );
define( 'NONCE_SALT',       '92q|$l!y5/Bp42rz_fw)Mow?u1Qmhe.QQ?;Br}oS-]]fs4X7:^_FkZoJ5_Sg(qN6' );

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
