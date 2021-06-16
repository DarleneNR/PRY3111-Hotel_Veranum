<?php

    if (!isset($_GET['id'])){
        exit();
    }

    include('../Controlador/connection.php');

    $id = $_GET['id'];

    /*  Captando el id para obtener los datos de registro completo */
    $sentencia = $connection->prepare("SELECT * FROM descuentos WHERE id_descuento = ?;");
    $sentencia->execute([$id]);

    /* Comenzando actualización */
    $descuento = $sentencia->fetch(PDO::FETCH_OBJ);
    /* $sentencia = $connection->prepare("SELECT * FROM descuentos WHERE id_descuento = 'id'");
    $resultado = mysqli_query($connection, $sentencia); */

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <link rel="stylesheet" href="\PRY3111-Hotel_Veranum\Sistema_Gestion_Local\CSS\actualizar_descuento.css" type="text/css">
        
        <title>Actualizar descuento</title>
    </head>
    <body>
        <!-- Formulario -->
        <div class="i-body">
            <div class="frame-actualizar">
                <div id="title" class="row justify-content-md-center">
                    <h1 class="justify-content-md-center">Actualización del descuento</h1>
                </div>
                <form id="form-actualizar-desc" action="/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/Controlador/procesar_actualizar_desc.php" name="agregar_descuento" method="POST">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="row justify-content-md-center">
                                <!-- Mensaje de confirmación -->
                                <?php if(isset($_SESSION['mensaje'])) { ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php $_SESSION['mensaje'] ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>

                                <!-- Campos para el ingreso de datos -->
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-6" for="ac_nombre_desc" style="padding-bottom: 45px;">Nombre: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="ac_nombre_desc" name="ac_nombre_desc" type="text" value="<?php echo $descuento->nom_tipo_desc;?>" minlength="5"/>
                                </div>
                                <br><br>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-2" for="ac_porc_desc" style="padding-bottom: 45px;">Porcentaje: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="ac_porc_desc" name="ac_porc_desc" type="number" value="<?php echo $descuento->porc_desc;?>" minlength=" 0.999"/>
                                </div>
                                <br><br>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-2" for="ac_fecha_ini_desc" style="padding-bottom: 45px;">Fecha de inicio: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="ac_fecha_ini_desc" name="ac_fecha_ini_desc" type="date" value="<?php echo $descuento->fecha_ini_desc;?>"></input>
                                </div>
                                <br>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-2" for="ac_fecha_fin_desc" style="padding-bottom: 45px;">Fecha de término: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="ac_fecha_fin_desc" name="ac_fecha_fin_desc" type="date" value="<?php echo $descuento->fecha_fin_desc;?>"></input>
                                </div>
                                </div>
                            <!-- Fin Campos para el ingreso de datos -->
                            <br><br>
                            <!-- Botones -->
                            <div class="botones">
                                <input type="hidden" name="oculto">
                                <input type="hidden" name="id2" value="<?php echo $descuento->id_descuento;?>">
                                <button type="reset" class="btn btn-info" id="volver_desc" name="volver" value="volver">Volver</button>
                                <button type="submit" class="btn btn-primary" id="actualizar_desc" name="actualizar_descuento" value="actualizar_descuento" data-toggle="modal" data-target="#confirmarAgregar">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Fin Formulario -->

        <!-- Footer -->
        <div id="pie-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p class="titulo-footer">Desarrollado por equipo Diaguitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </boody>
    <!-- Agregados -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https:/kit.fontawesome.com/a50cbb9aa4.js"></script>
    <!-- Validación con librerias -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script type="text/javascript" src="\PRY3111-Hotel_Veranum\Sistema_Gestion_Local\JS\actualizar_registro.js"></script>
</html>