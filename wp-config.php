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
define( 'DB_NAME', 'nicasource-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'FQ2QYc5PAXgxgdXLftApUUcFT7IE9NWsWLMsF3eCITjTfoIdis3yAHVVYtkuzVF9' );
define( 'SECURE_AUTH_KEY',  'cq4tUMrBHtXstJxyY5FjnFDIAv66rYLhQK0NUqoJddFIVtX0k9Vne80C2pcQlj3O' );
define( 'LOGGED_IN_KEY',    'x13GsuK8u4iN6WIBZeq1YbyCi6M32VALgNi4Man9InS76YWlJIVkpmfcBKlt1l6J' );
define( 'NONCE_KEY',        '1VoaAMqsvfdwL3P0P3pb0bOXGdAkpG59kOgmeF91dZaNWwr3SGwce47b0OYfphG0' );
define( 'AUTH_SALT',        'sPLFJ57Ovs8gr8WGEPnlkb5h4koBNrywpOeFHaTSJAttM5VI2F844LXaHTA2OchA' );
define( 'SECURE_AUTH_SALT', '8JazgeQqQBoyJwsYb4FJorSKqhTmUq4fWJp5wjOuflTz8dG8NJBLlDWhJyVyktcM' );
define( 'LOGGED_IN_SALT',   'yU3vwiD3da4PWoiPptucNud1j1S7RXAk3jdTSZKYUs1fdXnm2e4yCaaBKRA8ZW0M' );
define( 'NONCE_SALT',       'I5UxqOR2oOBFziy70dDvcIrbm9S9ebLEb1Ey3aKvsVLuel9GNTVSuQanHsPhuMf3' );

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
