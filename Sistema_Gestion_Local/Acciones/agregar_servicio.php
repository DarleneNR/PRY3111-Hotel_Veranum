<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel="stylesheet" href="\PRY3111-Hotel_Veranum\Sistema_Gestion_Local\CSS\agregar_servicio.css" type="text/css">

        <title>Agregar servicio extra</title>
    </head>
    <body>
        <!-- Formulario -->
        <div class="i-body">
            <div class="frame-agregar">
                <div id="title" class="row justify-content-md-center">
                    <h1 class="justify-content-md-center">Agrega un nuevo servicio</h1>
                </div>
                <form id="form-agregar" action="/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/Controlador/procesar_agregar_serv.php" name="agregar_servicio" method="POST">
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
                                    <label class="control-label col-xs-6" for="nombre_serv" style="padding-bottom: 45px;">Nombre: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="nombre_serv" name="nombre_serv" type="text" placeholder="Nombre del servicio" minlength="5" required/>
                                </div>
                                <br><br>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-2" for="precio_serv" style="padding-bottom: 45px;">Precio: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input class="form-control" id="precio_serv" name="precio_serv" type="number" placeholder="Costo diario" minlength="4"   Z required/>
                                </div>
                                <br><br>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="control-label col-xs-2" for="descripcion" style="padding-bottom: 45px;">Descripción: </label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <textarea class="form-control" id="descripcion" name="descripcion" type="text" placeholder="Describe aquí el nuevo servicio" rows="5" minlength="5" required></textarea>
                                </div>
                            </div>
                            <!-- Fin Campos para el ingreso de datos -->
                            <br><br>
                            <!-- Botones -->
                            <div class="botones">
                                <button type="reset" class="btn btn-info" id="volver" name="volver" value="volver" >Volver</button>
                                <button type="submit" class="btn btn-primary" id="agregar" name="agregar_servicio" value="agregar_servicio" data-toggle="modal" data-target="#confirmarAgregar">Agregar</button>
                                <!-- Modal confirmar agregar registro -->
                                <!-- <div class="modal fade" id="confirmarAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Servicios Extras</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Estás seguro de querer agregar la información?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary" id="enviarRegistro">Confirmar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Fin Modal confirmar agregar registro -->
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

    <script type="text/javascript" src="\PRY3111-Hotel_Veranum\Sistema_Gestion_Local\JS\agregar_servicio.js"></script>
</html>