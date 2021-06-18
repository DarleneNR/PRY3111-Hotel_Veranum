<?php

include('connection.php');
session_start();

if (isset($_POST['agregar_descuento'])) {

    // Aquí se está captando los datos ingresados en los campos mencionados
    $nombre_desc = ucfirst(trim($_POST['nombre_desc']));
    $porc_desc = $_POST['porc_desc'];
    $fecha_inicio_desc = $_POST['fecha_ini_desc'];
    $fecha_termino_desc = $_POST['fecha_fin_desc'];

    // Aquí se consulta si el nombre del servicio existe en la DB 
    $query = $connection->prepare("SELECT * FROM descuentos WHERE NOM_TIPO_DESC=:nom_tipo_desc");
    $query->bindParam("nom_tipo_desc", $nombre_desc, PDO::PARAM_STR);
    $query->execute();

    // Si el nombre del descuento existe entonces se muestra el mensaje de error
    if ($query->rowCount() > 0) {
        echo '<p class="error">El descuento ingresado ya está registrado!</p>';
    }

    // Si el nombre del descuento no existe entonces se muestra el mensaje 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO descuentos(NOM_TIPO_DESC,PORC_DESC,FECHA_INI_DESC,FECHA_FIN_DESC) VALUES (:nombre_desc,:porc_desc,:fecha_inicio,:fecha_termino)");
        $query->bindParam("nombre_desc", $nombre_desc, PDO::PARAM_STR);
        $query->bindParam("porc_desc", $porc_desc, PDO::PARAM_STR);
        $query->bindParam("fecha_inicio", $fecha_inicio_desc, PDO::PARAM_STR);
        $query->bindParam("fecha_termino", $fecha_termino_desc, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result === TRUE) {
            /* echo '<p class="success">La información ingresada fue registrada con éxito</p>'; */
            header('Location: \PRY3111-Hotel_Veranum\Sistema_Gestion_Local\menu_descuentos.php');
        } else {
            echo '<p class="error">Algo salió mal. Información no registrada</p>';
            die();
        }// Variables para almacenar mensajes
            /* $_SESSION['mensaje'] = 'La información ingresada fue registrada con éxito';
            $_SESSION['mensaje_type'] = 'success'; */
    }
}

?>