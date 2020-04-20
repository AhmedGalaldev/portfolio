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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'ahmed' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';w|13R]v(aW ,!`w=UY d@Cdvjp/=B4j/EhIYZ?Vnd0+Sh-arb~)2Z<6+#u}`$W*' );
define( 'SECURE_AUTH_KEY',  ',dmE?4S|!8o-Dpo;pG%@)N-q= pohTfD_>R]^qYwMGl,L1$!T1t}.(Xe_2Bxi9!C' );
define( 'LOGGED_IN_KEY',    'v=&8c$5y*`#2kb&Z2SLNw9|^8xsE48^J[r5m.Ab$4;)P$NHXJZ-1LQ1s=cP#];<0' );
define( 'NONCE_KEY',        'cS>m$=_NLR]IFUb%lKr4r|BP,hF+.Blk{^n!Kcv6@b%SfDf)GneR>B%fy0QuhU9N' );
define( 'AUTH_SALT',        'gEUX=K}<3|wV.w9s-VnomXJ48P8Rf1tM+tp>!T?$UpXR>KL:JM*]J;c^qYGB=pyM' );
define( 'SECURE_AUTH_SALT', 'J1p`B4NbYBsvw{Y4|~7dL9F!goQ9#g8il^z1@(XSV_X~S7WkgQc.VgNtiKR)(>B<' );
define( 'LOGGED_IN_SALT',   'qW4/|RMTu;J%3l/yd^}h>{-1M+F-NnGX>{3`v658+.RIwF]-OkgD?4kDec&6]r=.' );
define( 'NONCE_SALT',       'Ju|?2^0+Ntb{BSOf~IEI|YT~s!b/j0AJ<L(=Fs)~8c.$TVu=Q{%Px6Y_dg@(^kT>' );

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
