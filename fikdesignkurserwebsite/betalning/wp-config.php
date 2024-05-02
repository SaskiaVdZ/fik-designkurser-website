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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'designkurser_comwp' );

/** Database username */
define( 'DB_USER', 'designkurser_comwp' );

/** Database password */
define( 'DB_PASSWORD', '_hermEticum0154' );

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
define('AUTH_KEY',         'Js;}|Ou^`rA+5hk>kc|X-N]2&BP>OW$@3MRNHyx-[>$G?`Ka/P:+U=z+kQ={+PXS');
	define('SECURE_AUTH_KEY',  '00nuz?4pOLbJH&$O<-Iv1lTQY#%j!X=5TnBsS<:=Igb;;_f3udxhl^5/L>%8k.N%');
	define('LOGGED_IN_KEY',    'KfHXP42G^3%:8^/?_oqY}x=J0nu{LTJd&,vH>|)MeICM!ryh(l}T+5W:rpI|,e/7');
	define('NONCE_KEY',        'PhMj4|ND{f3Bwt$`$4gn+Ed+XdF$ZupNpi,ey.$PFP$|~A6[aQ8,Tkk=c?K+}X@|');
	define('AUTH_SALT',        'H)%C6G}eAVKZ7DR-V{$YwA2R|^^kGuk1R|/gZV}qZ^X+|r{u>I$. J(r!;A%X2q[');
	define('SECURE_AUTH_SALT', '&Ft_`V|e^[DqkpFJ|Pc|jEHFIyK6+Qj<PncAfr:/r`k-|11at9vm%C^$fwH4mQ^!');
	define('LOGGED_IN_SALT',   'U?KYWC?WTNhUj%&,q7][t-N)_5Cq=mJz3gJ2]mQ-j-= mk--3zx0^OJ@,PZ_L}E2');
	define('NONCE_SALT',       '+Js>Ek:-x<`L9,RF-f8.A5JaC8&a<P(qgHb3Rfa}.ddrl1Ez3:$b=39a]hn/!j.0');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
