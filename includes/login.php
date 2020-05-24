<?php
//iniciar la sesion y la conxion a la base de datos
require_once 'conexion.php';


//recoger datos del formulario
if (isset($_POST)) {
    //borrar sesion antigua
    if (isset($_SESSION['error_login'])) {
                session_unset($_SESSION['error_login']);
            }
       //recoger datos usuario     
    $email = trim($_POST['email']);
    $password = $_POST['password'];
//consulta para comprobar la credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        //comprobar la contraseña / cifrar
        $verify = password_verify($password, $usuario['password']);
        if ($verify) {
//utilizar una sesion para guardar  los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;
            
        } else {
            //si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "Nombre de usuario o contraseña incorrecta";
        }
    } else {
        $_SESSION['error_login'] = "Nombre de usuario o contraseña incorrecta";
    }
}
header('Location: index.php');
