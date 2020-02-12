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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jordanbu_wp3' );

/** MySQL database username */
define( 'DB_USER', 'jordanbu_wp3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N.q5wf6dqqhKcxwYxww12' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'loxoLoSTod07RfGCLmKzvUEN9RKyQMGoGuNzGZ6sPzIDk8bF4dFEskB5WX16OTHp');
define('SECURE_AUTH_KEY',  'H0ki4FcP97BmoMcbVH53P79GueeE81cLKETT8RasWzwzI2dpF9n41h4OmIuCwWM0');
define('LOGGED_IN_KEY',    'pubKvXi33BeYnCVvtw1FckkwFKASwJwXY6SK5HGRIscNm9L6r2qqlExVQ8WMW8Ez');
define('NONCE_KEY',        'OsOWIbRR8WYRSu1H3MB7O9nshxDbAVqpgpVUnZhMRJWT7yjF3cSthzqlljmHksQE');
define('AUTH_SALT',        'BlqVYfj0I7HW89VpU4KhPxb0V9ACKB5jexkhVdj3sla971uPXEodkXqxmx7SScIh');
define('SECURE_AUTH_SALT', '5DGUFEtCLW2ZKQsExIy8WGpUkbKFftb2yfnKd129Cd1NVGSbvZBPFLyO073epMHj');
define('LOGGED_IN_SALT',   'F3Q2IarUezhc6Ll1CTObKekEKSeRdqDbHtpW8UGC3WKoYRBEtei8rVmjkhmMADP8');
define('NONCE_SALT',       'LeHeOHQfaCuwuzrtDNilFC9Sz0rWyJIlNMHm0YF0jvQE2nlG0jP1u9NPn68YX3Vf');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );