<?php

function mostrarError($errores, $campo){
    $alert = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alert = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    return $alert;
}
function borrarErrores(){
    $borrado = 0;
    if(isset($_SESSION['errores'])){
    $_SESSION['errores'] = null;
    $borrado = session_unset();
    }
if(isset($_SESSION['completado'])){
    $_SESSION['completado'] = null;
    $borrado = session_unset();
}
    
    return $borrado;
}
