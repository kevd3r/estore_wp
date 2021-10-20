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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\kevin\Local Sites\estore\app\public\wp-content\plugins\wp-super-cache/' );
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
define('AUTH_KEY',         'zrHnq3QzX+Y3kp27u3lNSPPlL9V1AQpbXQLaS0eODL37iT5le4wv2hfsPnXAXR3I8fK/Pl30UC9q9R7yx79ErQ==');
define('SECURE_AUTH_KEY',  'rEjbwDOlfFpnAzeCzIcDTz7iRFrB17oawfLWH8oYFvZ8VSNlvooKMICKmb5T8U3SpPKHWiQHNNRW5bG7J5qerw==');
define('LOGGED_IN_KEY',    '2zKKdk9XCkdqlx7PrIU21cBDkNEkjZ+Zd9yg++UqzDuWUjWRHz2rc+Wg9qHlfikeywOeoGoUSy4h3sCNOPOOyg==');
define('NONCE_KEY',        'glDMDHi/tHeqMJ4kNR/Q/6vav4ias3CRBDnqBr6MbtZE0FUSo9qMt62ci6bfSlG06zuo9RGSbowF56+cWFS7FQ==');
define('AUTH_SALT',        'vWhRbuuO98xk3VS5/8RUiYjT9NdkzPscGbx4emAF7I5FZPTC3WqKRaoN7ZgNpt2KtzUYvzhsAbIdQgCXqO4jCQ==');
define('SECURE_AUTH_SALT', 'eTD8F/hBmMNtRv6+5TUITJAFRDv89aVVsGeXXuao/VB8BekCCStjX9CumTfobKcnYOYNSwz4SClKwl7N1v83Eg==');
define('LOGGED_IN_SALT',   'evPrFHyezxY4FGxOvhz5UUR3YvwLa8Sy0TZCLmJJ8axAEsLVv3rcG4IY65WtguHPB3hA8/igvSKRZeiX0wxvAw==');
define('NONCE_SALT',       'NjApfU9t599OgHuSsUlMzu+Ffg8ne/yd7Dr+9qkQijneiyLJ6e/732v0xzq31nmHimblV1RfBpkXuOCC2VgyCQ==');

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
