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
define( 'DB_NAME', 's1800816' );

/** MySQL database username */
define( 'DB_USER', 's1800816' );

/** MySQL database password */
define( 'DB_PASSWORD', '0WLuwAap' );

/** MySQL hostname */
define( 'DB_HOST', '10.9.0.60' );

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
define( 'AUTH_KEY',         't%00r5_e3[ P$;at]KXX3GA!^;jDf( QT>yJPGr&0x=-)tqzERqoqS%@*j`mQN&6' );
define( 'SECURE_AUTH_KEY',  'q{cMy>GBikPnDHl:0!HMi4s;T!dgl$8t3r4h(OcM[N1@p_$Q2<C^HBEh2#k8>ZbV' );
define( 'LOGGED_IN_KEY',    'oq,Fw%+Uc0,y6@A;N.h^b2N^|a=@#/AE6?l/OaX2hLnG:P%(QCRn 3|uk./{KSSv' );
define( 'NONCE_KEY',        '- YYFFrtMT|NI<4Ked&!e49w|9l-me:V(OlF@LW2=AXRk,`z{-#&Xia8OafU|br<' );
define( 'AUTH_SALT',        ')F4]<YdO]d_J=+hBmnSr#~/~xLXhOIuqA$<|<`)p+@;n !kpgsG54n4Uf*RIUEDD' );
define( 'SECURE_AUTH_SALT', 'W`G*F9*qIPmB/$r7Te*M)5YN2_k)NM0z:V+1cVP[%94#JPq0:<-S8n)LfVZsEPc0' );
define( 'LOGGED_IN_SALT',   'z7 D.y~+ehkUlhoYuzlff]L9Nbd~FfyLfvG~oH9b@+{NbtW74Hm0Rv7+i uW^vAh' );
define( 'NONCE_SALT',       ' @E=4t/>u3)0})O5/Qa,iH9t(=sX[~JzKr-_P_^(Ul WoW90$?9E47!yLv&rK=#T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'web_service_name';

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
