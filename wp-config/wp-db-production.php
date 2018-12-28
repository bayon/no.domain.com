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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '6fa4be4ee650b77421a2548c4e8fb6d1cab99cfd2b138b95');

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
define('AUTH_KEY',         '>w1y<W X84Mp0YyHzs;>fRR`=Ad:yIa&,3e;.[-7SHi%?OszEa{!}6u{Zz 3d43=');
define('SECURE_AUTH_KEY',  'Xz`RlQuJFq:LnR#t;1?W9iY#msrc<%YirS_sXGYw*%NQ.ZyF33RUBRxS(4(*6mCu');
define('LOGGED_IN_KEY',    'cqtHm#g5kLA6/8xw4p}F=$`woig.;RNG?hh?eZ9AVZGa;3<{i3*WiSHWjIzA$+#M');
define('NONCE_KEY',        ',2P13Q:W$B*t/] p-7WU![cLW`$.6!)uN|K>Caycs?`H8qLS-]8tu|`#9R6/O64}');
define('AUTH_SALT',        'JlwxTb(Ki&y+s%VZAdA~(44(EwO8>?eK;wZ0D*G;P/3FI8DPh0tYG1x1lg@C+<I+');
define('SECURE_AUTH_SALT', 'h238g=r&wtx8w202tq=jFi7=%M5e$IDa41[()ePgzssJLB}kl*j)d@kz?y%b<`B|');
define('LOGGED_IN_SALT',   'PMs[;r{DEDH/7B+yqF)$MqToJ5.([.e2,y5B|d%IAi+#51j6EYq|dI1ZI`5a?Xm/');
define('NONCE_SALT',       '2UtiBt7sCjhflFT)8xJ*3%trha%&fXW:L@s[f8WfP`hv2%G+sA@<8 ZFdCc,IMfT');

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
