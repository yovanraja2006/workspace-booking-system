<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'workspacebooking' );

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
define( 'AUTH_KEY',         '.Zl)?-e~Hel.D&f[mgWFQ ziCt0p{PA2c}cAfK2 fgbQE-A5fI56Lg%-NeF=Idp!' );
define( 'SECURE_AUTH_KEY',  '<KS7UmSNh:FCWtMm>#1r<Uct6?tFaEZ6H.10K2_AA$2luri$gcOngHxWZmDavhE.' );
define( 'LOGGED_IN_KEY',    'pYdbR]QT`Q$aI2*g2=eU[*$?XZIdcth2N?&8`#>v%YTRB%|Nw~Ra_Inx(mpva!Ec' );
define( 'NONCE_KEY',        'qpn+zwH!R2TY/aJr-N|p1u[(01* WF#29r5~I1; `/XfVEibd$9R2)( N;KR([0J' );
define( 'AUTH_SALT',        'na4?cL5S@Iy~XL^oPm3]o&SD0F4WvecNe`i<jXKB)S5, {)sE9=z[-Nj|%?}SDym' );
define( 'SECURE_AUTH_SALT', '$6>C,OB&2 =Q}smr0V&qI`Np-}9eq*[Zk86[JxslmLr.^n!e?o1D+p:v]7LHuqD;' );
define( 'LOGGED_IN_SALT',   'c*#k2]>,+&!<?[aO?Sf_FM?A3zhxg&f#QC^k;UN>a%&!be0k;sj{pz>i<|URnXVD' );
define( 'NONCE_SALT',       '_OYhn/)~X3)LwbF2[0Apa[hr&3{pV<MotRJo<.,%3|.:B3>=_ J5C;-7>m,}%`HK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
