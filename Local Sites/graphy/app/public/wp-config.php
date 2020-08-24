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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ziZhi4d2qnl99XFdjqiBO6GJD63eJPR0IIrO0qt1VbCJWnVQR5TRlMwKyp8O0R5UZrUHdyouBw7+rIRVhjYjxw==');
define('SECURE_AUTH_KEY',  'kVuP6pUbyOMCH6dmqQnU0AtJollWd5kTV328OX273wANHVPyiA+ybSkXpP17ECj0ASCN7tzmR2YRhOnk3lQ1gg==');
define('LOGGED_IN_KEY',    'Lrb3yV+57SsWAKjifwj1IOj8W8pdhYl+C3t481SczFBC2LUpo5wbA7XU3cor+M6De6xqE9q9+5XbiQmH3IT/Cg==');
define('NONCE_KEY',        'OpqfyAvegBvc9enok97Q0VMwa1IyQMmWMFOJlg5Rw+QYRTkgKti40SWZ2DomHbKDC3D3jxuuSCOdSDiANLy68A==');
define('AUTH_SALT',        'OhAstRtCnllcIflRRossdF9n1TyVUe9zO2qwB8EwEI/jUf1lNPiH4Mtfmq0iuvy16AkL8NW6/PkhjaZxr/oeiw==');
define('SECURE_AUTH_SALT', '4GrYlbiiPF/Q5PHCiUb+4jUAuf2tj/OHgTF3V4t0SNbdPuyUQqf3qYB4mGQ123bt3MihpChmA8So48pZvjapNg==');
define('LOGGED_IN_SALT',   'Lm1HZXXiKlRo8zQFBwJiqjLKnk9qhOsIPs9RwnYf4EE6Gry99G5b5fraRRVllcmQ18Q3S+B6izMN3zjAUTcvQQ==');
define('NONCE_SALT',       'grtC+VFZD6KmgXLzROp6szmy/kRq0rj3jZx415ogNlHVavV8xiZSQ3xRpQDpuyanpYhqGWpLXZ5FtB1k/hfufg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
