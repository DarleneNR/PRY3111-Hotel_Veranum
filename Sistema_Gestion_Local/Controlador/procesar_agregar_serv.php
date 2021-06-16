<?php

include('connection.php');
session_start();

if (isset($_POST['agregar_servicio'])) {

    // Aquí se está captando los datos ingresados en los campos mencionados
    $nombre_serv = ucfirst(trim($_POST['nombre_serv']));
    $precio_serv = trim($_POST['precio_serv']);
    $descripcion = ucfirst(trim($_POST['descripcion']));

    // Aquí se consulta si el nombre del servicio existe en la DB 
    $query = $connection->prepare("SELECT * FROM servicios_extras WHERE NOMBRE_SERVICIO=:nombre_servicio");
    $query->bindParam("nombre_servicio", $nombre_serv, PDO::PARAM_STR);
    $query->execute();

    // Si el nombre del servicio existe entonces se muestra el mensaje de error
    if ($query->rowCount() > 0) {
        echo '<p class="error">El servicio ingresado ya está registrado!</p>';
    }

    // Si el nombre del servicio no existe entonces se muestra el mensaje 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO servicios_extras(NOMBRE_SERVICIO,PRECIO,DESC_SERVICIO) VALUES (:nombre_serv,:precio_serv,:descripcion)");
        $query->bindParam("nombre_serv", $nombre_serv, PDO::PARAM_STR);
        $query->bindParam("precio_serv", $precio_serv, PDO::PARAM_STR);
        $query->bindParam("descripcion", $descripcion, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result === TRUE) {
            /* echo '<p class="success">La información ingresada fue registrada con éxito</p>'; */
            header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_serv_extras.php');
            
        } else {
            echo '<p class="error">Algo salió mal. Información no registrada</p>';
            die();
        }// Variables para almacenar mensajes
            /* $_SESSION['mensaje'] = 'La información ingresada fue registrada con éxito';
            $_SESSION['mensaje_type'] = 'success'; */
    }
}

?>