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
define('DB_NAME', 'dsepatu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'cqL9 uN3;Ev0M|hT,}{g71c0yjeddb-ra`foyYMrm>pr1Uk;.N_UI:&A}||+Cr@4');
define('SECURE_AUTH_KEY',  'eJ!kdp,{Mo*48xX#.~>Qc1y9*m1wdymg.2*`UaA|%It=5*lSt=%ZdmtwVol|x57:');
define('LOGGED_IN_KEY',    'L,N1o.Ts>1=vhYc+|C_P.2Y!ZzxEmL5t&]vR%#|QrXIv/f#<]cq1~n6t|lux93z+');
define('NONCE_KEY',        'r*3r$p`_5E#u0NVlyfHHdx|s%WO<gfpGs2rC; vUOs!=|Zlv<*Y_opvZzH-&sX:p');
define('AUTH_SALT',        'nL9&Z1>B|B`d Nc0^cc+AA9 q(b9*2V`TuV$>m9p) t$.|+2*[/LqT|+c=ki5(ZM');
define('SECURE_AUTH_SALT', '[i.1T5C_E~Jt-#2HgvQ^TCKq#C;:R&hn2u8F?[z9:8},:&BM[>XQagdBjr7+.X~|');
define('LOGGED_IN_SALT',   'KW8B#Q*5j^BZ-bMVA-_+Mn{.xaKQE4X39BRg*swc@Fk**LD}_K7~aky=}2-s-#l.');
define('NONCE_SALT',       '.7wLe3Jl0Va#}~vL[|3~|/}O6aYV$f[{l*jeVnB5XHBW1ljRt]BpszAE|G*pg|o;');

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
