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
define('DB_NAME', 'tournebroche-restaurant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b5?^Q.wkdT[A<|tFEuVqyMTd4RJ^H@)],s_*Bt]c*O}4cXF|t|$l|P;,HCXu2?!_');
define('SECURE_AUTH_KEY',  'U5*K|TwXs]TV{|]%kDm_?Rlk3/n[EKy5l9+w-d?&0KXF:>X?;fnp2n`4mMaGA7E-');
define('LOGGED_IN_KEY',    'a@07ae]j{?G.8kb?=;dX_~q`HFT^kOOQIUk_me#kvZ1R];#Su*S,SUji%&2)D%)*');
define('NONCE_KEY',        'w9X#<&;3_HZK<kTv ;v$U]/ISv~m4};zsr`7HWy8%8UKka,hBbnR?L*&|[u$*AeE');
define('AUTH_SALT',        'x_0r1baYly:?&^O50cs{/p*EbBi6P&ebh,(2yGL>^.:cTMQW&=1wasH23GjwQh8C');
define('SECURE_AUTH_SALT', 'jSb, JAD}V1:3)`3yVZh4V+%_wZl|wx(}z{>cerP[`~w9d *~D<+cZNXL=?gC2~:');
define('LOGGED_IN_SALT',   ';%zk$qTn$(X`*f Nd:]rbPlqSxdu7[8P`|ly~V)N7_{5`pU=;6(kD5Hp_/*kLq&s');
define('NONCE_SALT',       'M5@Jf;g!5z2y.?l^gjGk E*T;^*k%c5-_Jt5I,7(7eQ;V@VM48bzp|#fUwZqq>w|');

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
