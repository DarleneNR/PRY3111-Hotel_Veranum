<?php

    if (!isset($_POST['oculto'])){
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_promociones.php');
        exit();
    }

    include('connection.php');
    session_start();

    //Captando los valores del formulario
    $id2 = $_POST['id2'];
    $nom_prom = ucfirst(trim($_POST['ac_nom_prom']));
    $precio_min = $_POST['ac_precio_min'];
    $precio_max = $_POST['ac_precio_max'];
    $cant_porc = $_POST['ac_cant_porc'];
    $comentario = ucfirst(trim($_POST['ac_comentario']));

    //Actualizando tabla
    $sentencia = $connection->prepare("UPDATE promocion SET nombre_prom=?, pago_minimo=?, pago_maximo=?, porc_promocion=?, comentario=? WHERE id_promocion=?;");
    $resultado =$sentencia->execute([$nom_prom,$precio_min,$precio_max,$cant_porc,$comentario,$id2]);

    if ($resultado === TRUE) {
        echo '<p class="success">La información ingresada fue actualizada con éxito</p>';
        header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_promociones.php');
    } else {
        echo '<p class="error">Algo salió mal. Actualización no registrada</p>';
        die();
    }

?>