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
define('DB_NAME', 'jannetest');

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
define('AUTH_KEY',         '2U.J5hv I;i1-5W~3P76x>=RIR<f$dvj~*t{hde3H])9V$x@I[>6. @U)@*`2a({');
define('SECURE_AUTH_KEY',  '1yf]I&e;AqyvP9y^#p)s{>d2(-Lim(Xxho<Ku0NCag* awfU@BBaC&E@XPKf!z~L');
define('LOGGED_IN_KEY',    '%3:qBj]=YTC#I6qe:R=QJAR/)4.k/.7DA Q^E_tqm/=#[j>/X%!f$=On9wIXqpWb');
define('NONCE_KEY',        'sOXg8}T*s5ou`DWL3;$$;Sm|gFXIo;WA0d#|Z1$z &+c_O-JuU#7V<ks2F.Fn9pj');
define('AUTH_SALT',        'Lb;NU<0UJt~r)WaLi(YY]~1O[ulh@mppwRRM!Rx.2AH;PK5a?5$;nN (Y(d7!rua');
define('SECURE_AUTH_SALT', '8BR:,};bF=??nY)-nrQV<70!`UaBt dXfsf$]#;|X>Du<Kx)KF9l8C )70Yk_j5 ');
define('LOGGED_IN_SALT',   '/711<-5I1u3aH85U`&u)h,Dl,?n#|SF*9#`Cg<%xm#PiD:z=`+gg2/{R/B[>.RR>');
define('NONCE_SALT',       '2i4Zw~2&(mF2H)Ec,hua.~b-:;S^ yR7+vr)q=j]14G/h:s_rkBKQ~hA*eSg_e|P');

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
