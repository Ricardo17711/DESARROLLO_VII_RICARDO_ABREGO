<?php

    // Inicia la sesión para acceder a las variables de sesión
    session_start();

    // Lee el contenido del archivo 'data.json' para obtener los datos de usuarios y tareas
    $jsonData = file_get_contents('data.json');
    // Decodifica el contenido JSON en un arreglo asociativo de PHP
    $data = json_decode($jsonData, true);
    // Extrae el arreglo de 'usuarios' desde los datos decodificados
    $usuarios = $data['usuarios'];

    // Verifica si la variable de sesión 'usuario' está definida
    if (isset($_SESSION['usuario'])) {
        // Redirige al usuario a la página 'index.php' si ya está autenticado
        header("Location: ../index.php");
        exit;
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $user = trim($_POST['name_user']); //trim borra espacios en blanco
        $pass = trim($_POST['pass_user']); //trim borra espacios en blanco
        $user_found = false;

        // Verifica si las variables $user o $pass están vacías
        if (empty($user) || empty($pass)) {
            // Si alguna de las variables está vacía, establece un mensaje de error en la sesión
            $_SESSION['error_mensaje'] = "Error: Los campos no pueden estar vacíos.";
            // Almacena el nombre de usuario previamente ingresado para mostrarlo de nuevo
            $_SESSION['prev_user'] = $user;
            
            header("Location: ../Retornar.php");
            exit;
        }

        foreach ( $usuarios as $usuario ){
            $user_S = $usuario['user'];
            $pass_S = $usuario['contrasena'];
            $id = $usuario['id'];

            if ($user === $user_S) {
                $user_found = true; //cambia el estado de busque a verdadero (signifca que el usuario existe)
    
                if ($pass === $pass_S) {
                    //creamos la sesion del usuario ingresado
                    $_SESSION['usuario'] = $user; 
                    $_SESSION['contrasena'] = $pass;
                    $_SESSION['userid'] = $id;
                    //lo dirigimos a su sesion
                    header("Location: ../index.php");
                    exit;
                } else {
                    //si la contraseña no es valida le guardo el mensaje de error en la sesion
                    $_SESSION['error_mensaje'] = "Error: Contraseña no valida.";
                    $_SESSION['prev_user'] = $user; //guardo su nombre de usuario (persistencia de dato)
                    header("Location: ../Retornar.php");
                    exit();
                }
            }            
        }
    } 

    //si la variable de busque no cambia de estado, significa que el usuario no se encontro en la BD (el json poco que tengo)
    if ( !$user_found ){
        //guardo el mensaje de error en la session para mostrarlo al usuario
        $_SESSION['error_mensaje'] = "Error: El usuario ingresado no existe.";
        header("Location: ../Retornar.php");
        exit;
    }
?>