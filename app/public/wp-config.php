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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '8w3AzN0dYx22cDuacH7N6L8Vuv9WDOfSRIxhnKZJ4YmoEuqWPiFmKvw9AV/1V/MM9T6H+Lk1NT1FUUEQVf31Ig==');
define('SECURE_AUTH_KEY',  'FvkSOznlsSnEK9q7W3DYV/XZIQwcFoTqQD4AvWsmeqY7ek+c9Ql10p0qXG5L1HsRgS/AW2W2Gj4lAN5gkW9GgA==');
define('LOGGED_IN_KEY',    'zwjz5T9t7EhuhXJAz6BtNPF6grKVMY0dU2KRzDESnwx+3Kmd0NHfdGctaAaHc5D0E7UsJGGegLcuuWT5ZZ6eqw==');
define('NONCE_KEY',        'OGDN/7Sw0+hP+sNox+ZMZ/d+O0shTo/kVXSK4MCkUen6BUJ8mMe8cAbxmHqDU1GXEk0iJieBtoPnV/hD7zx5Cw==');
define('AUTH_SALT',        '4BmqTsYE3PC8nBReXv183yTU7gFYsmlTIHOVa+aKZSi2tnPsUvYsBcXezNIZhnBpl0ys7jPw9u6UFAsLqWFm4A==');
define('SECURE_AUTH_SALT', 'zh6L4bZxX6fSJQFz9fGptbfTwPoWXQSYtf700m9YC21etz1aYFOaxzA4mkzD6FhjJjKZk62vdvfltoOA+fjT0w==');
define('LOGGED_IN_SALT',   'Q/bYKQG0M2rVldYm2Mf55ze1Mh+NucMYZrd7rVQUsU2Ah6ifKoixW9+NEca3PPSF6RZHZhKnlgorTPpGWG9b+w==');
define('NONCE_SALT',       'ltbqtBi6LdD5hKjB7oFuT/oVQNkRY6zfeGvd19Uj22MHw8jBc/C48pU7Fu4Uq5N+4IUCmnB/dj1HoYMIO9ozyg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
