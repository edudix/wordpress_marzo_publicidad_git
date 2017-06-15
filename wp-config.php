<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'marzocomanmarzo1');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'marzocomanmarzo1');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Marzo2017');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'marzocomanmarzo1.mysql.db');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '?LVNym5@M{quqq|U(d5 sQ0],JwPAEt=rPkD*IY(h)2b^KoaTYu.lV1kH%_u%G}$');
define('SECURE_AUTH_KEY', 'ePXk+iIqAX$1F|T<M%RD|%{.3C9JHbF?2:.b|yi%8Elys/DWX*G`qGG^,=(Gtgpu');
define('LOGGED_IN_KEY', 'dT8qf:hlYzH7E&j^fx64%H_aX70J+}M!j3NmlA+HT!O 3.6:BeL,:O.__<`DR4uS');
define('NONCE_KEY', 'm>h-L5PPqpdJ8TO?9UB4zp1i>4yevi@49bHB@M#hyKyAW^?Xk`_MP[7jd1AW{N*1');
define('AUTH_SALT', 'k3Oe)Gu?:Ew3GiG,BXol -p7?nucT$X4+y<^R}o}l9>_r,y;lvhEQ)?0P-8y(1O?');
define('SECURE_AUTH_SALT', 'B#J,6WtsI 8H6Q|Q7t=61`($dIiL|Ko^p2Ga]6oYp0,(84sO9;@8K}9[QruIoL/r');
define('LOGGED_IN_SALT', ' 7tm--B^pYi(X${m-pNQF*-0,II/#sA?YT`j*Q@lQ&IYwG(ql4MEmi!{fG{8nr`s');
define('NONCE_SALT', 'A/b*@2!|z;Rv&d3T02*@~Qm*@Wei`z-B&/~`xbkKie)($-jMOI]E/{=qCt)&B]?Y');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

