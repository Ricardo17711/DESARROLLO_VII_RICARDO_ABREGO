<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Error</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .contenedor {
                background-color: #fff;
                padding: 20px;
                text-align: center;
            }
            .error_mensaje{
                color: #d9534f;
                font-size: 18px;
                font-weight: bold;
            }
            .contenedor a {
                display: inline-block;
                background-color: #5bc0de;
                color: #fff;
            }
        </style>
    </head>
    <body>

        <div class="contenedor">
            <?php if(isset($_SESSION['error_mensaje'])): ?>
            
                <p class="error_mensaje"><?php echo $_SESSION['error_mensaje']; ?></p>
                <?php unset($_SESSION['error_mensaje']); ?>
                
            <?php endif; ?>
            <a href="Iniciar_Sesion.php">Volver</a>
        </div>

    </body>
</html>
