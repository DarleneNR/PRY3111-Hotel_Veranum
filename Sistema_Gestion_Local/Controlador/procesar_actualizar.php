<?php

    if (!isset($_POST['oculto'])){
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_serv_extras.php');
        exit();
    }

    include('connection.php');
    session_start();

    //Captando los valores del formulario
    $id2 = $_POST['id2'];
    $nombre_serv = trim($_POST['ac_nombre_serv']);
    $precio_serv = trim($_POST['ac_precio_serv']);
    $descripcion = trim($_POST['ac_descripcion']);

    //Actualizando tabla
    $sentencia = $connection->prepare("UPDATE servicios_extras SET nombre_servicio=?, precio=?, desc_servicio=? WHERE id_servicio=?;");
    $resultado =$sentencia->execute([$nombre_serv,$precio_serv,$descripcion,$id2]);

    if ($resultado === TRUE) {
        echo '<p class="success">La información ingresada fue registrada con éxito</p>';
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_serv_extras.php');
    } else {
        echo '<p class="error">Algo salió mal. Actualización no registrada</p>';
        die();
    }

?>






