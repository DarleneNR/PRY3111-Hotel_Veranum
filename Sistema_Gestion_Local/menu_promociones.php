<?php
    include('Controlador/connection.php');

    $sentencia = $connection->query("SELECT * FROM promocion");
?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <?php include('./header.php'); ?>

        <!-- Biblioteca DataTable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

        <link rel="stylesheet" href="./CSS/menu_promociones.css" type="text/css">
        <link rel="stylesheet" href="./CSS/header.css" type="text/css">
        <link rel="stylesheet" href="./CSS/table_info.css" type="text/css">

        <title>Promociones - Veranum</title>
    </head>
    <body>
        <!-- Barra de Menú -->
        <?php include('./barra_menu.php'); ?>
        <!-- Fin Barra de Menú -->

        <!-- Tabla -->
        <div class="container " id="info-promociones">
            <h1>Detalle de Información - Promociones</h1>
            <div class="row justify-content-md-center">
                <div>
                    <span id="add">Agregar nuevo tipo de promocion
                        <a href="Acciones/agregar_promocion.php" style="color:#212529"><i class="fas fa-plus-circle" id="boton-add"></i></a>
                    </span>
                </div>
                <table id="table-info" name="listar_promociones" class="table table-bordered table-hover table-striped" action="" method="POST">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Rango de precios</th>
                            <th>Porcentaje</th>
                            <th>Comentarios</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $reg_promociones =$sentencia->fetchAll(PDO::FETCH_OBJ);
                            foreach ($reg_promociones as $dato){
                                ?>
                                <tr>
                                    <td><?php echo $dato->id_promocion;?></td>
                                    <td><?php echo ucfirst($dato->nombre_prom);?></td>
                                    <td>$<?php echo $dato->pago_minimo;?> - $<?php echo $dato->pago_maximo;?> </td>
                                    <td><?php echo $dato->porc_promocion;?>%</td>
                                    <td><?php echo ucfirst($dato->comentario);?></td>
                                    <td>
                                        <a href="Acciones/actualizar_promocion.php?id=<?php echo $dato->id_promocion;?>" style="color:#212529"
                                        name="actualizar_promocion"><i class="fas fa-pencil-alt"></i></a>  |  
                                        <a href="Acciones/eliminar_promocion.php?id=<?php echo $dato->id_promocion;?>" style="color:#212529" 
                                        name="eliminar_promocion"><i class="fas fa-trash-alt"></i></a>
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
    
    <script type="text/javascript" src="./JS/menu_promociones.js"></script>
</html>