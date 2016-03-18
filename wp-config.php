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
define('DB_NAME', 'onepage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ladygaga123');

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
define('AUTH_KEY',         ';O[N,sDDt%:LE$-eW!E.FT <+@U7A=#V2Deq]cg1 XfBU<Tb1>g4KL`CrW{mKL3x');
define('SECURE_AUTH_KEY',  '0_S>[+EzlCG^F[zTAs*=t;+XkfoM}`InY{Cpad0rLSJEXT?eY?]?jg+K)w%jfPFr');
define('LOGGED_IN_KEY',    'Q,YXHX0F%|-=@,0XYqPPW#ZueE.*L8-&$m(Z-<+L$zB|%6=iPRL5R_!.b/Um i/L');
define('NONCE_KEY',        'JD!|ezj[sWOv2k46x6LK |uLJy*i50 @Qa-[NR|~$=<`}<cCR,<^$~Ah#|n?.L]I');
define('AUTH_SALT',        'om(Ve-623A1lEEW.j>u>?Tx;O3+ugbvuQL@Zn;7(rjntq3#_>)PHg+{{bR|+qw-1');
define('SECURE_AUTH_SALT', '4xe5$^Y90>?UWMW^MIaShTBjT~m%;$^ZwXIMQNH3=Iv %RYvF$+9!Ks`i<j /0m/');
define('LOGGED_IN_SALT',   '|A1+5:r2|?75O4$<m*X1|AUXQ.ZtGh* #nyyM?g~5!k&?3L>Tr`X)*@+g]-l2_uO');
define('NONCE_SALT',       '!p2rHX2n#|IYw(0F@bbu0Bv:n7iKa<>27A{gP{iBybvi;b~q(`ovA]ItWoC8/1dV');

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
