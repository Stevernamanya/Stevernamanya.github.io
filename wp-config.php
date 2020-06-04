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
define( 'DB_NAME', 'bdigest' );

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
define( 'AUTH_KEY',         '2PNsEz%IkX|0oDy1eb|RkQX!1dsu/_tN0Jk=M=A5c.5e?C7bX!6;pM@w<5|%i8pt' );
define( 'SECURE_AUTH_KEY',  'okG04Y:,eR1.<v!KpZ<#S2`Vn=ZE5@drp&i 3a;&)t9.HW`xhf6mpAZa<i-}y3Pj' );
define( 'LOGGED_IN_KEY',    'n3k*b[R1Blpcn)F:Sh9ytz%$oe9eZKGcKC#!Z#6n=aHf.%cnjrr1{kr,M}kWI+Y#' );
define( 'NONCE_KEY',        'r%SDVs%zs69yLP):NXqB{{uw+SqdPqG{d6d[dU{cQT!m!;}$& {:YsYW%@n$8<`N' );
define( 'AUTH_SALT',        'AQAQ~VzGC7*~|}>|minR3olQLkaYc#wq/`V)Vx>@=tUS{|pEH5o2$UB-G+WE)vhV' );
define( 'SECURE_AUTH_SALT', 'B#hH4>mm(z:o]%q?MN`V8G[hL6T:Z|e8lpmVT)SG=TMn&0bZ6|5x=2o|@%246_O|' );
define( 'LOGGED_IN_SALT',   'G|;*7@sG* El]Ss9q5Ii$CUKYv`M:l$fSh%iXUH}Oo:dol(OazXA`?wEoEF_z7R_' );
define( 'NONCE_SALT',       '3Pl&^6D2,TOIIMj5Jx*8bQ^&w?!ur5JfLK4/yGs!5=i$b+YKj7l~zX2?}uPEtu+o' );

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
