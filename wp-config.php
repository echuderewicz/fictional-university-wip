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
define('AUTH_KEY',         '8WRzXqAJVN0iy9FPvlueQzf9PSuDyAuOdgGXBSsFvFQQRydvTxBaRiYg65y7fPYmJoB+UAciWwO3nkZA84xPJA==');
define('SECURE_AUTH_KEY',  'gAH5SRuYsEp8dTodqPsLozibdPB1q5PLgqW+oLR4N1aYSZg5H0mGyi7ICRFKWG8W6RqSuswu3lGaBlec2B95uQ==');
define('LOGGED_IN_KEY',    'bDmlGmZGEXZm4H0YpYNp8tlMysJOCTfjGKDFyv1ud+bXQyPyBFMOLJ9P2a07E4PNn/rAi9LYjWNGTRflPkrj7Q==');
define('NONCE_KEY',        'RpoAV+jd7PvVqegEq9dqEU2CWwPgdHnDco+1oNNQ7BPmHGhF5JXNqueRY6eesa5HMhqqiaWH670Wc+VFdFbMZg==');
define('AUTH_SALT',        'L/fY+OjV2cVpv+aAGbQ+2ZA/NN7XSl2BSywr1iou2wOteDWFTD94ZNr8epU6/If6ijQjvckTMwbFwfEaR+RzFw==');
define('SECURE_AUTH_SALT', 'yYdenLIcpwMPGhMF1vuUXkGQL3ymDmUszrPy8wD6UEMGJK/0ZNpNOwogJClTjk8wJHrDlOaow5Sy4FWeDts9Eg==');
define('LOGGED_IN_SALT',   'NfUnroFUo19+rYnPS4SVlFB1+dCjQoY+WgYOEvoF0MwaLYc83oTmhujTWA1jtT3JNhUEKPW4Hl1PHcA1awtXwA==');
define('NONCE_SALT',       '9pco9cao7HWk1R16Idol1tj/lQ+k9IPmoWYrm6X5Oi1gpuLgxyN3ciEqQnxkSRsMxWS8ak47xE32K5QCLLJ2WQ==');

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
