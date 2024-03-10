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
define('DB_NAME', "u53721_marketing");

/** MySQL database username */
define('DB_USER', "u53721_marketing");

/** MySQL database password */
define('DB_PASSWORD', "Marketing2015");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'PTBXuUExt57q97ebNq^7vmsumrW3NDE(UlEYxxOVh^ZKnrapKIGPvGoqN)N@2OOq');
define('SECURE_AUTH_KEY',  '#4z6sL*d^RNHczxbtcKX0#mIk3H4urU!Rp5%Pp0gOWb22qTqfs1JT@b9Ip4ESvo6');
define('LOGGED_IN_KEY',    'JOUIsg5JWWRPkSI4f#5niByxH)QC7rKa5%2SJ1L%II#%10wTWywcOnc7LHzZAoWp');
define('NONCE_KEY',        '*T@j!td*L^Hch%pHul6Quw3HHv2S(I74)AIX1MXhA6838Mj)3jqMz4D1I3bgeejL');
define('AUTH_SALT',        'OzUt0UW2lVTok6()MbdjvniBO3r)(GDxRvHk&p@H(My!#nSBm&7is4Rlmp8DV%U&');
define('SECURE_AUTH_SALT', '%v4ptZ3o)oNrtTm*EHE^rK)eyut^3KbUXz#yxneNItka^Mpn^P&IpKzP^ceYTKiS');
define('LOGGED_IN_SALT',   'gB3rkvHVoFx^5Q45N3^4PnfOG)zZgR()wn3zBVl2O3AZ1TpUbTCx6ILQB8PPsdRX');
define('NONCE_SALT',       'KXCHEOh2f3wN!ezuPpBb)gQRiLTEUbmdVy1D2LYwzdSp(3@Yhz^9yuzJOGWyVa0n');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define( 'WP_SITEURL', 'http://marketing-otdel.onhh.ru/' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define ('FS_METHOD', 'direct');
