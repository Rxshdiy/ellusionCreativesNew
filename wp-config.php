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
define( 'DB_NAME', 'ellusionCreativesNew_db' );

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
define( 'AUTH_KEY',         'N=^KGR0BO7tASE<2[0rbLad _Twm2!TNLb3.Ozm2SxZDJ]6*z%nmBvMLiPDaq3~G' );
define( 'SECURE_AUTH_KEY',  ')Je_+{*Ja-r}8asn&;WX>Ch*Ulc? ?}M{L-;%4hu0?KKTUkDR}frKZx~ZQB.SY[S' );
define( 'LOGGED_IN_KEY',    '?7_MtX~R/%jBe3_Rr@im9[c^dSRO_^a1^eHAt1|-_{y..?>o--~o$KGfa`u[Ox%P' );
define( 'NONCE_KEY',        'Z`c?$Yehs6[]m%q$[K:6T$k-+JKTfiQ8Z}(sg?r>Y(:dQtmLY?q+gz*tL _cPGGw' );
define( 'AUTH_SALT',        'B$7O$UWT3Gd|1}OZ1P`dpST6SgA#K}cr!smXHeE*G83Z6.aHyA=.[Z;UZr/>.a+=' );
define( 'SECURE_AUTH_SALT', 'C^TBl-2sr7Iv&9rL9]=iPYH@uDOjISrj$V4+%*%raK0zT2IoLhq[UPm_QgWufH7I' );
define( 'LOGGED_IN_SALT',   '^0+|.Q*ghp_ckKpyf9_#{NccAyFz3a^(2R3Q lf@S9oS{r|4V{]u~7&s2>9*3?^>' );
define( 'NONCE_SALT',       'x{at{U4igYY~-FS+sGuS(&d =v?CBoTcnt.9JH:@!~d4.w%<8*6J/@Byss&!GBuD' );

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
