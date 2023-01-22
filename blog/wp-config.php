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
define('DB_NAME', 'u143578488_ubamu');

/** MySQL database username */
define('DB_USER', 'u143578488_amuxy');

/** MySQL database password */
define('DB_PASSWORD', 'n3ur05p0rt');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'otnn85G81nmlR5m7c1LVz9EDTqOMa3yFSTxw4W4YYvuVs2zO0VMYM6uj6MjQIBmO');
define('SECURE_AUTH_KEY',  'dfOdARx379fRKKO8fwQYbH1HcGIQtv4K8rd8e4iLl9imk3UgENsS9zpXEiXgRLGV');
define('LOGGED_IN_KEY',    '7blVdNEXjtwt7nC99i7p6B4xOzhQlvpqJhyGOaPUP2NWnHF672W4MazEZVDIQwqu');
define('NONCE_KEY',        'Sf3twg0oSBdQpGoCJlJugQxYwhhILRDsZHPmoL4nHBv2ChxKAIcI2lepC06dEvfL');
define('AUTH_SALT',        'yAsdV3wI992Yfm3642bn3mlOIL0G7mutiWCJwBMdEBcMZeCnGS39EKojhAMNdyxq');
define('SECURE_AUTH_SALT', 'nQisfmEnbKl769sKW0zGO78I8nxbTpOboA3FGLx2xwo5MQJ5NTye9Fy92ehL1x0d');
define('LOGGED_IN_SALT',   'lBJrKE37AmbRUUSk61gYQFshOkmElKVNZuXUSWQOi9pJJW6jgaQxnXUPV8aKauTu');
define('NONCE_SALT',       '5jBfFnoStQ78RoKLmy3yrTOvD71BwVo46JLlw44mtQNveyO4nTyl3Gw9sCL3xCKy');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 's4do_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
