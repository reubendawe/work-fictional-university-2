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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' H5Wm*tZvK`W<)AfqFiQn*V+SAS?jz_b8;K6Q[b4J9 f|IN|Mp|rS5t&ipSkdmC<' );
define( 'SECURE_AUTH_KEY',   't>6q=4ma)VdT/n|UOh~nXS3eE>C(2Pt%sc#Cl[[+$sKhV1!RcgD.2wI9b$DIr7Da' );
define( 'LOGGED_IN_KEY',     'u*x`#Ku,i}8-ToiE!1ST!=}~$hZv]<i>9?dcl]s{.||S7Ojcok< Y4O}WAXFC&9`' );
define( 'NONCE_KEY',         ')W%8Pm}P></X8Q,35{!M8SF17GH>cd&|f?]#^X!:o^A!=m8g:@E[0^dO|n}IJcT@' );
define( 'AUTH_SALT',         'L*ZSDQKF;Wv)k1z#Gmkdi{..#_O44cHuY{|`Lg 82W/-!z0y,w~66}.a_=-#Iwkp' );
define( 'SECURE_AUTH_SALT',  '/34N{q}ZSE6wq<]aTn,}MEJFQ:cjT^F CS)9d:?G$$ttp/H-![]/HoJ[|_1`|VcZ' );
define( 'LOGGED_IN_SALT',    ']9/fTMm>t,:I^[B3[e^r)!fn6awlK*;_Z`md/7)$ +o$P4o+5qo6 :u!b/_33{u-' );
define( 'NONCE_SALT',        'vIV]?nBD_~=2Umm0AD5B2=Itu@Zbaj@d[%5Zk_{N5X:iq.!+sxTy^cU(2ENhS7CG' );
define( 'WP_CACHE_KEY_SALT', 'V${ybQFM#b 2b*,pYO|cf>%Wu_<tRRk 59XuL>0_<EX|oy*F2]NSR$)h/kUSqZ8)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
