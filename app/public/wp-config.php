<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '26/zEnqdX$GX*|j7SaFI!8%U6X*V$y5F][+wj8D$(dQ2-JEK[D&`jF8p>*=C73Qz' );
define( 'SECURE_AUTH_KEY',   '+B@~P6[!4!`xi %jpx8pc+:H!s,I|x<W?I;[4[^tFSJ1:Lvr=>JL3FaUwr4}=vlG' );
define( 'LOGGED_IN_KEY',     'z]@5E/zo[YTiH!pSbv]tvp(|pl<q,6olyFs UE|i$iSa@8|}a<hfE9{q9yAD0X:|' );
define( 'NONCE_KEY',         '$.Q-JUg]_fj+$*([jp05CtCYj(nTC?r*Vt3we3)>jERV0r1ebXgh~AN4$ZJS]_&R' );
define( 'AUTH_SALT',         '=S[eC}%N}cSn*OrG8:>I~MyeG&]>+p.M_vsrif,wpII.&8xuV9Op gu)^p!Wfbz)' );
define( 'SECURE_AUTH_SALT',  '0.[-mitt>,t:S-y|.mG|}K>.ZY)sl>9=K>`i}l_oC487v:2cc;>D5DLTr]$},8bq' );
define( 'LOGGED_IN_SALT',    'f.fO+DwiDHd0=3Ih{#y/+_u}x%rL![mpmsdfD2%R(yERgb`GH3.#;96KLcqz/~as' );
define( 'NONCE_SALT',        'mgDTz{]o*O#VF0{Vgp-%oeki!RzbAdh`hAK r~ C4_02oWHALXQ:?nGwyEgyv2@e' );
define( 'WP_CACHE_KEY_SALT', 'p-S9+VfpMJ1f<Q$<Q;+^,gC}:{hB)A6-Y45_Eb*yq?+g o,YGllh<k8tj?Q_IxVd' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
