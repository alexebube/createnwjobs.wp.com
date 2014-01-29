<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'createnwjobswp');

/** MySQL database username */
define('DB_USER', 'createnwjobswp');

/** MySQL database password */
define('DB_PASSWORD', 'createnwjobswp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<xCsQ~%y.RdO}+%SYG+}XcjHk+=Vybq|RYCwBaAm{,VP.-v2;WLIn [J4.B@+/0i');
define('SECURE_AUTH_KEY',  'F;KdQ*jnq7^;+c+RbG.BKSkvW9+0^:Q59}3fIC8saU1+i-$Z+nWfHK5=R1Jb-p&p');
define('LOGGED_IN_KEY',    'jN{yUz@Rn|d$>S#,b4PUt.P}>%@Y+X>$@I=eZ8)&adu^WCJJdEskTK:u6dQZ.uO|');
define('NONCE_KEY',        '7b-JJq&H=-AiG}@GqQ,IahH[ePeV~gtRy#hW|*=k6qZ(3YG a=5P;xZkga$11t.`');
define('AUTH_SALT',        '@?zGl^^GMrjV=|J-Y?OE-+rOL/$`f{}k8]D}WV$T~d]5>r992O&EH(/l50g~/ps:');
define('SECURE_AUTH_SALT', '?1[naRqBwe5F?:M85Mf-t1>IuIry`7>r0zGW|zw;-+1o}|=L?6.In&kV[S|]C#(k');
define('LOGGED_IN_SALT',   '5!}C$S6%4yTiP!PM31SMTRO/28wVWj#=t}]>^Ks}z.:HPTu=IBaV!|I|-^~^ +NK');
define('NONCE_SALT',       '{n&5XvK>6*-b0p#]ps~7T-/E8f2XkL5T!}d[0X$H3>(JJe 6-a}9IkKZA&_X:H+_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
