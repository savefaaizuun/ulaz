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
define('DB_NAME', 'db_ulaz');

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
define('AUTH_KEY',         '4N9[J/L%$Xwt-F2TRY0[wDRw0AVwGs<IGspS+5rE ^=G&^Hjj*e=u:n=);^=5*1O');
define('SECURE_AUTH_KEY',  '_{O26z( ykX}T&M~p<{fM`|0.sd{x;sYlrm]p`{KZBUkxYE[$a~)p<ZMN@agc c{');
define('LOGGED_IN_KEY',    'RG?e,9gyX+/[1255*0:V^b>O$GKzd&yenw#O`rFH~RnrVg_h_7p/oz3nMS(73v&-');
define('NONCE_KEY',        'I}$O . <<)xCkb?1j2qlz@V2Nv*/n/){N~_>!3D<8P2BoXWL7dZ[&2Q&3;RvIDAc');
define('AUTH_SALT',        'Z8rt2Z2c*}jhsq^LHetN*):em:_M(?UR*YZ5{ob5g|9v=$tj`O]OSK?~LT*XR0a|');
define('SECURE_AUTH_SALT', 'yAplD+ldx9|_-A9<n#n]#R(G0jD*]@HL*4<jR)60AGl7 rk8=YrZg|YDI:(-<z^ ');
define('LOGGED_IN_SALT',   '87p].+E|O[F,$Ws!dwrbw(Q<AeSX}>nslQo- >]mJO[EI$u0V?k9tFF&FzjjzlNQ');
define('NONCE_SALT',       'XT+s~T!S|&XTg7:dyaCp!zA?}N[F&TXh1oavB*ekE]7#kvK, p74e8Yv%mj3IT;<');

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
