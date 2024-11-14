<?php
    // Inicia la sesión para acceder a las variables de sesión
    session_start();

    // Verifica si la variable de sesión 'usuario' no está definida, lo que significa que el usuario no ha iniciado sesión
    if (!isset($_SESSION['usuario'])) {
        // Redirige al usuario a la página de inicio de sesión si no ha iniciado sesión
        header("Location: Iniciar_Sesion.php");
        // Finaliza el script para evitar que el resto del código se ejecute
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel de Usuario</title>
        
        <style>
            /* Estilos para la tabla */
            table {
                width: 100%;
                border-collapse: collapse;
            }

            caption {
                caption-side: top;
                text-align: center;
                font-size: 1.5em;
                margin-bottom: 10px;
                font-weight: bold;
            }

            th, td {
                padding: 8px 12px;
                border: 1px solid #ddd;
                text-align: left;
            }

            th {
                text-align: center;
                background-color: #f4f4f4;
            }

            tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            tbody tr:hover {
                background-color: #f1f1f1;
            }

            h2 {
                color: #333;
            }

            a {
                display: inline-block;
                margin-bottom: 20px;
                text-decoration: none;
                background-color: #007BFF;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
            }

            a:hover {
                background-color: #0056b3;
            }
        </style>

    </head>

    <section>
        <a href="Backend/Logout.php">Cerrar Sesión</a>
        <a href="Agregar_Tareas.php">Agregar Tarea</a>
    </section>
    
    <body>
        <h2>
            <!-- 'htmlspecialchars_decode' se usa para decodificar cualquier entidad HTML especial que se haya almacenado en la variable de sesión 'usuario'-->
            Bienvenido, <?php echo htmlspecialchars_decode($_SESSION['usuario']); ?> !
        </h2>
        
        <p>
            Tienes Tareas Pendientes.
        </p>

        <?php

            // Lee el contenido del archivo 'data.json' ubicado en la carpeta 'Backend'
            $jsonData = file_get_contents('Backend/data.json');
            // Decodifica el contenido JSON en un arreglo asociativo de PHP
            $data = json_decode($jsonData, true);
            // Extrae el arreglo de 'usuarios' desde los datos decodificados
            $usuarios = $data['usuarios'];
            // Extrae el arreglo de 'tareas' desde los datos decodificados
            $tareas = $data['tareas'];

        ?>

        <table>

            <caption>Tareas Pendientes</caption>

            <thead>
                <th>
                    ID
                </th>
                <th>
                    Titulo
                </th>
                <th>
                    Descripción
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Prioridad
                </th>
                <th>
                    Fecha de Creación
                </th>
                <th>
                    Tipo
                </th>
            </thead>

            <tbody>
                <?php foreach($tareas as $tarea): ?>
                    <?php if ($tarea['userid'] == $_SESSION['userid']): ?>
                        <tr>
                            <td> <?php echo $tarea['id'] ?> </td>
                            <td> <?php echo $tarea['titulo'] ?> </td>
                            <td> <?php echo $tarea['descripcion'] ?>  </td>
                            <td> <?php echo $tarea['estado'] ?>  </td>
                            <td> <?php echo $tarea['prioridad'] ?>  </td>
                            <td> <?php echo $tarea['fechaCreacion'] ?>  </td>
                            <td> <?php echo $tarea['tipo'] ?>  </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>    
            </tbody>

        </table>

    </body>

</html>