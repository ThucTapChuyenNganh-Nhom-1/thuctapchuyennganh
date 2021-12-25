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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'EQYDc6goHTJ9y/2G55p+zdZ14nm9p7WXOcURcur0X3W5ceuOLf1V55qPS+hPrT71SKW90Yv9KSe8+x32dtnn+w==');
define('SECURE_AUTH_KEY',  'MFcs9FdE4d8zKdiAonksI9dI1qSK7q7yd98fxEuY09Pmgh0jsOuiYs1sDSw299X3XotcdT1Mwj11VWGki9lrXQ==');
define('LOGGED_IN_KEY',    'nRSZgSoCpDAz8MdOUdYemtAFJXQBo9cUjnN4MOq7EASH7TcrdiDqrmuvTsxQIYEdnDULuzPq6lahHfk1okJp2w==');
define('NONCE_KEY',        'CllwgT0HXX3yd0bd5yBf9c/Mdn7HbZSbhyuwj50wJTHqnpNh/LfTNbvH8W25q5WK0OC/6HjxosklsJqM/G7sng==');
define('AUTH_SALT',        'enlLSNY6kBIbYIyXr3A9MJSzU0UDS6ftFXDkKz0wnn1UwoSz2/wwWx5nour+Bq3KVq9+NvgHX4hBqHY8yPGgqA==');
define('SECURE_AUTH_SALT', '3FIsDof3nZPR+ZtubrJNGGw5AvQA1Ykg42DHkgsD3UGLRaUU14OEfWR/aRT4N6SqC8vDoEGNOMOKjudWXEBAqA==');
define('LOGGED_IN_SALT',   'iKL0qcBdgMhUzm66DiAYcHQZZyBp5FlvFQgeIudmP68X9wCLEdr4XCoZzLkNlclRGLI7CBnRhKP2VYn2idbB1Q==');
define('NONCE_SALT',       '6xGEDlduM1kIOp9MwPccMBPX0sBhv0HKVojeEppkl7juHk7Q6LNoIzrOkcYNcrJt8/g/GwXVjMkG8fqv8hIyvg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

$table_prefix = 'w9th_';

define( 'WP_DEBUG', false );


if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

// WORDPRESS_CONFIG_EXTRA
define( 'WP_SITEURL', 'http://btnhom1.vm' ); define( 'WP_HOME', 'http://btnhom1.vm' ); define('WP_THEME_ACTIVE', 'sage-theme');




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
