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
define('DB_NAME', 'vagrant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

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
define('AUTH_KEY',         '</zA?V-6IHPBkX~d/0}H5|%YS(6oNV|Dcr{}E$f<d8g0/rfkDJ_X]|5[X(O99;6%');
define('SECURE_AUTH_KEY',  '=)kpn${d|96jyjy+Ap!~-TX[u->$A]xX]*HZMjn;ND.yN $#|bz]|yqAuXqP9nHN');
define('LOGGED_IN_KEY',    '[DC1]G789Vrjd3i%@-&=*4ZaW(i2vvrc/434b51E0 Bc_Q/&_7]6kDJf{[0:Y86u');
define('NONCE_KEY',        '73!#|~P!2EzA^X8+(.Xw#r8)N]VqtX[l(;Y<J}b4F-jIdN+=*8fCp|6&^ly+xDM(');
define('AUTH_SALT',        'C{`>KX2r{wuil[i7/i|#55E|CG-PLoXJ}7,^c1W2NaEg2~ydv~!*~S>#+ug:M6~/');
define('SECURE_AUTH_SALT', '|WA#?l%a%Z)Lu,!/!Sgj5GVI> 5-o%C_}0-f (fSZ]i[+(UAjx0]1O|7O)aB.2RO');
define('LOGGED_IN_SALT',   'o/Z_U|Q}v%A8q?<N<+PR2[|.p$[*S!E=PlOV1/_R9VN-c!o0{$h.7u,brMkVS-e^');
define('NONCE_SALT',       '!6iGmDM,AjEI%}iATMj1um.>X~RIP*>a2 H1vI^3UMuc}H)V~f7ThDGy8w}&4c@@');

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
