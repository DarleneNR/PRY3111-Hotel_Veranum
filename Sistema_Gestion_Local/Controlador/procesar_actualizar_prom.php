<?php

    if (!isset($_POST['oculto'])){
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_prom.php');
        exit();
    }

    include('connection.php');
    session_start();

    //Captando los valores del formulario
    $id2 = $_POST['id2'];
    $nombre_serv = ucfirst(trim($_POST['ac_nombre_prom']));
    $precio_serv = trim($_POST['ac_precio_prom']);
    $descripcion = ucfirst(trim($_POST['ac_descripcion']));

    //Actualizando tabla
    $sentencia = $connection->prepare("UPDATE promociones_extras SET nombre_promociones=?, precio=?, desc_promociones=? WHERE id_promociones=?;");
    $resultado =$sentencia->execute([$nombre_prom,$precio_prom,$descripcion,$id2]);

    if ($resultado === TRUE) {
        echo '<p class="success">La información ingresada fue actualizada con éxito</p>';
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_prom_extras.php');
    } else {
        echo '<p class="error">Algo salió mal. Actualización no registrada</p>';
        die();
    }

?>