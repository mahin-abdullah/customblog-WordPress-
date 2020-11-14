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
define('AUTH_KEY',         'rnclPyXUQUDs15lLFtZ3WTKx1p+SWtNLE+Sp/qe57d6lKbbNPf9boGoWNliJbh4wBo+AGOzQnyiuaikjfjjVkw==');
define('SECURE_AUTH_KEY',  '9VT6k39wpz86LBjADI4Umy+1DjUv7Nw0459bI8fx5Yo9q9GPAUPdiPvz1ZXP3Jlu3XnTyrUuAmz40A4Mbt7p6Q==');
define('LOGGED_IN_KEY',    '82Oa76uvkzYm8m6oq+pxeWCR3h1/y13Wmz3AhJFVh9sMM/28VZJnktz7AOh9OCByTX/GEcqMucwZy3Ldgs+cIQ==');
define('NONCE_KEY',        'sitwFvw81wVg+q1huhKD/faCiTtIpc6FUWvTpXCeikJitjQkwjLPvoE6MCCUsJ+Mq55iJtkbHPJWscCAFCYQVQ==');
define('AUTH_SALT',        'gAdbCUPMN35wk9GzydIDyKjvwbAgsWrDm8K0BJ1YlDoXRLYMJr9H+sPmnIEADDOTskBqFOUjkEi9kZXQpIZ95g==');
define('SECURE_AUTH_SALT', 'GLJf4+U8RONrXc98tacSvHiSPLrp+UZ7r1zIWPHwanydr2K7K71BVe+oXJcs8CjAgQxq96gfwxpnj4rVsiXKeA==');
define('LOGGED_IN_SALT',   '/iwKAAn9id2m5wVMPnoK7uc3qGuiC1EZIOwy5BifftPVm4k12SD6v6v/Sb040Bqy4Ou4VYSs5FeTIlNbdBR4Gw==');
define('NONCE_SALT',       '65EghNuEvRsNnyu8o/EJYFhW64eboO/bYY381Wj0x7wyZI+DAY2FBO01yfoSoCSVOKMTP3WLJiaUmLHYevYd3Q==');

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
