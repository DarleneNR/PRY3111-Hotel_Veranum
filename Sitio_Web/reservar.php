<?php
    include('./Controlador/connection.php');

    $sentencia = $connection->query("SELECT distinct nom_tipo_hab FROM habitacion");
    $sentencia_serv = $connection->query("SELECT distinct nombre_servicio FROM servicios_extras");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Iconos -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

        <link rel="stylesheet" href="./CSS/reservar.css" type="text/css">

        <title>Reservar - Veranum</title>
    </head>
    <body>
        <div id="back-all">
            <div class="container" id="reserva">
                <section>
                    <h1>Reserva y disfruta de la experiencia</h1>
                </section>
                <!-- Campos a llenar -->
                <div class="campos">
                    <!-- Datos Personales -->
                    <div class="row row-50 justify-content-lg-center align-items-lg-center" id="contacto-general">
                        <span>Datos Personales</span>
                        <div class="col-lg-6">
                            <label for="fname" class="control-label col-xs-2">Nombre(s)</label>
                            <input id="fname" name="fname" type="text" placeholder="Nombre(s)" class="form-control" minlength="7" autofocus required>
                        </div>
                        <div class="col-lg-6">
                            <label for="lname" class="control-label col-xs-2">Apellidos</label>
                            <input id="lname" name="lname" type="text" placeholder="Apellidos" class="form-control" minlength="7" required>
                        </div>
                        <br><br><br>
                        <div class="col-lg-6">
                            <label for="telf" class="control-label col-xs-2">Teléfono/Celular</label>
                            <input id="telf" name="telf" type="number" placeholder="987654321" class="form-control" minlength="8" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="control-label col-xs-2">Email</label>
                            <input id="email" name="email" type="email" placeholder="example@duoc.cl" class="form-control" minlength="7" required>
                        </div>
                        <br><br><br>
                    </div>
                    <!-- Datos Reserva -->
                    <div class="row row-50 justify-content-lg-center align-items-lg-center" id="preferencias">
                        <span>Entrada / Salida</span>
                        <div class="col-lg-3">
                            <label for="init" class="control-label col-xs-2">Fecha estimada de inicio</label>
                            <input id="init" name="init" type="date" class="form-control" required>
                        </div>
                        <div class="col-lg-3">
                            <label for="finish" class="control-label col-xs-2">Hora estimada de inicio</label>
                            <input id="finish" name="finish" type="time" class="form-control" required>
                        </div>
                        <br><br><br>
                        <div class="col-lg-3">
                            <label for="finish" class="control-label col-xs-2">Fecha estimada de salida</label>
                            <input id="finish" name="finish" type="date" class="form-control" required>
                        </div>
                        <div class="col-lg-3">
                            <label for="finish" class="control-label col-xs-2">Hora estimada de salida</label>
                            <input id="finish" name="finish" type="time" class="form-control" required>
                        </div>
                        <br><br><br>
                    </div>
                    <!-- Información Acompañantes -->
                    <div class="row row-50 justify-content-lg-center align-items-lg-center" id="huespedes">
                        <span>Huéspedes</span>
                        <div class="col-lg-4">
                            <label for="cant_adultos" class="control-label col-xs-2">Adultos</label>
                            <select id="cant_adultos" name="cant_adultos"class="form-control" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="cant_ninos1" class="control-label col-xs-2" style="font-size:13px;margin-top:-13px">Niños<br>9 a 11 años</label>
                            <select id="cant_ninos1" name="cant_ninos1"class="form-control" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="cant_ninos2" class="control-label col-xs-2" style="font-size:13px;margin-top:-13px">Niños<br>0 a 8 años</label>
                            <select id="cant_ninos2" name="cant_ninos2"class="form-control" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <br><br><br>
                    </div>
                    <!-- Habitación -->
                    <div class="row justify-content-lg-center align-items-lg-center" id="habitacion">
                        <div class="col-lg-6">
                            <span style="margin-left:4px;">Habitación</span>
                            <div class="col-lg-12">
                                <label for="tipo_hab" class="control-label col-xs-2">Tipo de habitación</label>
                                <select id="tipo_hab" name="tipo_hab" class="form-control" required>
                                    <option value="" disabled selected>Selecciona tipo</option>
                                    <?php
                                        $reg_tipo_hab = $sentencia->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($reg_tipo_hab as $dato){
                                    ?>
                                    <option id="nombre_hab" name="nombre_hab" value="<?php echo $dato->nom_tipo_hab;?>"><?php echo $dato->nom_tipo_hab;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span>¿Servicios Extras?</span>
                            <div class="col-lg-12">
                                <label for="tipo_serv" class="control-label col-xs-2">Disponibles</label>
                                <select id="tipo_serv" name="tipo_serv" class="form-control">
                                    <option value="" disabled selected>Selecciona</option>
                                    <?php
                                        $reg_servicios = $sentencia_serv->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($reg_servicios as $dato){
                                    ?>
                                    <option id="nombre_hab" name="nombre_hab" value="<?php echo $dato->nombre_servicio;?>"><?php echo $dato->nombre_servicio;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>-->
    <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
    <!-- Validación con librerias -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script type="text/javascript" src="./JS/reservar.js"></script>
</html>