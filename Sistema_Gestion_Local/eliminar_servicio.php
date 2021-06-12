<?php

    if (!isset($_GET['id'])){
        exit();
    }

    $codigo = $_GET['id'];

    include('Controlador/connection.php');
    session_start();

    /*  Captando el id para obtener los datos de registro completo */
    $sentencia = $connection->prepare("DELETE FROM servicios_extras WHERE id_servicio = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        echo '<p class="error"Registro eliminado exitósamente</p>';
        header('Location: menu_serv_extras.php');
    } else {
        echo '<p class="error">Algo salió mal. Registro no eliminado</p>';
        die();
    }

?>