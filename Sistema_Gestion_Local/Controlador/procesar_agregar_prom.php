<?php

include('connection.php');
session_start();

if (isset($_POST['agregar_promocion'])) {

    // Aquí se está captando los datos ingresados en los campos mencionados
    $nombre_prom = ucfirst(trim($_POST['nombre_prom']));
    $precio_prom = trim($_POST['precio_prom']);
    $descripcion = ucfirst(trim($_POST['descripcion']));

    // Aquí se consulta si el nombre del servicio existe en la DB 
    $query = $connection->prepare("SELECT * FROM promociones_extras WHERE NOMBRE_promocion=:nombre_promocion");
    $query->bindParam("nombre_promocion", $nombre_prom, PDO::PARAM_STR);
    $query->execute();

    // Si el nombre del servicio existe entonces se muestra el mensaje de error
    if ($query->rowCount() > 0) {
        echo '<p class="error">El servicio ingresado ya está registrado!</p>';
    }

    // Si el nombre del servicio no existe entonces se muestra el mensaje 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO promociones_extras(NOMBRE_PROMOCION,PRECIO,DESC_PROMOCION) VALUES (:nombre_prom,:precio_prom,:descripcion)");
        $query->bindParam("nombre_prom", $nombre_prom, PDO::PARAM_STR);
        $query->bindParam("precio_prom", $precio_prom, PDO::PARAM_STR);
        $query->bindParam("descripcion", $descripcion, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result === TRUE) {
            /* echo '<p class="success">La información ingresada fue registrada con éxito</p>'; */
            header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_prom_extras.php');
            
        } else {
            echo '<p class="error">Algo salió mal. Información no registrada</p>';
            die();
        }// Variables para almacenar mensajes
            /* $_SESSION['mensaje'] = 'La información ingresada fue registrada con éxito';
            $_SESSION['mensaje_type'] = 'success'; */
    }
}

?>