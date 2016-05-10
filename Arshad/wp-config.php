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
define('DB_NAME', 'JCU_Alumni');

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
define('AUTH_KEY',         'Is!|b.v#Q{B |h;*k8jN4i/B|}H?O$[$`7yZh]=-A)`RO9@dhBAm10Y 6hj&CC-|');
define('SECURE_AUTH_KEY',  'sy7oAv_jMX?J`Qu6QGS -*N-KMu!b&>(8{j$`Z6K<dkG}U$x-9>]$8+{i4FE,A/u');
define('LOGGED_IN_KEY',    '2`ZQ;pnc$a(K|P+g6{&r{JOnsB5Qa#*>cq>E7u Q?Lo|6oJrB]$]/hw(Q)Rj^#yo');
define('NONCE_KEY',        'jc[W<sN`X1@k3I*&lBZbt#K6HkYI%?7vfM]-]ttla^h=&@KJ9081MAp+nvTC0Lfe');
define('AUTH_SALT',        'Pn$mhA{U/Y:nK(K`/P-7g`! O;7_Ad?3Jq}]rwMzS89Mq|{7{^Rp6_PI. hOd@-r');
define('SECURE_AUTH_SALT', '>~TuZ3mmw-}{F/ 5flO+8w1gK&en9pMT8:.|*Dt,T9VW=OjH8}_-E nP6dSf/%Hf');
define('LOGGED_IN_SALT',   '?^Z3wj_LA N5-tIq.J)?gYi!/awCULr`3E _c!0^nu[No>@M]N@}6IVXDok|EaZN');
define('NONCE_SALT',       'F+p5S(KIIB)>cC<&4Ljyp~G!=V+-r*w+]MZbS/1JP>0Y|%0H.]}<+2%!=8-)gr0}');

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
