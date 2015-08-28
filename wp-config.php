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
define('DB_NAME', 'simone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'r)XWOOVakqnWgy>4CmV6-Qv<=1#suJ8oFz0yqiSN/{IEI!4x?c|By/|?D<ANRYZ>');
define('SECURE_AUTH_KEY',  'u^J|Seu.& &57?ms`mf+ kWS+-w=fWXUcjSro;R?2 ,kme1]%e#6j`c,E-!Tv=Zs');
define('LOGGED_IN_KEY',    'z~Rhxekl-LTSX<jRFu&NAz++>UCx~UPdGyD1HUwz=>bX@u|UJkcnoQ38uj{PdrS)');
define('NONCE_KEY',        'O:S_Da+_Z(Xl%KCl%KIsV+gSddZMngEB)Eoi,eLkRK{D>CaMLFC|F|Zvb}tlr3lt');
define('AUTH_SALT',        'r=c*5M6DFXf%fr3*r2x}C3LxL2C ,PuHXOD^sODy!qKg|Up.zmrVK,!bET1#S>(9');
define('SECURE_AUTH_SALT', '4u2./44}A4Lu&CI///GGRj+P|J!iA tI$5|B?!D2U1&+:Zz4C}9Az)9%&g6E)elW');
define('LOGGED_IN_SALT',   'xYr-<1 }^%R4w@;Q5e+,%)|vR-Q%wM=(I2/J|xSoP2&d0R5sQ|3I?Hq`WOh)(m7m');
define('NONCE_SALT',       '+--|!wDG]MuD>C@V.#<HtXQgMX%IX?c,SoVY+G@bTbL}vBEgejb-}!HT~4iH#ij~');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
