<?php

    if (!isset($_POST['oculto'])){
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_descuentos.php');
        exit();
    }

    include('connection.php');
    session_start();

    //Captando los valores del formulario
    $id2 = $_POST['id2'];
    $nombre_desc = ucfirst(trim($_POST['ac_nombre_desc']));
    $porc_desc = $_POST['ac_porc_desc'];
    $fecha_inicio = $_POST['ac_fecha_ini_desc'];
    $fecha_termino = $_POST['ac_fecha_fin_desc'];


    //Actualizando tabla
    $sentencia = $connection->prepare("UPDATE descuentos SET nom_tipo_desc=?, porc_desc=?, fecha_ini_desc=?, fecha_fin_desc=? WHERE id_descuento=?;");
    $resultado =$sentencia->execute([$nombre_desc,$porc_desc,$fecha_inicio,$fecha_termino,$id2]);

    if ($resultado === TRUE) {
        echo '<p class="success">La información ingresada fue actualizada con éxito</p>';
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_descuentos.php');
    } else {
        echo '<p class="error">Algo salió mal. Actualización no registrada</p>';
        die();
    }

?>