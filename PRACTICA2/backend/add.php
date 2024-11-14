<?php
    require_once 'validaciones.php'; //incluimos el archivo validaciones para verificar datos luego

    session_start(); // Inicia la sesión para acceder a las variables de sesión

    if(!isset($_SESSION['usuario'])) {
        header("Location: ../Iniciar_Sesion.php"); // si no inicio sesion lo mando a la pagina de iniciar sesion
        exit;
    }

    //Lee el contenido del archivo 'data.json' para obtener los datos de usuarios y tareas
    $jsonData = file_get_contents('data.json');
    // Decodifica el contenido JSON en un arreglo asociativo de PHP
    $data = json_decode($jsonData, true);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //guardo los campos de la peticion post en un arreglo
        $datos = ['titulo', 'descripcion','prioridad','fechaCreacion','tipo'];
        foreach ($datos as $dato){ //recorro cada dato
            if(isset($_POST[$dato])){
                //y guardo cada dato en la variable valor en cada iteracion
                $valor = $_POST[$dato];
                //envio cada dato a validar (si cumple con los requerimientos para guardar)
                $nuevaTarea[$dato] = call_user_func("validar" . ucfirst($dato), $valor);
            } else {
                exit;
            }
        }
        //puntero end(arreglo data) apunta al ultimo elemento del arreglo tareas
        //['id'] muestra el ultimo id utilizado en el arreglo data y luego lo sumo
        $nuevaTarea['id'] = end($data['tareas'])['id']+1;
        
        //guardo el id del usuario de la Sesion para que la tarea se le asigne
        $nuevaTarea['userid'] = $_SESSION['userid'];

        //seteo el estado de la tarea en pendiente
        $nuevaTarea['estado'] = "pendiente";

        //agrego la nueva tarea en el arreglo data, espacio tareas (al ser ingresada de esta manera ira al ultimo lugar del arreglo)
        $data['tareas'][] = $nuevaTarea;

        // Escribe el contenido del array $data en el archivo 'data.json'
        // - json_encode convierte el array a formato JSON
        // - JSON_PRETTY_PRINT se utiliza para formatear el JSON de una manera legible (con indentación y saltos de línea)
        file_put_contents('data.json', json_encode($data,JSON_PRETTY_PRINT));

        header("Location: ../index.php");
        exit;
    }
?>

