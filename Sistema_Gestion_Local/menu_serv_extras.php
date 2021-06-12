<?php
    include('Controlador/connection.php');

    $sentencia = $connection->query("SELECT * FROM servicios_extras");
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
        <!-- Agregados -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="./CSS/serv_extras.css" type="text/css">
        <script src="https:/kit.fontawesome.com/a50cbb9aa4.js"></script>
        <script type="text/javascript" src=""></script>

        <title>Servicios Extras - Veranum</title>
    </head>
    <body>
        <!-- Barra de Menú -->
        <header class="navbar-light shadow-sm">
            <ul>
                <li><a href="index.html" style="text-decoration:none;">Inicio</a></li>
                <li><a href="#" style="text-decoration:none;">Reservar</a></li>
                <li><a href="#" style="text-decoration:none;">Mantenedores <span class="fa fa-angle-down"></span></a>
                    <ul class="sub-menu">
                        <li><a href="menu_serv_extras.php" style="margin-bottom:-20px;margin-left:-80px;color:#242629b9;font-size:15px;">Menú Servicios Extras</a></li>
                        <li><a href="#" style="margin-bottom:-20px;margin-left:-80px;color:#242629b9;font-size:15px;">Menú Habitaciones</a></li>
                        <li><a href="#" style="margin-bottom:-20px;margin-left:-80px;color:#242629b9;font-size:15px;">Menú Descuentos</a></li>
                        <li><a href="#" style="margin-left:-80px;color: #242629b9;font-size:15px;">Menú Promociones</a></li>
                    </ul>
                </li>
                <li><a href="#" style="text-decoration: none;">Otros</a></li>
            </ul>
        </header>
        <!-- Fin Barra de Menú -->

        <!-- Tabla -->
        <div class="container" id="info-servicios">
            <h1>Detalle de Información - Servicios Extras</h1>
            <div class="row justify-content-md-center">
                <div>
                    <span id="add">Agregar nuevo servicio 
                        <a href="agregar_servicio.html" style="color:#212529"><i class="fas fa-plus-circle" id="boton-add"></i></a>
                    </span>
                </div>
                <table class="table table-bordered table-sm" id="table-info" name="listar_servicios" method="POST">
                    <thead>
                    <tr>
                        <th style="align-content: center;">ID</th>
                        <th>Nombre del Servicio Extra</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        $reg_servicios =$sentencia->fetchAll(PDO::FETCH_OBJ);

                        foreach ($reg_servicios as $dato){
                            ?>
                            <tr>
                                <td><?php echo $dato->id_servicio;?></td>
                                <td><?php echo $dato->nombre_servicio;?></td>
                                <td><?php echo $dato->desc_servicio;?></td>
                                <td><?php echo $dato->precio;?></td>
                            </tr>
                            <?php
                        }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Fin Tabla -->

        <div class="container">
            
        </div>

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
</html>