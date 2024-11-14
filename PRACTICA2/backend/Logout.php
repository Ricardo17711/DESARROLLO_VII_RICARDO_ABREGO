<?php

    session_start();
    session_unset(); //libero todas las variables usadas en la sesion
    session_destroy(); //borra todos los datos de la sesion

    header("Location: ../Iniciar_Sesion.php");
    exit;

?>