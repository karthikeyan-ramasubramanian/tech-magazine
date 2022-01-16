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
define( 'DB_NAME', 'blogs_techsnapie' );

/** MySQL database username */
define( 'DB_USER', 'blogs_techsnapie' );

/** MySQL database password */
define( 'DB_PASSWORD', 'n0c5kOubFbjMM1^5' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Ptc<[hyy5cvI@~N.E4sa7Q4u9fs kOP=DN.eI^k.uo_H`0t t?F+gr#LtOmEBWMJ' );
define( 'SECURE_AUTH_KEY',  'WdjA=Q;U:FI!Ze8.&z0=1lwb>i9Lq}Gmvw_QA^ xi.>p+Q&.F)w&|sX~-bZ-yA-k' );
define( 'LOGGED_IN_KEY',    'i@35_mgXnlDa[(IskT0Si#!Y|(_LKV4=8g,2rHUiST<UES#xuN3HWT9bQD1!;n0O' );
define( 'NONCE_KEY',        'h4DPEZtYLgz[>QxOUFXf`T:,gZ<}1s@Wf<[<Zo|_Hy?LsYP|z=%S3 HEN]ua)+gS' );
define( 'AUTH_SALT',        '+/tYhX_gu)+Au+M@H=K=etiBZPCy#/T(P@K@ ][Am2x* `+5#?DxboE>44ioGuNH' );
define( 'SECURE_AUTH_SALT', '* O>U?z~f8x00,?n+,;%y4-d#uB^A<R3:XfUC4%Xv65!o&6U(r+ &{=6Fx!6YagH' );
define( 'LOGGED_IN_SALT',   '2WUo_&iErPet%2O|c/(/l+x&Zby^rT79 v>UD~~KHOWOv!Nr1(0qu<%wyO+Oye0h' );
define( 'NONCE_SALT',       '3[zCm-K/?&{Ns[O;EbMct1qC>bh4C9BKMo0,pB/)USEws4^CcJ9jV.;-hwNFG=qg' );


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
