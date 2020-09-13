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
define( 'DB_NAME', 'wordpress-one' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

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
define( 'AUTH_KEY',          'N5V%@?`0iHMf*q]Ui3Z,(hst6TwGem*gYul~nP[,@&7*dCv^}rV&yQWY9ls-|l&v' );
define( 'SECURE_AUTH_KEY',   '9mi?6dDBuC}@8gUBG$WrT<HTy,rg14hcO=)!*]Z/$I(Nz!*>Ll4DyK(ShZVoekk0' );
define( 'LOGGED_IN_KEY',     'A=MZQ*[Kv0:Kaely7%sP~96_%bI,8q2.}JL)-=kQn02e#]=DnL@5T_K_:m8.v3K2' );
define( 'NONCE_KEY',         '!!rHI>//.5TVxvr;Zl|gh=Zf=pCo:%i*N0g#j[SB?d,;X9iUyoA+I[C3Jxq-&uIX' );
define( 'AUTH_SALT',         'sn0<o6ut)X-HQX>ulG.7BY{u8SgW0smj@.d{Q>G-tPw?ki<2Aq-Y43|tK~66.qrw' );
define( 'SECURE_AUTH_SALT',  'G]ie^@ j>VVK^u/by[nq.[errM[w&N4C|$jTO@nj/q^Twjni/QWuqLn!-HIV!a]>' );
define( 'LOGGED_IN_SALT',    'YB6d@^MZDdeAPShvV>SnCT %qW58.q-:h!7@(x?#`yN{F07P4Gs]L!PP4.dk<TqI' );
define( 'NONCE_SALT',        '?J?J+XFF7Z+5b5X;uGyF#M:f-LD/9PbEM^FMmI5HI#n>^F~aHv^mzODod)?T4j[j' );
define( 'WP_CACHE_KEY_SALT', 'a{}:4g|kG=5ym{BCjh]vLMt}4Na+y!EG&q?JxL3mbujQiEs~h/,x$sJr5,vKy89t' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', True );
define( 'SCRIPT_DEBUG', true );


define( 'WP_DEBUG_LOG', True );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', True );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
