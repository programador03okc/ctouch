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
define( 'DB_NAME', 'ctouchpe_wp' );
/** MySQL database username */
define( 'DB_USER', 'okcomput_dberp' );
/** MySQL database password */
define( 'DB_PASSWORD', 'OkXComputer!2020***' );
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
define( 'AUTH_KEY',         'ak bRmyc&_AyE[(m&,$h80N?`8s._)6;>?#RC%,`pU!5<#YUcetkk3jcsvkttb#B' );
define( 'SECURE_AUTH_KEY',  '9$`*=.vZA._fRjxypKi/r}BT5#pu?ytbjqNg*WEk:+-;u5qd%WX>{v-gZJ59<f7g' );
define( 'LOGGED_IN_KEY',    'D$O04^>m7;~l!G<6Jq8Y;D=~vcw?PQ0_@4z.?X]pv6)l?Wi@Bn!,Fy^EjI*u!zPL' );
define( 'NONCE_KEY',        'S:>)0:=_g.CYV8g:%Y+?`[(~2G,-dwt.wCf(Q^7oBqg]Vszpti.m,l>?=?1Mju+K' );
define( 'AUTH_SALT',        'zV3wNz+[W/d^8VmuN$$,@]2^5Jx/1:-,o]*5n8Mw8gRTIOPfg)Lq3vp&MFXQvhH*' );
define( 'SECURE_AUTH_SALT', '0zq~e%QSzgj:zI<}YH*u$ %jfn8N4a1|ds>^l/SOwu5ZNE?;DBM&dT[Xw+6_e0AO' );
define( 'LOGGED_IN_SALT',   '>lcKBlzwTIUwX?mBH*js#D }k_pQ@%d(Vq^h<|,5s#zkQ0n4PGag#$&D*dPQM4*0' );
define( 'NONCE_SALT',       'h45/.0$Oe[5zW#170q@&M?Vn+&_XvC|QF{*imVmW7L?@Q{ZUunaPwN_$7>V%N(!$' );
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
