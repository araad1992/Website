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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'Y!=Lnwuo~g}HM^6zQ9ho/m+zW_UhaL@g1R9Q5(kCLrCkvZJo9 )aFvC=|Kjn~ st');
define('SECURE_AUTH_KEY', '+eS:OLY#{KbC3QgMhT|$w4,O1eLicNAE,|TN[V*s7)r[b4^6}Y*0Gmqgw6 OaF?R');
define('LOGGED_IN_KEY', 'Hd<A+d(9M~QLj-Br%WkcN[J33!h{5SP3OL[*>FwPIY^!#b{.|YxzxCKndzmJ1-U0');
define('NONCE_KEY', 'C1E^eutWB DLp*Iz0|;~~s8iOwHTRgzg>K%=5lj>f[X&%mxHM!ADJ>-ttLiya7fX');
define('AUTH_SALT', 'z@+4)1.Bpm^F&6xJLI.]B`c|d2u$TUWa%Ok;T>(S$A?290[^tN_wzb tj[>`&4gW');
define('SECURE_AUTH_SALT', '_Z~2D_0#ko%9jj};1ghcW`pF7$gc3KZ=xL>Dn~c{hN0CH[3:,G|0gMjQD=3r8j.C');
define('LOGGED_IN_SALT', 'eYRDwd_!t`6J)Oua?XN|3mu4BUNFB>E81BOoX64t/9egUW)SksZoC13QP4A8Ei_?');
define('NONCE_SALT', 'gQyA(9cSoA{YcSp%Y`tvoC,87_*n8|&.{EOs2*P!jl`9rtgmu]qaVPbM-T#UZWwk');

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

