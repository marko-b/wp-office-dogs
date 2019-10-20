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
define( 'DB_NAME', 'wp_doggo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}+wbuK)vSt-&-)Z.IxnjkOw7Svnlf/.ABp8hz1}mY#k=zrJz(&!(v1uT3,$()QuZ');
define('SECURE_AUTH_KEY',  '>vImC*-9?#ZlTFV [-fB[n.`|-MywQtz|x||:JqlWL%j/4+B,Q~Pt}p214RV^cIA');
define('LOGGED_IN_KEY',    'CQBzUS T`+/y(> $dW/CpsM_cRB{FB(@kNSV&|R GF7vtT;eFx-5+++;zv@v=r) ');
define('NONCE_KEY',        'vQKlc>5J59O.W/?{BGEsRZv+EB3+wVp+x0I2 y|[9R-l.>||g|f,5I((lPPdtP~F');
define('AUTH_SALT',        'KBbR+>+T`{wyF9-J4v;wD,$mLG6bBuV+IiM8.KeX+|[U}5I|ss%E%&LLdH:Vqw0V');
define('SECURE_AUTH_SALT', 'ho0SR#t-mJ0aki-(],2;2kczBzTOUxZ|_HS=7#v$?GaU8|{ds&:;ppp =-izP8(7');
define('LOGGED_IN_SALT',   'bMKVA6ViIQnjf4C:88|vaVjh?JTVZ^$;1060|4s|+mM)t<X=1d.5d=/c<Z@]l%GI');
define('NONCE_SALT',       'JtueZt`^ acv=)|E`}bC6+c-nK+#{XZKzQeT/_jR(.0.2C>d@$MBi2rx2m&BBW-<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
