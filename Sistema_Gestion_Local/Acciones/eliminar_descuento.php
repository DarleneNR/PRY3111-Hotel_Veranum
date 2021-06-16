<?php

    if (!isset($_GET['id'])){
        exit();
    }

    $codigo = $_GET['id'];

    include('C:\xampp\htdocs\PRY3111-Hotel_Veranum\Sistema_Gestion_Local\Controlador\connection.php');
    session_start();

    /*  Captando el id para obtener los datos de registro completo */
    $sentencia = $connection->prepare("DELETE FROM descuentos WHERE id_descuento = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        echo '<p class="error"Registro eliminado exitósamente</p>';
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_descuentos.php');
    } else {
        echo '<p class="error">Algo salió mal. Registro no eliminado</p>';
        die();
    }

?>