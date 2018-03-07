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
define('DB_NAME', 'db_dst.negabarite');

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

define( 'WP_ALLOW_MULTISITE', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q=6OV%|$CyAVaY59aE1Q.d_:ouS)08$9~O<p6J86Mk#RymptT n-+lo@-&Nnlq@7');
define('SECURE_AUTH_KEY',  'Qt7G9W|hGjB9v;MH{Db{}ylqh2+hB`dtt8tctNUr:Sj<lXTwnGM4gt.G+G +h>00');
define('LOGGED_IN_KEY',    'z,?={_Jw)>[HLE%EZSdnIn%s_5ItEicB4HU~kP6o(p=Crjn_Kw?#j8_7e;![dCn&');
define('NONCE_KEY',        'CGKS8_WaFZ3NjNF~;JhAC:Q$nl1ks%!ws1v5V(>RoUe;%8V)?0OAEA<)=9qm[{u6');
define('AUTH_SALT',        'Za$*k$ -%#pWPI$0Nd@(>*`4iwa4m1@(!Crr`mWC$[GdsAU$7Qna4C?/osd]N(s8');
define('SECURE_AUTH_SALT', 'A,n~C#9mN><0NZ-P!YO7D)#Dvh:1&51{|)w)*iq%(:63Q7}&i*_&(4_DSVBQ3PI>');
define('LOGGED_IN_SALT',   '?)?4OGF5n;P*,I56w]dmwOQmn8Ah_A3&SI%WQV7a?seG5*G7YS9ow$(f0AOwL9Tf');
define('NONCE_SALT',       'QJfqSvgH>SH(#j{[3WnU?xb-#0]+OSCX`1|pMaQ;kl`V.@_6y,U/+tW+Bk)g:l,o');

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
