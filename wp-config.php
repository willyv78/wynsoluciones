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
define('DB_NAME', 'wynsoluciones');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'gemelo22');

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
define('AUTH_KEY', 'w.oNzn<12K=ES&r[D3Ipv^keUsb/onZ3+y06H:dbH>?]w,9$5^2 w@7QDd>CExzo');
define('SECURE_AUTH_KEY', 'E?!!,9nX< 4W]M#[(+n?>rZieP65nrS;ZoIKJ>CUCkqjfwYjGA2`g<QXg.=Oa8>t');
define('LOGGED_IN_KEY', '246o]MAK2FZ t_9L|}?R?#R,D6&Ndxo:$!CqHd%&<qn!jh*11ou g3~=d0Guh[SW');
define('NONCE_KEY', '=fLVmMKyS-Ny9EL&Nl.fuUilQG-2Luf-K&<~J)5v@Xyc3W2MG[xrERpQ;P$4u*nz');
define('AUTH_SALT', 'Wu>.FFBBF_jNbiIO42i+85}N}KbdM.y&`NU$9t`v=IIQdAH/i,l6/uc_f?x1B_jz');
define('SECURE_AUTH_SALT', 'mG#{3%:gbEVVjC`? ?E`}Y7s_WV1r>PA|u/l@{O6&s!gZ&okAjE-/s :B`e#w|FK');
define('LOGGED_IN_SALT', 'VpN]iQTdIYAd/RI3roT+eWL8+W$4w4qJc47^AF5 ]EAtnMb>HG|a%IJ&rI)Q< q$');
define('NONCE_SALT', 'PQpzY#r,Macqe$Y-k{j#!4ot}D@#yHz=F%ORxCaoALMuC& D`>Hp:ShU[B*&8PV6');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wyn_';


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

