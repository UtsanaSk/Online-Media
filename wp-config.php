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
define( 'DB_NAME', 'media' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'X,fs)l,J0U/1`Ul8KZ@l#-#5$=><.8BDxa^d/G|~s&O2bDx-1N/35|~DT$T]/0%U' );
define( 'SECURE_AUTH_KEY',  'uxoSN$6ZMO|MH01G_cq-m-SQfYH b2-zy>PtAKI]=:ToTXaIA1Az3wc(G*.t@g2*' );
define( 'LOGGED_IN_KEY',    'Szfium R&Re8aSjv4041zn^bUFN@Rti=wgF/7.GYswf!*NMb}:$W+C/]%xC#tq8L' );
define( 'NONCE_KEY',        '43rvW3;05m4in-|GIb#YR+K5sFQOC5bNT0)W|n4z}>cyrNdL &O[T9xV2!ek(rc[' );
define( 'AUTH_SALT',        'DVTH7z$&`yHZ{ 8IB2T;~@%Md[Vuhx+hOnUlL~kR{ckx|Gy|y2i5|?.89KLd{,8d' );
define( 'SECURE_AUTH_SALT', 'g[t$c|lKN8WzkYk3K&dlT .A`i^q-e)mgW6,!g~{,mn$*Ih=%12G4r 0VEZetF`-' );
define( 'LOGGED_IN_SALT',   'Ai/09Oa@K6ls_:EI5?x{Z`KX|$raB?qYS`R1(2$=s$ZghZSSlg39{;%$jLP)OUhp' );
define( 'NONCE_SALT',       'enF~vPF[bo^irg7&:w;z4i=)AS1%13l cH^K+3I r]{7,=wK0NK}.rQ|-;Ks^DoA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'media_';

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
