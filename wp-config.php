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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'p*L5wPg8iY[ny6fk]xZaTbvU,3m*) TZ}T@+8>)`;BDSS)^=L:e0gC]qSw$, D)k' );
define( 'SECURE_AUTH_KEY',  'q1NY<M)jJ[t?(f>pT0gxSP*@b)Eg4<+c5POQP,I;Anf?]RmGLtQ,&TszeUq@mUEd' );
define( 'LOGGED_IN_KEY',    'luM,fCkyddN[,6)$xbg/DK#T. &EH(oEV6|wrz&m.G4W!Rlm#>;&GrV{H;ldSQn(' );
define( 'NONCE_KEY',        'cD_0T@nKfN`^^ o.46zC^ls7@Z~*#%#rlh).>vd8 -&C*SGw:n5g<U4LSJcn=N(;' );
define( 'AUTH_SALT',        '}3T$k{|eVTk9Q$#86+|m2z&]mPy0S!vEb6CfyLXJHIjPbph~z?%TX;R-[1)HkR2^' );
define( 'SECURE_AUTH_SALT', 'bBp-j[J_W:0.e&H:YfQ}(q9HFTp4 uD_d);_>$ E0PiH%}/5dB[X* m9h}3u|ri(' );
define( 'LOGGED_IN_SALT',   'wB7z>skpt`w0~oJy_dB|`{2MgnUHuYg0#,oKa)trKE56+tkkjl3xWR!c_rf`U.*^' );
define( 'NONCE_SALT',       'J)i1Jw*D=:Yc0G!3sl~~*;2B{wMtJ2[}y`;.txp4%rRLHfCYdW9oL+:Pu.oj%g-l' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
