<?php

    if (!isset($_POST['oculto'])){
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_habitaciones.php');
        exit();
    }

    include('connection.php');
    session_start();

    //Captando los valores del formulario
    $id2 = $_POST['id2'];
    $ac_nombre_hab = $_POST['ac_nombre_hab'];
    $ac_cant_bannos = $_POST['ac_cant_bannos'];
    $ac_cant_camas = $_POST['ac_cant_camas'];
    $ac_precio = $_POST['ac_precio'];
    $ac_descripcion = ucfirst(trim($_POST['ac_descripcion']));

    //Actualizando tabla
    $sentencia = $connection->prepare("UPDATE habitacion SET nom_tipo_hab=?,cantidad_banio=?,cantidad_cama=?,precio=?,desc_habitacion=? WHERE id_habitacion=?;");
    $resultado =$sentencia->execute([$ac_nombre_hab,$ac_cant_bannos,$ac_cant_camas,$ac_precio,$ac_descripcion,$id2]);

    if ($resultado === TRUE) {
        echo '<p class="success">La información ingresada fue actualizada con éxito</p>';
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_habitaciones.php');
    } else {
        echo '<p class="error">Algo salió mal. Actualización no registrada</p>';
        die();
    }

?>