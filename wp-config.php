<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'execrecruit_wp841' );

/** MySQL database username */
define( 'DB_USER', 'execrecruit_wp841' );

/** MySQL database password */
define( 'DB_PASSWORD', '2F.W2.)SPp]I3s' );

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
define( 'AUTH_KEY',         'nhazhjehvoibqunpeiwccxlpxdiwof3okq8ojbxehfg0rtypekdrtpofldre8wkl' );
define( 'SECURE_AUTH_KEY',  'jectcy3a7jogs4tijf9qsomykibmfpsfnlakmiya7ccu7siimaqr6guej5pjmyat' );
define( 'LOGGED_IN_KEY',    'zeeipp6nsqtagwn4skymdhudwflnd478o5cpp9k1ezfw1ihremzblgoigvjadmux' );
define( 'NONCE_KEY',        'n2zvgyhztnw0egypwz16ehbkj9zwmuksxgkt8uyq2wkavinc17mbkbv2zvbfiood' );
define( 'AUTH_SALT',        '2ajuiwxdzht2kbnb0ll587f9d3ihci5ytv3ws09cybj59jodx6cxunfcyg4h9spl' );
define( 'SECURE_AUTH_SALT', 'mtkxbju9k7fammrlesx5exm1nmopkd2qccwjzux66acguqligge9gmjd9lsbw9ah' );
define( 'LOGGED_IN_SALT',   'szkyva8tfodqwmljsy7ujshqybah2attbicp7wp5laoosofnczb8rjptjs9ughb1' );
define( 'NONCE_SALT',       'uyw7rrnv68juuj6mcrjfbo26lto80xccm2h2vngoymt9upa9oowfxqm2e9w73tkj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvk_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
