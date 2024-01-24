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
define( 'DB_NAME', 'wp_dewi_shop' );

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
define( 'AUTH_KEY',         '0d[uuLBnYlfeQfZ&J){LH|qhHJD-V+l%z7p>U4s Mg~b`K`Xz3nE{i=Uu:W#E{Bu' );
define( 'SECURE_AUTH_KEY',  'Jf #14>$V/,<E`@O/YP-9[bb+xyb%x[fl^A~SY&N7pQe=o`%b@#j^:bNE?~|`.07' );
define( 'LOGGED_IN_KEY',    'ePDnp2K-h<e`M7[h>D$;P3u+`ODKB@=gG`:TO,SDc.s~c!XAbX1h#S?^RIB~<y}[' );
define( 'NONCE_KEY',        'B*MJ$</J LLMOv#t:V7K&AoZ~YZTFRo|u_UA>V{*0FQRb6<NAN}]/vSPAk$-NMXf' );
define( 'AUTH_SALT',        '+zKd7 XN7b_y#t6mqJo0j:Jfl#,$ZGlY4hC5[@/BJ%4;]GgCa:)c*}]E~caD/`Cg' );
define( 'SECURE_AUTH_SALT', '_#e9fDF)**_gl>dG+6i5^vP=IIZ1b9X+ pP^5{.?)!`5-7{:-lf)lA3:Y:zxq}sv' );
define( 'LOGGED_IN_SALT',   ';BDo}h|{:9<j<7A]$Kuxt?b _%R~W@c{&$$$]ipLtLuCB}J.z]_x)gR`:%|#3R4s' );
define( 'NONCE_SALT',       '8#eK9tw_6kQ2!fCW-=:K=Fk*vdr;t(VB1=F,1zQdaO_S2<&x<~ksy},|RRiBj{PI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dewi';

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
