<?php

    include('connection.php');
    session_start();

    print_r($reg_servicios);


        $sentencia = $connection->query("SELECT * FROM servicios_extras");
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


