<?php

    if (!isset($_GET['id'])){
        exit();
    }

    include('../Controlador/connection.php');

    $id = $_GET['id'];

    /*  Captando el id para obtener los datos de registro completo */
    $sentencia = $connection->prepare("SELECT * FROM servicios_extras WHERE id_servicio = ?;");
    $sentencia->execute([$id]);

    /* Comenzando actualización */
    $servicio = $sentencia->fetch(PDO::FETCH_OBJ);
    /* $sentencia = $connection->prepare("SELECT * FROM servicios_extras WHERE id_servicio = 'id'");
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

        <link rel="stylesheet" href="\PRY3111-Hotel_Veranum\Sistema_Gestion_Local\CSS\actualizar_servicio.css" type="text/css">

        <title>Actualizar servicio extra</title>
    </head>
    <body>
        <!-- Formulario -->
        <div class="i-body">
            <div class="frame-actualizar">
                <div id="title" class="row justify-content-md-center">
                    <h1 class="justify-content-md-center">Actualización del servicio</h1>
                </div>
                <form id="form-actualizar" action="../Controlador/procesar_actualizar_serv.php" name="actualizar_servicio" method="POST">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="row justify-content-md-center">
                                <!-- Campos para el ingreso de datos -->
                                <!-- Consulta -->
                                
                                <!-- Fin Consulta -->
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-6" for="nombre_serv" style="padding-bottom: 45px;">Nombre: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="nombre_serv" name="ac_nombre_serv" type="text" value="<?php echo $servicio->nombre_servicio;?>" minlength="5"/>
                                </div>
                                <br><br>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-2" for="ac_precio_serv" style="padding-bottom: 45px;">Precio: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="precio_serv" name="ac_precio_serv" type="number" value="<?php echo $servicio->precio;?>" minlength="4"/>
                                </div>
                                    <br><br>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-2" for="ac_descripcion" style="padding-bottom: 45px;">Descripción: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <textarea style="width:260px;" class="form-control" id="descripcion" name="ac_descripcion" type="text" value="" rows="5" cols="30" minlength="5"><?php echo $servicio->desc_servicio;?></textarea>
                                </div>
                            </div>
                            <!-- Fin Campos para el ingreso de datos -->
                            <br><br>
                            <div class="botones">
                                <input type="hidden" name="oculto">
                                <input type="hidden" name="id2" value="<?php echo $servicio->id_servicio;?>">
                                <button type="reset" class="btn btn-info" id="volver" value="">Volver</button>
                                <button type="submit" class="btn btn-info" id="actualizar">Actualizar</button>
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

    <script type="text/javascript" src="\PRY3111-Hotel_Veranum\Sistema_Gestion_Local\JS\actualizar_servicio.js"></script>
</html>