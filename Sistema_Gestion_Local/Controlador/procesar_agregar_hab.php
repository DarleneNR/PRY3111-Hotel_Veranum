<?php

include('connection.php');
session_start();

if (isset($_POST['agregar_habitacion'])) {

    // Aquí se está captando los datos ingresados en los campos mencionados
    $nombre_hab = ucfirst(trim($_POST['nombre_hab']));
    $precio_hab = trim($_POST['precio_hab']);
    $descripcion = ucfirst(trim($_POST['descripcion']));

    // Aquí se consulta si el nombre del servicio existe en la DB 
    $query = $connection->prepare("SELECT * FROM servicios_extras WHERE NOM_TIPO_HAB=:nombre_habitacion");
    $query->bindParam("nombre_habitacion", $nombre_hab, PDO::PARAM_STR);
    $query->execute();

    // Si el nombre del servicio existe entonces se muestra el mensaje de error
    if ($query->rowCount() > 0) {
        echo '<p class="error">El tipo de habitación ingresado ya está registrado!</p>';
    }

    // Si el nombre del servicio no existe entonces se muestra el mensaje 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO habitacion(NOM_TIPO_HAB,PRECIO,DESC_HABITACION) VALUES (:nombre_hab,:precio_hab,:descripcion)");
        $query->bindParam("nombre_hab", $nombre_hab, PDO::PARAM_STR);
        $query->bindParam("precio_hab", $precio_hab, PDO::PARAM_STR);
        $query->bindParam("descripcion", $descripcion, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result === TRUE) {
            /* echo '<p class="success">La información ingresada fue registrada con éxito</p>'; */
            header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_habitaciones.php');
            
        } else {
            echo '<p class="error">Algo salió mal. Información no registrada</p>';
            die();
        }// Variables para almacenar mensajes
            /* $_SESSION['mensaje'] = 'La información ingresada fue registrada con éxito';
            $_SESSION['mensaje_type'] = 'success'; */
    }
}

?>