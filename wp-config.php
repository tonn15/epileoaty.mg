<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_39555925_epile' );

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
define( 'AUTH_KEY',         'mux3vfck6vlgki70rxm8oy1zclgywzgbgh90l9z2rzqgpvxf4oilfhgvgefuqwib' );
define( 'SECURE_AUTH_KEY',  'fl2xe25v6livc86tbvrwawydpj12lvmcof8qkwzd66y8nt6edmdixzqjflgd7i5c' );
define( 'LOGGED_IN_KEY',    '5dktn2qubi9vli5piw9muaqfuuyjuymrtrmwtlsjinmtovyd0qhum9wkuzlwr1ub' );
define( 'NONCE_KEY',        '5nt2mn6hljidesb7xmkmxll03x8kfw7v0ou2bes3odovbb0xcosalcr1qchynj5b' );
define( 'AUTH_SALT',        'g9xb8sfwx3kl8vlfijrlwpbk7kaosaymyfvajniph658ha5dw1lcqjo7exangvow' );
define( 'SECURE_AUTH_SALT', '3zzmfz8ekbthmlwb9n7yplubb2mzuotvpiyjqxgq3osiqgcfistndajqsf69y0zn' );
define( 'LOGGED_IN_SALT',   'ud86frzd4la95pcbg425f4wjmzdfi3n9sy1kpzdtnmskvmdtrckwenice8pnki81' );
define( 'NONCE_SALT',       '3p7fv0ppkbeqmpevgrsirppdekh6qqmtgvle7cxdfhlfytrzk9txcxlzplmy8ayr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpmr_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
set_time_limit(300);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
