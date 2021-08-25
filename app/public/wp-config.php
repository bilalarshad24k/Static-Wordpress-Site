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
define('AUTH_KEY',         'rBp/81GLzKpJB/14gY+gU0Te94emKsWodiMoKPYocP1o+2h+IaQCvfW6k2HHkwLax6B83JtOoRoTbvYiYkRKtA==');
define('SECURE_AUTH_KEY',  'LOOenFRVkwRgMsXJgriz3t3Deu0FJ3powFnmOAKdZLfbbA74mXz7cIDwbYUncvVV6ZS3OxTjvLqBv9K7tYnjIg==');
define('LOGGED_IN_KEY',    'adCPOoBMKfCO7LN5ZQa7cBGZYCEZ9HiaZHhA/7rpbvKAY0Wwjx87zWCBA2MyDHMSUNr8oYny/DUIFXiNvatanA==');
define('NONCE_KEY',        'VinsdN6aeq1dtTXd5ist+VOlP6TAKHX5pHaWhjwJcnMELnyvjx0s1ZHKylzH1G6jQ3peN86jSiWhRp+GUg+wRQ==');
define('AUTH_SALT',        '7zKXMLJ9CI5xkcbTqIOtJ0Qe2+h7LLmTeUEbvjNToO3qLfMZJwJr6/h/qUIv0YUsqsXFFAdNVvu80eeicwYvJQ==');
define('SECURE_AUTH_SALT', 'prhz/F5NETa1nYRTuPmiNs8gR8zibWL5OZXIk74d/NmEngrLNhwwkXkYlbW/we7jyP220qOEjBW6akxO7U62WA==');
define('LOGGED_IN_SALT',   'knEVJpkJXA7zYTz0TXo2r2AbxaXKCVPABgkG1LE/OQoVSlTWO/DGSWJIqBcQP0MZStYvAlY40R3h6OFTbVDUmA==');
define('NONCE_SALT',       'DGhBgNqKINWRKe4T3a9k8nvn9vdmnoScqd8duWzGakzJoS5WFBfSlHEWe/pMsXA3E7PFPQOTjqsp9AGaIeQQTg==');

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
