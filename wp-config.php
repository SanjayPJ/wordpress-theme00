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
define('DB_NAME', 'db1');

/** MySQL database username */
define('DB_USER', 'dbuser1');

/** MySQL database password */
define('DB_PASSWORD', 'KuKZRMU70v7iJ3kw');

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
define('AUTH_KEY',         '!m<[$,T4-e?0d$5ja<bp^_7!rec+3{rsEl2hSE9_JeKO%-Cybu%q52<&}Wx$ptq#');
define('SECURE_AUTH_KEY',  ':onSOAo?%VZa^e]7cI[amg&{$&0L/6+z$Kn|@R .r0T]|~H;jPi8^owPsmF3_L|p');
define('LOGGED_IN_KEY',    '.oqcU~mX=;:^dLo#pzpzD;KUKMxdn>(-|n=^%ueL48]O+LOxojup8RKgXpv0+BAr');
define('NONCE_KEY',        ')u;}WFZ/&r_Vpa-7l!f={:Sf(G4Lyd#gDdjK6M)TWy_l usmV/8lC@OO:;jB$xOW');
define('AUTH_SALT',        'AHyneu}7ZL}U@AO([)6(}t?Kc@Bek+|N7Kr{*278f{ipIH@UGX.`9K`1rc{h{_s1');
define('SECURE_AUTH_SALT', '=qO}UVh1-V*CHPwNyp^*gPBe;{qtJy3(vL)*b[~Y3W1M cC6)+gNMYE92M&F]TsF');
define('LOGGED_IN_SALT',   'Az!EKe:*V8c?G<..,d[3X*O;bR|KLl2kYz-Q+=i@BiBc7/GbT)a e0y(m>O1vBt2');
define('NONCE_SALT',       '`[Kka/Z$9fxk$XfqeSc<ins~iFyX*6O<g#8G:p(yN)0CnLdO38Up;o&C}ti@uaBF');

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
