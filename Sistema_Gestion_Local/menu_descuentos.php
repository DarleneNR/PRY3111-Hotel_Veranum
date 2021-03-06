<?php
    include('Controlador/connection.php');

    $sentencia = $connection->query("SELECT * FROM descuentos");
?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <?php include('./header.php'); ?>

        <!-- Biblioteca DataTable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

        <link rel="stylesheet" href="./CSS/menu_descuentos.css" type="text/css">
        <link rel="stylesheet" href="./CSS/header.css" type="text/css">
        <link rel="stylesheet" href="./CSS/table_info.css" type="text/css">
        
        <title>Descuentos - Veranum</title>
    </head>
    <body>
        <!-- Barra de Menú -->
        <?php include('./barra_menu.php'); ?>
        <!-- Fin Barra de Menú -->

        <!-- Tabla -->
        <div class="container " id="info-descuentos">
            <h1>Detalle de Información - Descuentos</h1>
            <div class="row justify-content-md-center">
                <div>
                    <span id="add">Agregar nuevo descuento
                        <a href="Acciones/agregar_descuento.php" style="color:#212529"><i class="fas fa-plus-circle" id="boton-add"></i></a>
                    </span>
                </div>
                <table id="table-info" name="listar_descuentos" class="table table-bordered table-hover table-striped" action="" method="POST">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre descriptivo</th>
                            <th>Porcentaje equiv.</th>
                            <th>Fecha inicio disponibilidad</th>
                            <th>Fecha término disponibilidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $reg_descuentos =$sentencia->fetchAll(PDO::FETCH_OBJ);
                            foreach ($reg_descuentos as $dato){
                                ?>
                                <tr>
                                    <td><?php echo $dato->id_descuento;?></td>
                                    <td><?php echo ucfirst($dato->nom_tipo_desc);?></td>
                                    <td><?php echo $dato->porc_desc;?>%</td>
                                    <!-- <td>echo $dato->estado_desc;</td> -->
                                    <?php $fecha_formato1 = date_create($dato->fecha_ini_desc);?>
                                    <td><?php echo date_format($fecha_formato1,'d-m-Y');?></td>
                                    <?php $fecha_formato2 = date_create($dato->fecha_fin_desc);?>
                                    <td><?php echo date_format($fecha_formato2,'d-m-Y');?></td>
                                    <td>
                                        <a href="Acciones/actualizar_descuento.php?id=<?php echo $dato->id_descuento;?>" style="color:#212529"
                                        name="actualizar_descuento"><i class="fas fa-pencil-alt"></i></a>  |  
                                        <a href="Acciones/eliminar_descuento.php?id=<?php echo $dato->id_descuento;?>" style="color:#212529" 
                                        name="eliminar_descuento"><i class="fas fa-trash-alt"></i></a>
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
    <?php include('./footer.php'); ?>

    <!-- Biblioteca DataTable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript" src="./JS/menu_descuentos.js"></script>
</html>