<?php

include('connection.php');
session_start();

if (isset($_POST['agregar_promocion'])) {

    // Aquí se está captando los datos ingresados en los campos mencionados
    $nom_prom = ucfirst(trim($_POST['nom_prom']));
    $precio_min = $_POST['precio_min'];
    $precio_max = $_POST['precio_max'];
    $cant_porc = $_POST['cant_porc'];
    $comentario = ucfirst(trim($_POST['comentario']));

    // Aquí se consulta si el id existe en la DB 
    $query = $connection->prepare("SELECT * FROM promocion WHERE NOMBRE_PROM=:nombre_promocion");
    $query->bindParam("nombre_promocion", $nom_prom, PDO::PARAM_STR);
    $query->execute();

    // Si el nombre del servicio existe entonces se muestra el mensaje de error
    if ($query->rowCount() > 0) {
        echo '<p class="error">La promocion ingresada ya está registrada!</p>';
    }

    // Si el nombre del servicio no existe entonces se muestra el mensaje 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO promocion(NOMBRE_PROM,PAGO_MINIMO,PAGO_MAXIMO,PORC_PROMOCION,COMENTARIO) VALUES (:nom_prom,:pago_min,:pago_max,:porc_prom,:comentario)");
        $query->bindParam("nom_prom", $nom_prom, PDO::PARAM_STR);
        $query->bindParam("pago_min", $precio_min, PDO::PARAM_STR);
        $query->bindParam("pago_max", $precio_max, PDO::PARAM_STR);
        $query->bindParam("porc_prom", $cant_porc, PDO::PARAM_STR);
        $query->bindParam("comentario", $comentario, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result === TRUE) {
            /* echo '<p class="success">La información ingresada fue registrada con éxito</p>'; */
            header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_promociones.php');
            
        } else {
            echo '<p class="error">Algo salió mal. Información no registrada</p>';
            die();
        }// Variables para almacenar mensajes
            /* $_SESSION['mensaje'] = 'La información ingresada fue registrada con éxito';
            $_SESSION['mensaje_type'] = 'success'; */
    }
}

?>