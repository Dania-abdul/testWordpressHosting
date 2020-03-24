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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'IVMJC)P)(!s!wUq^w}B!DhIaFJ()hG#T}y-UnwA1jK!8^NtkS8b?G6h<rlVFoy^J' );
define( 'SECURE_AUTH_KEY',  '=|1?P$VC&)EhQ8i7-V8uFIf&&Lw%cw&k@1kQVFP6nN^9:{c&4Vl!6&v;z%O>7sgJ' );
define( 'LOGGED_IN_KEY',    ')Px+5S[aPY%iSN+oTQS)/bEKN`dvRcY*O,I=S]_/}Aj,MF;cSdaAq/^C;42oC]$t' );
define( 'NONCE_KEY',        '2p7</;N5)hVS;#nLi,s+G8;OZjaO+;$MqieAR 24F<irI1}8B0nenwOim8Z,Ky3n' );
define( 'AUTH_SALT',        '#2p9qra={B<X/atPmevRk=q]9pmz&V.8_734i?`/8iW[fY,)(4QDdauK8JA6*b/E' );
define( 'SECURE_AUTH_SALT', '/KCa9j-=E.K~F_$kgTDmbQ$jJ>*l=rEn$/1#n2vub5x %Vf|($Q#lOvH^_:RLv&_' );
define( 'LOGGED_IN_SALT',   '_N=5=yb0topw:6&1q5.A%Wc~il]kg&`B/.gxM)*7bYx`{[+n4XA+{G}h7v^ImK_E' );
define( 'NONCE_SALT',       'Ak16zwbo8<!N{nA,5?;cl=Tx^vZ>[N3a(bHF2A=%|?8OeU2:F -|I^AOwD+5S||(' );

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
