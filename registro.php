<?php
session_start();
if(isset($_POST)){
    
    $nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;  
    
    //array de errores
    $errores = Array();
    
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['Nombre'] = "El nombre no es valido";
    }
    
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos son validos";
    }
    
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "El email es invalido";
    }
    
     if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "La contraseña esta vacía";
    }
    
    $guardar_usuario = false;
    
    if(count($errores) == 0){
        //insertar usuario en la base de datos
        $guardar_usuario = true;
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
        
    }    
//    var_dump($errores);

}
