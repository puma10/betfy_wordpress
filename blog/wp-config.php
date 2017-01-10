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
define('DB_NAME', 'bettings_wp842');

/** MySQL database username */
define('DB_USER', 'bettings_wp842');

/** MySQL database password */
define('DB_PASSWORD', 'p78[5So6z-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'nvyoximj7ft5dfnnxxfqr8qbsjjmx3ri37plaiail7d5wzjgialvgyd4u8t3ufzk');
define('SECURE_AUTH_KEY',  'mz8vgxi0uh0ktxehcrbdmw9p2rbgwsvrhacq6g6yzkurkfuryvfmuwxcsilgyrk3');
define('LOGGED_IN_KEY',    'aqbeibiecfeqzes3mau5ltshym3ckzzbh4wqfy58el4q1fxdfwajqhvwybsmtdka');
define('NONCE_KEY',        'fxkbqak3xjksjws9ckpbcvncpsxdgnrx9nxavnnb1ev0hti1wo3deifyl39ifqp3');
define('AUTH_SALT',        'uvznmbomdoh0f3nzbsdtajjahbrmtuobig8irp9molsg4rhdniv13j9looblj5ie');
define('SECURE_AUTH_SALT', 'lzrq8qch3o10nwn9udn6b6b1e7oh9n4vfi9oe1tnw6akh1rhkhf5ytjlyonofmmb');
define('LOGGED_IN_SALT',   'jujerodbbo4ozig1h75doo51dduahuobsqpmwdnumgvb0nlvgmxemau8vwlyvk5h');
define('NONCE_SALT',       'vwjpqy2niulxtlg2214w8cm6egszjvhg7xfrejvtfmawaffyeluhfze3snetcar7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
