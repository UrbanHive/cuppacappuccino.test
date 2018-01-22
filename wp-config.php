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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cuppa_wproot' );

/** MySQL database username */
define( 'DB_USER', 'dev' );

/** MySQL database password */
define( 'DB_PASSWORD', '%Password0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xed h<p[EK70!P$2#t8^DzQ2me<dJQWhg18a<R]Wgl#AHy1,#Ne/TB&e|^}%Ov#z');
define('SECURE_AUTH_KEY',  '0zOo@sF;5-TUULTBM>%V;}t&-SxWG%>=_XfaT^BMw##OD|kT>p4a8|tWizZ,|,<L');
define('LOGGED_IN_KEY',    'qL|pH.E1lqt@- 9sEZ;6J!!iq>H-KQjqV6T1C9[yY[t<A{BWkJjaXZ2w;mN5S-_|');
define('NONCE_KEY',        'M+Ruu|Y^JG+sBl/M3^C++u 4-[XcIlD-bM,xK]1cGhQ[Bdd2>V|[s^+C)C7_MOe+');
define('AUTH_SALT',        '#@Fwh}Yqw|,0twlY922D%ei N30}s-=+^Ue`_!Nt*(ODp${bg|+dCp|:1ic6AT|E');
define('SECURE_AUTH_SALT', 'ylHxS6i2P]APYn~. ,4BIZ#v|1k{z/=J;`RcAq$U2Vq|?G&5~_/U6We||$xZS(J,');
define('LOGGED_IN_SALT',   'W@0tlfj?g5~LU;^dnAV? r_O#6%b4Ks5$&ppjEr4^pAcMK^ijU(Yxx?0hzhLF99!');
define('NONCE_SALT',       'E{*L<<|?h|P+/(!Yc7c)[^Afh@?bmwjZKUWcR`oo`v` &pWL*{|iH5{Od,==&4#}');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
