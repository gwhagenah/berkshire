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
define('AUTH_KEY',         '5Q0bhgFfSGaS85iVtBQa4klfrJUFSQ6Bt7DmSpC8ulFXba1SxlVyP0vjn/Oj662VWdD7Apvi30ick53mp1CzfQ==');
define('SECURE_AUTH_KEY',  'zFI4G2f5AOfTE5cIB2zBthZqVOeZ05j/D1oilbbkCHfRAhRAqc9dI6i+SQJovXRA1l8ExU8DhbX6aA0VqkRxww==');
define('LOGGED_IN_KEY',    'otU4K/S0ra4g2tbEeTbzLW1OkXROKvd/pmXq9+K7nf+NLMTrX9CZ9pSDWDCKHH5xn7J9bM457r8jQOATPsH+Vw==');
define('NONCE_KEY',        '0lJA5SsCw+dCCraI///OeQgnS1BYSY4iEYxaVPTlcrQQOdVdM7AJttQwAjwz+Kyg91KKjkzL7zQ/ixLT/IYK7w==');
define('AUTH_SALT',        'u7SOpB3U/lEmRFL+EjbOBNbj5bxuRGRB7Xtk4Mc6G3Di16pYgb/vt24dsQn42YhDlQnOK/DiUHVUz1KNzWatJw==');
define('SECURE_AUTH_SALT', 'FRamcG6xf946yi3ZYiugzmD077E0C16FEM+3vV6GTc0isGF9pG9jCG043ItMbv9ZuVJxJCv3DYJHOB1ZU5v8yA==');
define('LOGGED_IN_SALT',   'CiJU1MdxufWpO7JR9ucB/KaCEWWQX2HQV8ePuPh3ueJ4aBkQPg1v8T+P9HI/eMFtAq1sJoTQMiD8Q74bqHB3Mw==');
define('NONCE_SALT',       'Y+zuwgIVULDNZbORYmFjGwpVve+bDfgPiKKxWwOu76AfsnQm4WJrQvGY/dD6ZAjJ0I7PzHnyEHk3edEoURmQdg==');

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
