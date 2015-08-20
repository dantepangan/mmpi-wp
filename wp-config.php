<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mmpi_db');

/** MySQL database username */
//define('DB_USER', 'mmpi_user');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'Mitsudev.1234');
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** SET URL for Site */
define('WP_HOME', 'http://mitsukoshimotors.local');
define('WP_SITEURL', 'http://mitsukoshimotors.local');
//define('WP_HOME', 'http://localhost/public_html');
//define('WP_SITEURL', 'http://localhost/public_html');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{z|hv?L2{~z#nzq$9*=rnC{@^Jrz}4&WFhzA5B-{6NCtPBA *s@o:g]_(V?.^ehx');
define('SECURE_AUTH_KEY',  'c7bReG~08{&gDt;1L9UEB8/}y|ws<H&!d53pq6^6!jI;rc`bwC}TF3~W^xGaW?A`');
define('LOGGED_IN_KEY',    '$*|znx9;I3bH6BiqaVFB|HjQ|G5HYPjq5M@fx=6V+Rwe4NOV8jPDh[e?qy+3Z!o_');
define('NONCE_KEY',        ' E8n&or/HUUc|S-*hflg%]-CW9hM07Tt!/{+~`w*ANafq++x|D$H:g413ck l^#=');
define('AUTH_SALT',        'BR>}-7?5U9nI1O=(w6|!=/k!6=im!7A9xwiVH,QQg*-2:q_xM@[mB]Nlk,h{!v?t');
define('SECURE_AUTH_SALT', 'm-_^|LI=RLaMrS(:SM_n:G<n{!yhy;tS1gg@` *n5HY83 3?]pbKK8>oT3;s@qLX');
define('LOGGED_IN_SALT',   ',~D8AZ6/.TKlJM*wti_*xP,-EgAcr;E<v8{U`IGaMbYNWBpnoJ<e^PR,vdt1-ekl');
define('NONCE_SALT',       'w~CAC)f=S8!1+P+;nLg/X&krh$v=]xs;2jBKa[x],PgKe{c1|:uFU(;a/^.oY7D+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mk_';

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