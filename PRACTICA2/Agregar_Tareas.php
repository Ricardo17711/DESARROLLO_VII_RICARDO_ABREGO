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
        <title>Panel de Usuario - Agregar Tarea</title>
        <style>

            body{
                background-color: rgba(76, 252, 255, 41)

            }
            h1{
                text-align: center;
            
                
                
            }
            table{
                font-family: sans-serif;
                background: linear-gradient(349deg, rgba(2,0,36,1) 0%, rgba(13,244,218,0.9164040616246498) 35%, rgba(93,227,255,0.927608543417367) 100%);
                padding: 10px;
                margin-top: 4rem;
                border-radius: 10% ;
                
                
            }
            input{
                color: black;
                border-radius: 5%;
                border-color: black;
                border-style: groove;

            }

        </style>
    </head>

    <section>
        <a href="index.php">Volver</a>
    </section>

    <body>
        
    <form action="Backend/add.php" method="post" name="datos_tareas" id="datos_tareas">
        <table width="20%" align="center">
            <tr>
                <td>
                    Titulo:
                </td>
                <td>
                    <label for="titulo"></label>
                    <input type="text" name="titulo" id="titulo" require>
                </td>
            </tr>
            <tr>
                <td>
                    Descripcion:
                </td>
                <td>
                    <label for="descripcion"></label>
                    <textarea name="descripcion" id="descripcion" name="descripcion" rows="5" cols="33"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Prioridad:
                </td>
                <td>
                    <label for="prioridad"></label>
                    <input type="number" name="prioridad" id="prioridad" min="1" max="5" require>
                </td>
            </tr>
            <tr>
                <td>
                    Fecha de Creacion:
                </td>
                <td>
                    <label for="fechaCreacion"></label>
                    <input type="date" name="fechaCreacion" id="fechaCreacion" require>
                </td>
            </tr>
            <tr>
                <td>
                    Tipo:
                </td>
                <td>
                    <label for="tipo"></label>
                    <input type="text" name="tipo" id="tipo" require>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="agregar_tarea" id="agregar_tarea" value="Agregar Tarea">
                </td>
            </tr>
        </table>
    </form>

    </body>
</html>