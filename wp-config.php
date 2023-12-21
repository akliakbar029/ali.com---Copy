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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'githubtest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'R;-u1S5S*DW~2<Qh0G0ka4BH)#W03v7|6phqM`>HI^gIDGL$5oNUAHB^J-yr~U-Q' );
define( 'SECURE_AUTH_KEY',  '`Zj3~2;}I3L{MV<K[MJlV*RZqiufG[e]wG= c{OQ:JTil+Zl<#3#j,uc-[5YPw7a' );
define( 'LOGGED_IN_KEY',    'p_Zi7eA~.J:%+-[-}N)nt%?NKeG9&PsmbR/R?z;(6TVZ`*v=&:;(=sfBHh%=M(MQ' );
define( 'NONCE_KEY',        'L8^Oc?CoVusedY!kM4k6,ud dzL-:e?H#e>Z@g7dg7/+4}DIKkDn1w}~o&C{%o17' );
define( 'AUTH_SALT',        '@G:^F(Hj~.QUxGV~K8/=g]DLk-HD-F&i:EI%>oJZ]I,|wQ|I-O)C~!wN]QR}v1W,' );
define( 'SECURE_AUTH_SALT', ';*pRqFn)Kw&z=D3c%y}|$`eO$tox:%UzJQ+: M$tBlEsYFl_9--v_{WE7E&!x^g)' );
define( 'LOGGED_IN_SALT',   'C|<pGSw_X;I.]w[l6ay^q5F5PB+Xq..0RX$E*=cngr~OC:lT(2X(KcqokNn4VPl9' );
define( 'NONCE_SALT',       'GF{QeDN)K!~]3R3VUD0#Hf4a[@WEb,,A3XVWNiX^+D0P8DA&%PFGH&SSY*L#}Fq&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
