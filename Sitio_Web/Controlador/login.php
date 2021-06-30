<?php

include('connection.php');
session_start();

// Capturando username y password
if (isset($_POST['iniciar_s'])) {
    $username = $_POST['username_login'];
    $password_user = $_POST['pass_login'];

    // Verificando si el usernmame existe en la BD por medio del script SQL 
    $query = $connection->prepare("SELECT * FROM cliente WHERE NOMBRE_USER = :nombre_user AND PASSWORD = :password_user");
    $query->bindParam("nombre_user", $username, PDO::PARAM_STR);
    $query->bindParam("password_user", $password_user, PDO::PARAM_STR);
    $query->execute();

    // Se guarda todo lo encontrado en la BD en result
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Si no hay datos entrege el mensaje de error
    if (!$result) {
        echo '<p class="error">El usuario ingresado no está registrado!</p>';
    
    // Si encuentra datos, entonces:
    } else {
        echo '<p class="error">Bienvenido(a)<br>Disfruta de tu navegación en Veranum!</p>';
    }
}

?>