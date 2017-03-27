<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'falconsf_wrd2');

/** MySQL database username */
define('DB_USER', 'falconsf_wrd2');

/** MySQL database password */
define('DB_PASSWORD', 'Wmedn0LNIk');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mQjvfsbZNz8wP2NgGKQq6sPaOKiA9xDCSXr8M1Sccykwyatw3NpFFn2WPAjYTHu3');
define('SECURE_AUTH_KEY',  'ihwSz2PxyRXKHURktChKrYPib16oYncX53ctSJewp07ewd5exbajbiCazCfcc9tU');
define('LOGGED_IN_KEY',    'cMBOuinq3lVejPBdSPgiqOQbCqQeviFfBG09c8rmlS7CeexhZ4TQDSOwpsixAilz');
define('NONCE_KEY',        'RL5VhoKJizP3SuTZH5A7MpCP1mD8X1KoJTc3C5H2TOXjsf4l9LeM5SqOgmIxDver');
define('AUTH_SALT',        'N3ctUfOXW0BF7UyFK7uoby9hKtQ5HLkKhgbVCBzkvRbZMz2vPwGfr7AOzmlmgWjd');
define('SECURE_AUTH_SALT', '3IJDKeOpkqLbTPJQXgafwsHONK2DXAZYVXT87u2yaRICyWNVL4CgFN7zGNnKxwHj');
define('LOGGED_IN_SALT',   'tcjCG0o4qv4rvvpP9TUuxXDe4zSbVDz7l41d2N9dDLam3tIgKTEWIljQwyJx5YU5');
define('NONCE_SALT',       'eR5F0qmu4mbhxozbXmJjgf93Eb8hQp7mFuEwwuylNtoVdqGPkSsVAIo0HitfZa9Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
