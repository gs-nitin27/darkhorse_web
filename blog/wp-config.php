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
define('DB_NAME', 'darkhors_blogdark');

/** MySQL database username */
define('DB_USER', 'darkhors');

/** MySQL database password */
define('DB_PASSWORD', 'RvPh(?gTx#aR');

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
define('AUTH_KEY',         'yx)L$,qlrvB&Cx`6Z9HC?_s7jwJPuc:6e]Emulicr+vC hMXz%?#Eunza!QvBrH2');
define('SECURE_AUTH_KEY',  'q3)<F6_0a@?[!CvHhPm1!@%fsz<C,;z+{?aY62m?iuesHcFB_cNfq7[L87^iJnBB');
define('LOGGED_IN_KEY',    '2d`:o5u?@0+YfV|<X;o^?]`aZNM>C@[k`a`wZM|KZRO5ACEVKJg!IgoasXRv4S1s');
define('NONCE_KEY',        'af; pQ<wgdvY.6Um7g4>tmK$=Hc:ET )V;?`!%ORe<,J>7f#D$q0XZs.|goI72?]');
define('AUTH_SALT',        'awfQlZ<^;:j,ys,>`$CR3=67N}D-d7se[)N;fW&+xF-[OSE[^b+#C|%cu!sI~l-9');
define('SECURE_AUTH_SALT', '9kgMu{]G`~t//X;qn6<9~#r#KvNWuo4HlCQ0npj1-m22C5*`e]d1J`YGCIhYgx!y');
define('LOGGED_IN_SALT',   'P98|F/#{7&J?i-1yIb`4&2 lScbq_4P4`u$>:4E3K3?]se2=S^*Be%E!EjU1:UfI');
define('NONCE_SALT',       'o10eHG0-@!ew|5=RmitBgfic,05*g(%|~.~(?a/BpQWj}]G|,At>^-bm7yXYPL:z');

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
