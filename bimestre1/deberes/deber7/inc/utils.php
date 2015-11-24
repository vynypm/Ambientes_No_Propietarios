<?php
/**
 * Redirige a la URL especificada
 */
function http_redirect( $url ){
  header( 'Location: ' . DOCUMENT_ROOT_RELATIVA . $url );
  exit;
}

  // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
  // Nota: ¡Esto destruirá la sesión, y no la información de la sesión

function cerrar_sesion() {
  $_SESSION = array();
  if ( ini_get( "session.use_cookies" ) ) {
      $params = session_get_cookie_params();
      setcookie( session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }
  session_destroy();
}