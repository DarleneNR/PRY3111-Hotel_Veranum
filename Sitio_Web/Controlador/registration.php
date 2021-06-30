<?php

include('connection.php');
session_start();

if (isset($_POST['registrar'])) {

    // Captando los datos ingresados en los campos mencionados
    $num_rut = $_POST['num_rut'];
    $dv_rut = $_POST['dv_rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fec_nac = $_POST['fec_nac'];
    $email =  $_POST['email'];
    $username = $_POST['username'];
    $password_user = $_POST['pass'];
    // Encriptación de contraseña
    /* $password_hash = password_hash($password, PASSWORD_BCRYPT); */

    // Consultando si el username existe en la DB 
    $query = $connection->prepare("SELECT * FROM cliente WHERE NOMBRE_USER = :nombre_user");
    $query->bindParam("nombre_user", $username, PDO::PARAM_STR);
    $query->execute();

    // Si el username existe entonces se muestra el mensaje de error
    if ($query->rowCount() > 0) {
        echo '<p class="error">El nombre de usuario ingresado ya está registrado!</p>';
    }

    // Si el username no existe entonces se muestra el mensaje 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO cliente(NUMRUT_CLI,DV_RUT,NOMBRE_CLI,APELLIDO_CLI,FECHA_NAC,EMAIL,NOMBRE_USER,PASSWORD) VALUES (:num_rut,:dv_rut,:nombre,:apellido,:fec_nac,:email,:username,:password_user)");
        $query->bindParam("num_rut", $num_rut, PDO::PARAM_STR);
        $query->bindParam("dv_rut", $dv_rut, PDO::PARAM_STR);
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("apellido", $apellido, PDO::PARAM_STR);
        $query->bindParam("fec_nac", $fec_nac, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_user", $password_user, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Ha sido registrado con existo!<br>Bienvenido(a) a Veranum</p>';
        } else {
            echo '<p class="error">Algo salió mal!</p>';
        }
    }
}

?>