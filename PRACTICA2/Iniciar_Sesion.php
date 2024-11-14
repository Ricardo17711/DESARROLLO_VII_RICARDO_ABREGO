<?php
    session_start();

    // Verifica si la variable de sesión 'error_mensaje' está definida. Si lo está, la asigna a $error_mensaje, si no, deja $error_mensaje como una cadena vacía
    $error_mensaje = isset($_SESSION['error_mensaje']) ? $_SESSION['error_mensaje'] : '';

    // Verifica si la variable de sesión 'prev_user' está definida. Si lo está, la asigna a $prev_user, si no, deja $prev_user como una cadena vacía
    $prev_user = isset($_SESSION['prev_user']) ? $_SESSION['prev_user'] : '';

    // Elimina la variable de sesión 'error_mensaje' para que no se muestre repetidamente en futuras solicitudes
    unset($_SESSION['error_mensaje']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesion</title>
        <style>
            h1{
                text-align: center;
            }
            table{
                background-color: skyblue;
                padding: 10px;
                border: 3px solid;
            }
        </style>
    </head>
    <body>
        <h1>Inicio de Sesion</h1>
        
        <form action="Backend/Login.php" method="post" name="datos_usuario" id="datos_usuario">
            <table width="20%" align="center">
                <tr>
                    <td>
                        Nombre:
                    </td>
                    <td>
                        <label for="name_user"></label>
                        <!-- 'htmlspecialchars_decode' se usa para decodificar cualquier entidad HTML especial que se haya almacenado en la variable de sesión '$prev_user'-->
                        <input type="text" name="name_user" id="name_user" value="<?php echo htmlspecialchars($prev_user); ?>" require>
                    </td>
                </tr>
                <tr>
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <label for="pass_user"></label>
                        <input type="pass" name="pass_user" id="pass_user" require>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="iniciar_sesion" id="iniciar_sesion" value="IniciarSesion">
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
