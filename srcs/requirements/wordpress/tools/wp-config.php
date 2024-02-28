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
define( 'DB_USER', 'miguelro' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
*
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'N(!m+,lq-MHzA!=KG4IfaaDKXx;yHo|G9hWd]:Y?|<cs/;H<|c8qn[W`%kb!cGO(');
define('SECURE_AUTH_KEY',  'KqC9EWbA%`|`-_P@/,(;B=1 *MrdJu4A}a*6fMWeCKhDV:-|Qe;f;i7;+(w)wDQc');
define('LOGGED_IN_KEY',    '*!hqy-fsX+[.`KwFiSImf}Z$x.Qs/*_-?tlfwd*NCa|>%NftZ@Q>5Ld+-^a}Xt`=');
define('NONCE_KEY',        'O5yqEI}Lq-z,K3EM6 ~E|U;]=Vg~ZG$0>T;yL;cK=>J3;ga{0$Np+xQ<#sgE9^*%');
define('AUTH_SALT',        'PC|{)1)y&6s1l,q55:z-EY_{+fdF+{td}37Q?#4CqO#-Sg%i-sVH;*4GU`&[Df,;');
define('SECURE_AUTH_SALT', ';%NIv3}W 82C)V}HI8NaXe-nbjsMy+k?]s@4_G9aF1}ft^YRjy `!~]5wWidW9- ');
define('LOGGED_IN_SALT',   '^D+(LsDsY6rj~T?FEpCjUCN6Ad35mXt!?+oZ/B:}5.8bYss*6cZMCoRKc&9@Bp~u');
define('NONCE_SALT',       '9#@-/Sl.US9DKDzvEPjY%3$p&]+;qZj0&)jmGyzesp>8<*vWD- ~^jWQAZO(:X0}');

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
?>