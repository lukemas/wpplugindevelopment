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
define('AUTH_KEY',         'bV/ZfZBGKEhla03uihFcCU4ciJdXHmqm+Hc8NuPobS5Vj04w/IBH7rCXzn99gdRcCPgmfOM68YeRfhoLXc9Xlg==');
define('SECURE_AUTH_KEY',  '8TsbmEtNfs9J2PAF1LCHb65yy611s6p7H+KVSz6sNhopCNryNiXfPDZZNpdJtKBKT9FMXKrgJAjdFLgaN+GzbA==');
define('LOGGED_IN_KEY',    'qCs2KF1m+8WVu1sLjPWgJFe99xSHgwED4+Ccm66h2k1nplcmtHOLB4KEldCT9Y8rH57SQfZtbt11fpLIdV4JjA==');
define('NONCE_KEY',        'k5VGfdT996Ye1OluvrfXMHc25n8ojrutaIs7TE6kudPP0v3BC6LAe1U8aGXv6d3oeRpzm6dEdpNmp+hlscGKyg==');
define('AUTH_SALT',        'kf3yl4Wy5y6RGmXy661ljpjOAerBkp5uhqyGoXCeX1SR4FaEtq8x3UpybBfUOl5W0mC3/UV2bqbAsedu4qTrcw==');
define('SECURE_AUTH_SALT', '5rikBvNAkNMwpZFIptROeorxziGjnyaRixKU4SVaAL0P9qvf4wis/s2et5gfl3Yssh8CZDyqn9APDj7egNwEuA==');
define('LOGGED_IN_SALT',   'WtkFrlQFNlxX0p/tYvmwPcJ653xNdM9kXC11AlEQgqKxMFfBT0OPu6AfbQTR/eUdJEJK9wGEKkzwE6jeBEX6qQ==');
define('NONCE_SALT',       'nGeb5bKJBXtfhkEQw9dOZinhLoBv48XqmqjD6IKPNn+mGQH16mWomaPEt2+VyMdr/1IOJz/tqG5PJO9BObr3yw==');

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
