<?php
    include('Controlador/connection.php');

    $sentencia = $connection->query("SELECT * FROM habitacion");
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

        <!-- Los iconos tipo Solid de Fontawesome-->
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">

        <!-- Biblioteca DataTable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

        <link rel="stylesheet" href="./CSS/menu_habitaciones.css" type="text/css">

        <title>Habitaciones - Veranum</title>
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
                        <li><a href="menu_habitaciones.php" style="margin-bottom:-20px;margin-left:-80px;color:#242629b9;font-size:15px;">Menú Habitaciones</a></li>
                        <li><a href="#" style="margin-bottom:-20px;margin-left:-80px;color:#242629b9;font-size:15px;">Menú Descuentos</a></li>
                        <li><a href="#" style="margin-left:-80px;color: #242629b9;font-size:15px;">Menú Promociones</a></li>
                    </ul>
                </li>
                <li><a href="#" style="text-decoration: none;">Otros</a></li>
            </ul>
        </header>
        <!-- Fin Barra de Menú -->

        <!-- Tabla -->
        <div class="container " id="info-habitaciones">
            <h1>Detalle de Información - Habitaciones</h1>
            <div class="row justify-content-md-center">
                <div>
                    <span id="add">Agregar nuevo tipo de habitación
                        <a href="Acciones/agregar_habitacion.php" style="color:#212529"><i class="fas fa-plus-circle" id="boton-add"></i></a>
                    </span>
                </div>
                <table id="table-info" name="listar_habitaciones" class="table table-bordered table-hover table-striped" action="" method="POST">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Tipo de habitación</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $reg_servicios =$sentencia->fetchAll(PDO::FETCH_OBJ);
                            foreach ($reg_servicios as $dato){
                                ?>
                                <tr>
                                    <td><?php echo $dato->id_habitacion;?></td>
                                    <td><?php echo $dato->nom_tipo_hab;?></td>
                                    <td><?php echo $dato->desc_habitacion;?></td>
                                    <td><?php echo $dato->precio;?></td>
                                    <td>
                                        <a href="Acciones/actualizar_habitacion.php?id=<?php echo $dato->id_habitacion;?>" style="color:#212529"
                                        name="actualizar_habitacion"><i class="fas fa-pencil-alt"></i></a>  |  
                                        <a href="Acciones/eliminar_habitacion.php?id=<?php echo $dato->id_habitacion;?>" style="color:#212529" 
                                        name="eliminar_habitacion"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Fin Tabla -->

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
    
    <!-- <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->

    <!-- Biblioteca DataTable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript" src="./JS/menu_habitaciones.js"></script>


    
</html>